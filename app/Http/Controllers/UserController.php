<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Department;
use Image;
use App\VerifyUser;
use App\Mail\VerifyMail;

class UserController extends Controller
{
    public function showaemployee()
    {
        $employee = User::activeemployee();
        return view('listemployee', compact('employee'));
    }

    public function showiemployee()
    {
        $employee = User::inactiveemployee();
        return view('listemployeeinactive', compact('employee'));
    }

    public function showemployee()
    {
        $employee = User::allemployee();
        return view('allemployee', compact('employee'));
    }

    public function addemployee()
    {
        $department = Department::all();
        $rol='employee';
        return view('addemployee', compact('department','rol'));
    }

    public function registeremployee(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|alpha|max:30',
            'apellido_paterno' => 'required|alpha|max:30',
            'ci' => 'numeric|required|integer|digits_between:6,10|unique:users,cinit',
            'departamento'=> 'required|nocero',
            'email'=>'required|string|unique:users',
            'fecha_de_nacimiento' => 'required|before:la_de_mayoria_de_edad',
            'genero'=> 'required',
            'contrasena'=>'required|string|min:8|max:30',
        ]);
        $user = new User();
        $user->name=strtolower($request->nombre);
        $user->paternal_last_name=strtolower($request->apellido_paterno);
        $user->cinit=$request->ci;
        $user->department_id=$request->departamento;
        $user->email=strtolower($request->email);
        $elemento1=substr($request->nombre,0,1);
        $elemento2=substr($request->apellido_paterno,0,1);
        $elemento4=$request->ci;
        $user->name_user=strtolower($elemento1.$elemento2.$elemento4);
        if(empty($request->file('files'))){
            $user->image='defaultimageuser.jpg';
        }else{
         // ruta de las imagenes guardadas
          $ruta = public_path().'/img/user/';
          // recogida del form
          $imagenOriginal = $request->file('files');
          // crear instancia de imagen
          $imagen = Image::make($imagenOriginal);
          // generar un nombre aleatorio para la imagen
          $temp_name = $request->ci . '.' . $imagenOriginal->getClientOriginalExtension();
          $imagen->resize(100,100);
          // guardar imagen
          // save( [ruta], [calidad])
          $imagen->save($ruta . $temp_name, 100);
          $user->image=$temp_name;
        }
        $user->birthdate=$request->fecha_de_nacimiento;
        $user->password=bcrypt($request->contrasena);
        $user->genre=$request->genero;
        $user->save();

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        $user['contra']=$request->contrasena;
        \Mail::to($user->email)->send(new VerifyMail($user));
        $user->roles()->attach(Role::where('name', 'employee')->first());
        return redirect(route('showaemployee'))->with('successMsg','Guardado con exito!');
    }

    public function showuser()
    {
        $alluser = User::alluser();
        return view('alluser', compact('alluser'));
    }

    public function showauser()
    {
        $alluser = User::alluser();
        return view('alluser', compact('alluser'));
    }

    public function adduser()
    {
        $rol='user';
        return view('adduser', compact('rol'));
    }

    public function registeruser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha|max:30',
            'paternal_last_name' => 'required|alpha|max:30',
            'maternal_last_name' => 'alpha|max:30',
            'ci' => 'numeric|required|integer|digits_between:6,10|unique:users',
            'department'=> 'required',
            'email'=>'required|string|unique:users',
            'password'=>'required|string|confirmed|min:8|max:30'
        ]);
        $user = new User();
        $user->name=strtolower($request->name);
        $user->second_name=strtolower($request->second_name);
        $user->paternal_last_name=strtolower($request->paternal_last_name);
        $user->maternal_last_name=strtolower($request->maternal_last_name);
        $user->ci=$request->ci;
        $user->department=$request->department;
        $user->email=strtolower($request->email);
        $elemento1=substr($request->name,0,1);
        $elemento2=substr($request->paternal_last_name,0,1);
        $elemento4=$request->ci;
        $user->name_user=strtolower($elemento1.$elemento2.$elemento4);
        $user->birthdate=date("Y/m/d", strtotime($request->birthdate));
        $user->password=strtolower($request->password);
        $user->save();
        if ($request->rol == "user") {
            $user->roles()->attach(Role::where('name', 'user')->first());
            return redirect(route('showuser'))->with('successMsg','Guardado con exito!');
        }else{
            if($request->rol == "cashier"){
                $user->roles()->attach(Role::where('name', 'cashier')->first());
                return redirect(route('showcashier'))->with('successMsg','Guardado con exito!');
            }else{
                if($request->rol == "employee"){
                    $user->roles()->attach(Role::where('name', 'employee')->first());
                    return redirect(route('showaemployee'))->with('successMsg','Guardado con exito!');
                }
            }
        }
    }

    public function showpemployee()
    {
        $employee = User::pemployee();
        return view('pemployee', compact('employee'));
    }

    public function verifyUser($token)
    {
      $verifyUser = VerifyUser::where('token', $token)->first();
      if(isset($verifyUser) ){
        $user = $verifyUser->user;
        if(!$user->verified) {
          $verifyUser->user->verified = 1;
          $verifyUser->user->save();
          $status = "Your e-mail is verified. You can now login.";
        } else {
          $status = "Your e-mail is already verified. You can now login.";
        }
      } else {
        return redirect('/login')->with('warning', "Email no identificado.");
      }
      return redirect('/login')->with('status', $status);
    }
}

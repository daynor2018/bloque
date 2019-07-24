<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        return view('erkror');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public static function allemployee(){
        $alluser = DB::table('allemployee')
            ->select('allemployee.*')->get();
        return $alluser;
    }

    public static function activeemployee(){
        $alluser = DB::table('activeemployee')
            ->select('activeemployee.*')->get();
        return $alluser;
    }

    public static function inactiveemployee(){
        $alluser = DB::table('inactiveemployee')
            ->select('inactiveemployee.*')->get();
        return $alluser;
    }

    public static function pemployee(){
        $alluser = DB::table('showpemployee')
            ->select('showpemployee.*')->get();
        return $alluser;
    }

    public static function listcontract(){
        $alluser = DB::table('listcontract')
            ->select('listcontract.*')->get();
        return $alluser;
    }
}

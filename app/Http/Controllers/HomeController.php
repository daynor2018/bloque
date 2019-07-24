<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index(Request $request)
     {
         if ($request->user()->authorizeRoles(['admin','employee','client'])) {
             if ($request->user()->hasRole('admin')) {
                $valor = Product::vencido();
                 return view('homeadmin', compact('valor'));
             }else{
                 if ($request->user()->hasRole('employee')) {
                     return view('homeemp');
                 }else{
                     if ($request->user()->hasRole('client')) {
                        $products = Product::simplePaginate(4);
                        $precio = Product::precios();
                        return view('homecli',compact('products','precio'));
                     }else{
                         return view('error');
                     }
                 }
             }
         }
     }

     public function inicio(){
       $products = Product::simplePaginate(4);
       $precio = Product::precios();
       return view('homecli',compact('products','precio'));
     }

     // public function homeuser(){
     //     	return view('welcome');
     // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function login(Request $request)
    {
        
        $data=request()->validate([
            'name' => 'required',
            'password' => 'required'
        ],
        [
            'name.required' =>'Ingrese Usuario',
            'password.required' =>'Ingrese Contraseña',
        ]);
        if (Auth::attempt($data))
        {
            $con='OK';
        }
        $name=$request->get('name');
        $query=User::where('name','=' ,$name)->get();
        if ($query->count() !=0)
        {
            $hashp=$query[0]->password;
            $password=$request->get('password');
            if(password_verify($password,$hashp))
           {
                return view('bienvenido');
            }
            else
            {
              return back()->withErrors(['password'=>'Contraseña no valida'])->withInput([request('password')]);
            }
        }
        else{
            return back()->withErrors(['name'=>'Usuario no validado'])->withInput([request('usuario')]);
        }
    }
}

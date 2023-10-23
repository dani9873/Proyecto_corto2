<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
	* Función que muestra la vista de products o la vista con el formulario de Login
	*/
	public function index()
	{
	    // Comprobamos si el usuario ya está logado
	    if (Auth::check()) {
	
	        // Si está logado le mostramos la vista de products
	        return view('products');
	    }
	
	    // Si no está logado le mostramos la vista con el formulario de login
	    return view('login');
	}
	
    /**
	* Función que se encarga de recibir los datos del formulario de login, comprobar que el usuario existe y
	* en caso correcto logar al usuario
	*/
	public function login(Request $request)
	{
	    // Comprobamos que el email y la contraseña han sido introducidos
	    $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);
	
	    // Almacenamos las credenciales de email y contraseña
	    $credentials = $request->only('email', 'password');
	
	    // Si el usuario existe lo logamos y lo llevamos a la vista de "products" con un mensaje
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('products')
	            ->withSuccess('Logado Correctamente');
	    }
	
	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');
	}
	
	/**
	* Función que muestra la vista de products si el usuario está logado y si no le devuelve al formulario de login
	* con un mensaje de error
	*/
	public function products()
	{
	    if (Auth::check()) {
	        return view('products');
	    }
	
	    return redirect("/")->withSuccess('No tienes acceso, por favor inicia sesión');
    }
}
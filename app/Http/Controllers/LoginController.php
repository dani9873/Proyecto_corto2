<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;



class LoginController extends Controller
{
    public function register(Request $request){
        
        //Va1idar los datos
        $user = new User();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);
        return redirect (route('privada'));
    }
    public function login(Request $request){
        // Validacion
    $credentials = [
        "email" => $request->email,
        "password"=> $request->password,
        //"active" =>true
    ];
    $remember = ($request->has('remember') ? true :false);
    if (Auth::attempt($credentials, $remember)) {

        $request-> session()->regenerate();
        
        return redirect()->intended(route('privada'));
    }else{
        return redirect('login');
    }
}
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
    
   
    public function index()
    {   if (!Auth::check()) {
        return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
    }
    else{$producto = Product::all();
        $data['products'] = $producto;
        return view('index', $data);}
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
        }else{
            return view('create');
        }
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
        }else{
        $producto = new Product();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio_venta = $request->precio_venta;
        $producto->precio_compra = $request->precio_compra;
        $producto->categoria = $request->categoria;
        $producto->stock = $request->stock;
        $producto->fecha_caducidad = $request->fecha_caducidad;
        $producto->save();
    
            return redirect()->route('product.index');}
    }

   
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Auth::check()) {
            return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
        }else{
        $product = Product::find($id);
        return view('product.show', compact('product'));}
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::check()) {
            return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
        }else{
        $product = Product::find($id);
        $data['product'] = $product;
        return view('edit', $data);}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
        }else{
        $producto = Product::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio_venta = $request->precio_venta;
        $producto->precio_compra = $request->precio_compra;
        $producto->categoria = $request->categoria;
        $producto->stock = $request->stock;
        $producto->fecha_caducidad = $request->fecha_caducidad;
        $producto->update();

        return redirect()->route('product.index');}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login'); // Redirige a la página de inicio de sesión si no está autenticado.
        }else{
        Product::destroy($id);
        return redirect()->route('product.index');}
    }
}

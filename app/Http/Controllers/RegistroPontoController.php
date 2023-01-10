<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\User;



class RegistroPontoController extends Controller
{

public function index(){
    
    return view('auth.login');
}

public function dashboard($id){
    $user=auth()->user();
    $usuario = User::findOrFail($id);
    return view('events.dashboard',['usuario'=>$usuario]);
}


public function CreateUsuario(){
    return view('events.cadastrar');
}
}

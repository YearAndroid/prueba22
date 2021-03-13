<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsuarioController extends Controller
{
    public function mostrarDatos(){
     $user=   DB::table('usuario')->get();
        dd($user);
    }

    public function create(){
        return View('create');
    }
}

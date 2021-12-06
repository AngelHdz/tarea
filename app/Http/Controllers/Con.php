<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Con extends Controller
{
 function log(){
        return view('login');
    }
    public function iSesion (Request $request){
        $correo = $request->input('correo');
        $contrase = $request->input('contrase');

        if ($correo==0) {
            $r="Falta el correo bro";
            return view('res',["r"=>$r]);

        } else if ($contrase==0) {
            $r="Falta la contraseña hermano";
            return view('res',["r"=>$r]);
           
        } else {
            $r="Felicidades, andas con todo";
            return view('res',["r"=>$r]);
        }
    }}
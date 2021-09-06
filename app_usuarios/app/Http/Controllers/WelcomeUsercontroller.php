<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUsercontroller extends Controller
{
    
    public function index($nombre, $apodo = null){
        if ($apodo) {
            return "Bienvenido {$nombre}, tu apodo es {$apodo}";
        }
        else {
            return "Bienvenido {$nombre}, no tienes apodo";
        }
    }
}

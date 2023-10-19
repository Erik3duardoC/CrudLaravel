<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function __invoke($nombre,$edad) 
    {
        if ($edad) {
            # code...
            return "hola $nombre de $edad anios";
        } else {
            return "hola $nombre";  
        }
        
    }

}

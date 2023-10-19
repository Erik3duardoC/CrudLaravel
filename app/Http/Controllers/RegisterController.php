<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterNewUser;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function create()    {
    return view('registroUsuario');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:register_new_user,email',
            'password' => 'required|min:8',
        ]);
    
        $user = new RegisterNewUser();
        $user->nombre = $request->input('nombre');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        return redirect()->route('index');
    }
}

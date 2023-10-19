<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        return view('index');
        //
    }
    public function create(){
        return view('create');
        //
    }
    public function store(Request $request){
        // print_r($_POST);
        //
        $contacto = new Contacto();
        $contacto->nombre = $request->post('nombre');
        $contacto->apellidos = $request->post('apellidos');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('email');
        $contacto->save();

        return redirect()->route("read")->with("success", "");
    }
    public function read(){
        //
        $datos = Contacto::all();
        return view('read', compact('datos'));

    }
    public function update($id){
        // echo $id;

        $contacto = Contacto::find($id); 
        return view('update',compact('contacto'));
        //
    }
    public function edit(Request $request, $id){

        $contacto = Contacto::find($id);
        $contacto->nombre = $request->post('nombre');
        $contacto->apellidos = $request->post('apellidos');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('email');
        $contacto->save();
        return redirect()->route("read")->with("success", "");
        //
    }
    public function delete($id){
        $contacto = Contacto::find($id); 
        return view('delete',compact('contacto'));

        //
    }
    public function destroy($id){
        // print_r($id);
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->route("read")->with("success", "");
        //
    }

}

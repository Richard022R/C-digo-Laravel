<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servicio;

use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{

    public function index()
    {

        $servicios = Servicio::get();

        return view('servicios', compact('servicios'));
    }

    public function show($id){
        return view('show',[
            'servicio' => Servicio::find($id)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(CreateServicioRequest $request){
        
        Servicio::create($request->validated());
        return redirect()->route('servicios.index');
    }

}

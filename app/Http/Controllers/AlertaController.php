<?php

namespace App\Http\Controllers;
use App\Alerta;

use Illuminate\Http\Request;

class AlertaController extends Controller
{
    public function index(){
        return Alerta::all();
    }

    public function show(Alerta $alerta){
        return $alerta;
    }

    public function store(Request $request){
        $alerta = Alerta::create($request->all());
        return response()->json($alerta, 201);
    }

    public function update(Request $request, Alerta $alerta){
        $alerta->update($request->all());
        return response()->json($alerta, 200);
    }

    public function delete(Alerta $alerta){
        $alerta->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;
use App\Alerta;

use Illuminate\Http\Request;

class AlertaController extends Controller
{

    public function index(){
        return Alerta::all();
    }
    
    public function show($id){
        return Alerta::find($id);
    }

    public function store(Request $request){
        return Alerta::create($request->all());
    }

    public function update(Request $request, $id){
        $article = Alerta::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id){
        $article = Alerta::findOrFail($id);
        $article->delete();

        return 204;
    }

    
}

<?php

namespace App\Http\Controllers;
use App\Parametro;

use Illuminate\Http\Request;

class ParametroController extends Controller
{
    public function index(){
        return Parametro::all();
    }
    
    public function show($id){
        return Parametro::find($id);
    }

    public function store(Request $request){
        return Parametro::create($request->all());
    }

    public function update(Request $request, $id){
        $article = Parametro::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id){
        $article = Parametro::findOrFail($id);
        $article->delete();

        return 204;
    }
}

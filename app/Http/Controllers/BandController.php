<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\View\View;
// use Illuminate\Validation\ValidationException;
// use Illuminate\View\Middleware\ShareErrorsFromSession;
// use Illuminate\Support\ViewErrorBag;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;


class BandController extends Controller
{
    public function getAll(){
        $bands = $this->getBands();
        return response()->json($bands);
    }
    
    public function getById($id){

        $band = null;
        foreach($this->getBands() as $b){
            if ($b['id'] == $id){
                $band = $b;
            }
        }
        return $band ? response()->json($band): abort(404);
    }

    public function getestilo($estilo){

        $band = null;
        foreach($this->getBands() as $b){
            if ($b['estilo'] == $estilo){
                $band = $b;
            }
        }
        return $band ? response()->json($band): abort(404);
    }

    public function store(Request $request){
        // return dd($request->all());
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|min:3'
        // ]);
        // dd($errors->all());
        
        $validator = Validator::make($request->all(), [
            'id' => 'numeric',
            'name' => 'required|min:3',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Processar os dados fornecidos pelo usuário aqui

        return response()->json(['message' => 'Banda criada com sucesso!'], 201);
        
        // return response()->json($request->all());
    
    }

//     public function create(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'nome' => 'required|min:3',
//     ]);

//     if ($validator->fails()) {
//         return response()->json(['errors' => $validator->errors()], 422);
//     }

//     // Processar os dados fornecidos pelo usuário aqui

//     return response()->json(['message' => 'Usuário criado com sucesso!'], 201);
// }



    
    protected function getBands(){
        return [
            ['id' => 1, 'name' => 'Banda 1', 'estilo' => 'Estilo 1'],
            ['id' => 2, 'name' => 'Banda 2', 'estilo' => 'Estilo 2'],
            ['id' => 3, 'name' => 'Banda 3', 'estilo' => 'Estilo 3'],
            ['id' => 4, 'name' => 'Banda 4', 'estilo' => 'Estilo 4'],
            ['id' => 5, 'name' => 'Banda 5', 'estilo' => 'Estilo 5'],
        ];
    }
}

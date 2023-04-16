<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller {
    public function hello($name, Request $request){

        // return 'Hello Controller! '. $name;
        // return response()->json(data:"Hello World! {$name}");
        return response()->json([
            'oi'=> 'Hello {$name}',
            'tchau'=>'Tchau!',
            'Ola'=> $request->new,
            'all'=> $request->all()
        ]);

    }
}

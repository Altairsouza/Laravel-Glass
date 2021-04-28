<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    public function store(request $request){

        $test = new Test;
        $test->nome = $request->nome;
        $test->senha = $request->senha;
        $test->email = $request->email;
        $test->sexo = $request->sexo;
        $test->save();
        return redirect('/');
    }
}

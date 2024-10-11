<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;

class TestController extends Controller
{
    function test(){
        // 1.- Conectar con el modelo que conecta a la base de datos
        $client = Client::find(1);
        var_dump($client); // 1.5.- Imprimetodos los datos de paso

        // 2.- Retornar una vista con la informacion del modelo
        return view('testdb', ['client' => $client]);
    }
}

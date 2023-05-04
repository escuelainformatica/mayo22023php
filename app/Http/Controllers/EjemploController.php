<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use App\Servicios\ComputadorServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Ramsey\Collection\Collection;

class EjemploController extends Controller
{
    public function ejemplo() {
        $antiguo=Cache::get("contador",1);
        $antiguo++;
        Cache::set('contador',$antiguo,3);
        Cache::set('valores',[1,2,3,"hola"],100);


        echo "<b>controlador</b>: hola, se esta llamando al controlador $antiguo<br>";
        return view("ejemplo");
    }
    public function listar(ComputadorServicio $computadorServicio) {
        $refrescar=request('refrescar',null);
        if($refrescar==='refrescar') {
            Cache::forget('listado');
            var_dump('refrescando..');
        }

        $computadores= $computadorServicio->listar($estaCache);
        //[$estaCache,$computadores]= $computadorServicio->listar2();
        return view("listar",['computadores'=>$computadores,'estacache'=>$estaCache]);
    }
}


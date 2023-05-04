<?php
namespace App\Servicios;
use App\Models\Computador;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class ComputadorServicio {
    public function listar(&$estaCache):Collection {
        $estaCache="el valor esta en el cache";
        $computadores=Cache::get('listado',null);
        if($computadores===null) {
            $estaCache="el valor no esta en el cache";
            $computadores=Computador::all(); // Collect.
            Cache::set('listado',$computadores,100);
        }
        return $computadores;
    }
    public function listar2():array {
        $estaCache="el valor esta en el cache";
        $computadores=Cache::get('listado',null);
        if($computadores===null) {
            $estaCache="el valor no esta en el cache";
            $computadores=Computador::all(); // Collect.
            Cache::set('listado',$computadores,100);
        }
        return [$estaCache,$computadores];
    }
}

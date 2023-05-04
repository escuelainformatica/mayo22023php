<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EjemploProvider extends ServiceProvider
{
    public $contador=0;
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->contador++;
        echo "<b>Proveedor registro</b>: hola, se esta registrando $this->contador<br>";
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->contador++;
        echo "<b>Proveedor boteo</b>: hola, se esta boteando $this->contador<br>";
    }
    
}

<?php

namespace App\Console\Commands;

use App\UseCases\CalculosUseCase;
use Illuminate\Console\Command;

class BuscarNumeroCommand extends Command
{
    protected $signature = 'app:buscar-numero-command';

    protected $description = 'Este comando sera para buscar numeros en un array';

    public function handle()
    {
        $colletion = [1,2,10,15,23,50];
        $userNumberFind = $this->ask('ingrese un numero');
        $CalculoUseCase = new CalculosUseCase();
        $found =  $CalculoUseCase->buscarNumero($colletion, $userNumberFind);

        if ($found === true) {
          $this->info( "el numero $userNumberFind fue encontrado");
        }else {
            $this->error('El numero no esta en nuestra lista');
        }

    }
}

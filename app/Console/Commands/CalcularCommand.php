<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UseCases\CalculadoraUseCase;

class CalcularCommand extends Command
{
    protected $signature = 'app:calcular';
    protected $description = 'Calcular';
    public function handle()
    {

        $dato = new CalculadoraUseCase();

        // Captura de datos
        $numero1 = $this->ask("Numero 1: ");
        $numero2 = $this->ask("Numero 2: ");
        $operacion = $this->ask("+, -, *, /");

        // Sumar:
        if ($operacion == '+') {
            $dato->sumar($numero1, $numero2);
        }

        // Restar:
        if ($operacion == '-') {
            $dato->restar($numero1, $numero2);
        }

        // Multiplicar:
        if ($operacion == '*') {
            $dato->multiplicar($numero1, $numero2);
        }

        // Dividir:
        if ($operacion == '/') {
            $dato->dividir($numero1, $numero2);
        }

    }
}

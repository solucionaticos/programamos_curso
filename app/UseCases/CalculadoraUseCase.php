<?php
namespace App\UseCases;

class CalculadoraUseCase {

    public function sumar($numero1, $numero2) {
        $resultado = $numero1 + $numero2;
        echo "Resultado de la Suma ($numero1, $numero2) = $resultado
";
    }
    public function restar($numero1, $numero2) {
        $resultado = $numero1 - $numero2;
        echo "Resultado de la Resta ($numero1, $numero2) = $resultado
";
    }
    public function multiplicar($numero1, $numero2) {
        $resultado = $numero1 * $numero2;
        echo "Resultado de la Multiplicación ($numero1, $numero2) = $resultado
";
    }
    public function dividir($numero1, $numero2) {
        $resultado = $numero1 / $numero2;
        echo "Resultado de la División ($numero1, $numero2) = $resultado
";
    }

}


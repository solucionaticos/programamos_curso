<?php
namespace App\UseCases;

class CalculosUseCase{

    public function buscarNumero(array $colletion, int $numero)
    {
        $found = false;

        for ($i=0; $i <sizeof($colletion) ; $i++) {
           if ($colletion[$i] == $numero) {
           $found = true;
           }
        }

        return $found;
    }

}

<?php
namespace App\UseCases;

class SaludosUseCase {

    protected $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function saludo() {
        return "Hola $this->nombre";
    }

    public function despedida() {
        return ", y hasta luego $this->nombre";
    }

    public function __destruct() {
        echo "
";
    }

}

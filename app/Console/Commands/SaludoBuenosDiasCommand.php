<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UseCases\SaludosUseCase;

class SaludoBuenosDiasCommand extends Command
{
    protected $signature = 'app:saludo';
    protected $description = 'Command description';
    protected $saludo;

    public function handle()
    {
        $this->saludo = new SaludosUseCase("David");
        echo $this->saludar();
        echo $this->despedirse();
    }

    public function saludar() {
        return $this->saludo->saludo();
    }

    public function despedirse() {
        return $this->saludo->despedida();
    }


}

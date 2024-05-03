<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\UseCases\ContactCreateUseCase;

class CreateContactCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-contact-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask("Nombre: ");
        $phone = $this->ask("Teléfono: ");

        $contact = new ContactCreateUseCase($name, $phone);
        $contact->create();

        $this->info("Registro creado --->>>> Nombre: $name y Teléfono: $phone");

    }
}

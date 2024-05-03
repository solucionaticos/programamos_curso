<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;

class ListContactsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:list-contacts-command';

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
        $contacts = Contact::all();

        foreach ($contacts as $row) {
            echo "Nombre: {$row['name']}, Teléfono: {$row['phone']} \n";
        }

    }
}

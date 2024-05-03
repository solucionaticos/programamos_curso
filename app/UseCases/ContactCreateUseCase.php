<?php
namespace App\UseCases;

use App\Models\Contact;

class ContactCreateUseCase{

    private $name;
    private $phone;

    public function __construct(string $nombre, string $telefono) {
        $this->name = $nombre;
        $this->phone = $telefono;
    }

    public function create() {
        Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
        ]);
    }

}

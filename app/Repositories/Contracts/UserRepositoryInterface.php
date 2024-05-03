<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface {

    public function list(): Collection;
    public function create(array $attributes): void;
    public function update(array $attributes, int $id): void;
    public function delete(int $id): void;

}

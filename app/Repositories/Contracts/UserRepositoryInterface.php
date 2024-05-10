<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

use App\Http\DTOS\AuthUserDTO;

interface UserRepositoryInterface {

    public function list(): Collection;
    public function create(AuthUserDTO $authUserDTO): void;
    public function update(array $attributes, int $id): void;
    public function delete(int $id): void;

}

<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\DTOS\AuthUserDTO;

class EloquentUserRepository implements UserRepositoryInterface
{

    public function list(): Collection {
        $users = User::all();
        return $users;
    }

    public function create(AuthUserDTO $authUserDTO): void {
        User::create([
            'name' => $authUserDTO->getName(),
            'email' => $authUserDTO->getEmail(),
            'password' => $authUserDTO->getPassword(),
        ]);
    }

    public function update(array $attributes, int $id): void {
        // Obtener el usuario a actualizar
        $user = User::findOrFail($id);

        // Actualizar los atributos del usuario
        $user->name = $attributes['name'];
        $user->email = $attributes['email'];
        // $user->password = bcrypt($attributes['password']);
        $user->password = $attributes['password'];
        $user->save();
    }

    public function delete(int $id): void {
        $user = User::findOrFail($id);
        $user->delete();
    }

}

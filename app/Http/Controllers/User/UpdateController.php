<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\User;
// use App\Repositories\EloquentUserRepository;
use App\Repositories\Contracts\UserRepositoryInterface;

class UpdateController extends Controller
{

    public function __construct(private readonly UserRepositoryInterface $userRespository)
    {}

    public function __invoke(Request $request, int $id) {
/*
        // Obtener el usuario a actualizar
        $user = User::findOrFail($id);

        // Actualizar los atributos del usuario
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
*/

        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|string|min:8',
        ]);

        $attributes = [
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'password' => $request->input("password"),
        ];

        //$user = new EloquentUserRepository();
        //$user->update($attributes, $id);


        $user = $this->userRespository->update($attributes, $id);

        // Retornar una respuesta JSON
        return response()->json('Registro actualizado correctamente');

    }
}

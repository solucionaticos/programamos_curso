<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\User;
// use App\Repositories\EloquentUserRepository;
use App\Repositories\Contracts\UserRepositoryInterface;

class CreateController extends Controller
{

    public function __construct(private readonly UserRepositoryInterface $userRespository)
    {}

    public function __invoke(Request $request) {
        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $attributes = [
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'password' => $request->input("password"),
        ];

        // User::create($attributes);
        //$user = new EloquentUserRepository();
        //$user->create($attributes);

        $user = $this->userRespository->create($attributes);

        return response()->json('Registro insertado!');
    }
}

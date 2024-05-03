<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\User;
// use App\Repositories\EloquentUserRepository;
use App\Repositories\Contracts\UserRepositoryInterface;

class DeleteController extends Controller
{

    public function __construct(private readonly UserRepositoryInterface $userRespository)
    {}

    public function __invoke(int $id) {

        // $user = User::findOrFail($id);
        // $user->delete();

        //$user = new EloquentUserRepository();
        //$user->delete($id);

        $user = $this->userRespository->delete($id);

        return response()->json("Registro $id eliminado correctamente!");

    }
}

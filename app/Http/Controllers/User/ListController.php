<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepositoryInterface;

class ListController extends Controller
{

    public function __construct(private readonly UserRepositoryInterface $userRespository)
    {}

    public function list() {

        $list = $this->userRespository->list();

        return response()->json($list);
    }
}

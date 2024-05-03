<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('user/login');
    }

    public function loginValidate(Request $request) {

        echo "Correo: ";
        echo $request->get("email");
        echo "<br>";
        echo "Clave: ";
        echo $request->get("password");
        echo "<br>";

        // return response()->json($request);

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function searchUser(Request $request)
    {
        $name = $request->query("name");
        $email = $request->query("email");

        $response = response()->json([
            "name" => $name,
            "email" => $email,
            "address" => [
                [
                    "city" =>"Jakarta",
                    "country" =>"Indonesia"
                ],
                [
                    "city" =>"Bandung",
                    "country" =>"Indonesia"
                ]
            ],
        ]);

        return $response;
    }

    public function findUser($id)
    {
        return "user $id has logged in";
    }
}

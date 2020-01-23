<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    /**
     * post sing_up
     */
    public function post(Request $request)
    {
        // このレスポンスで、正しい値にすればログインできる
        $obj = [
            "id" => 800,
            "name" => "a",
            "bio" => "a",
            "token" => "YkVQrQEHkhGrr5vvNDBicQtt",
            "email" => "a@a1",
            "created_at" => "2020-01-23T10:22:22.460Z",
            "updated_at" => "2020-01-23T10:22:22.460Z",
        ];
        return $obj;
    }
}

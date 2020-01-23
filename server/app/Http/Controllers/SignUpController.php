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
        // ガード:name, bio, email, pass, passconf があること
        $errMsgList = [];
        if ($request->sign_up_user_params['name']) {
            $name = $request->sign_up_user_params['name'];
        } else {
            $errMsgList[] = "nameを入力してください";
        }
        if ($request->sign_up_user_params['bio']) {
            $bio = $request->sign_up_user_params['bio'];
        } else {
            $errMsgList[] = "bioを入力してください";
        }
        if ($request->sign_up_user_params['email']) {
            $email = $request->sign_up_user_params['email'];
        } else {
            $errMsgList[] = "emailを入力してください";
        }
        if ($request->sign_up_user_params['password']) {
            $password = $request->sign_up_user_params['password'];
        } else {
            $errMsgList[] = "passwordを入力してください";
        }
        if ($request->sign_up_user_params['password_confirmation']) {
            $password_confirmation = $request->sign_up_user_params['password_confirmation'];
        } else {
            $errMsgList[] = "password_confirmationを入力してください";
        }
        if (0 !== count($errMsgList)) {
            /* 空なパラメタがあった */
            return ['error' => ['messages' => $errMsgList]];
        }
        return ["result" => "全部何かしら入っている"];

        // ガード:emailが登録済みでないこと
        // ガード:passとpassconfが一致すること

        // このレスポンスで、正しい値にすればログインできる
        /*
        $obj = [
        "id" => 800,
        "name" => "a",
        "bio" => "a",
        "token" => "YkVQrQEHkhGrr5vvNDBicQtt",
        "email" => "a@a1",
        "created_at" => "2020-01-23T10:22:22.460Z",
        "updated_at" => "2020-01-23T10:22:22.460Z",
        ];
         */
        return ['a' => 'b'];
    }
}

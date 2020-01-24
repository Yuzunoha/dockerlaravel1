<?php

namespace App\Http\Controllers;

use App\User;
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

        // ガード:emailが登録済みでないこと
        if (User::where('email', $email)->find(1)) {
            /* emailが登録済みである */
            $errMsgList[] = "email:${email}は既に登録されています";
        }

        // ガード:passとpassconfが一致すること
        if ($password != $password_confirmation) {
            /* passとpassconfが一致しない */
            $errMsgList[] = "passwordとpassword_confirmationが一致しません";
        }

        // エラーメッセージがが1つでもあればエラー
        if (0 !== count($errMsgList)) {
            return ['error' => ['messages' => $errMsgList]];
        }
        return ["result" => "エラーなし"];

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
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            $statusCode = 400; // 400 Bad Request
            $obj = ['error' => ['messages' => $errMsgList]];
            return response()->json($obj, $statusCode);
        }

        // ガード:emailが登録済みでないこと
        if (User::where('email', $email)->first()) {
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
            $statusCode = 400; // 400 Bad Request
            $obj = ['error' => ['messages' => $errMsgList]];
            return response()->json($obj, $statusCode);
        }

        /* ガード突破 */
        // ユーザ新規登録
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'bio' => $bio,
            'password' => Hash::make($password),
            'api_token' => str_random(60),
        ]);

        // 返却
        $statusCode = 200; // 200 OK
        $obj = [
            "id" => $user->id,
            "name" => $user->name,
            "bio" => $user->bio,
            "token" => $user->api_token,
            "email" => $user->email,
            "created_at" => $user->created_at,
            "updated_at" => $user->updated_at,
        ];
        return response()->json($obj, $statusCode);
    }
}

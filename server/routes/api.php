<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('v2/user', function (Request $request) {
    return $request->user();
});

Route::post('v2/sign_up', 'SignUpController@post');

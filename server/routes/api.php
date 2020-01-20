<?php

use Illuminate\Http\Request;

Route::get('/v2', function (Request $request) {
    return "hello";
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

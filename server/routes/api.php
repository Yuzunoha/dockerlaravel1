<?php

use Illuminate\Http\Request;

Route::get('/v2', function (Request $request) {
    return "hello";
});

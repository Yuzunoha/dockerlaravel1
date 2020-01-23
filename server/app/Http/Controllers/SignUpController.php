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
        return [
            'keyA' => 'valueA',
            'keyB' => 'valueB',
            'keyC' => 'valueC',
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function store(Request $request){
        $token = $request->token;
        return response()->json(200)->cookie(
            'token', $token, 999999999999999999999
        );
    }
}
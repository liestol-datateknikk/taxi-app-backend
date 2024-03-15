<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokenController extends Controller
{
    public function create(Request $request)
    {
        $token = $request->user()->createToken($request->token_name);
 
        return ['token' => $token->plainTextToken];
    }
}

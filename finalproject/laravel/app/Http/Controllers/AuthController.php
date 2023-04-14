<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth');
    }

    public function login(Request $request)
    {
        $datanya = $request->only([
            'username',
            'password'
        ]);

        $response = Http::post('https://travelark.up.railway.app/api/auth/login', [
            'username' => $datanya['username'],
            'password' => $datanya['password']
        ]);

        $this->storeJwt($request, json_decode($response->body()));

        return redirect()->route('discovery');
    }

    public function storeJwt(Request $request, $datanya)
    {
        // dd($request->all(), $datanya);

        try {
            $token_enc = Crypt::encryptString($datanya->access_token);
            $request->session()->put([
                'token' => $token_enc,
                'username' => $datanya->datanya->username,
                'level' => $datanya->datanya->level
            ]);
        } catch (Exception $error) {
            return $error;
        }

        return true;
    }
}

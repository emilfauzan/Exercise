<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;


class loginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $data = $request->only(['email', 'password']);

        $response = Http::post('http://172.168.102.134:7889/api/login', [
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        // dd($response->body());

        $this->storeJwt($request, $result = json_decode($response->body()));

        return redirect()->route('admingallery');
    }

    public function storeJwt(Request $request, $data)
    {
        try {
            $token_enc = Crypt::encryptString($data->access_token);
            $request->session()->put(['token' => $token_enc, 'email' => $data->data->email, 'level' => $data->data->level]);
        } catch (Exception $e) {
            return $e;
        }
        return true;
    }
}

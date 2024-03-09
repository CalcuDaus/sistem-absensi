<?php

namespace App\Http\Controllers;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    public function index()
    {
        return view('V_login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => ':attribute Wajib Diisi !',
            'password.required' => ':attribute Wajib Diisi !',
        ]);

        if ($validator->fails()) {
            return redirect()->route('home')
                ->withErrors($validator)
                ->withInput();
        }

        $info_login = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($info_login)) {
            return redirect()->route('dashboard')->with(['success' => 'Login Berhasil']);
        }
        return redirect()->route('home')->with(['error' => 'Username atau Password Anda Salah !']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

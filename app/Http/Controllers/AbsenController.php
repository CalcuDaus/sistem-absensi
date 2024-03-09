<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'absen'
        ];

        return view('V_absen', $data);
    }
}

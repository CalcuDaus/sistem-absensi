<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Master Data'
        ];

        return view('siswa.V_siswa', $data);
    }
}

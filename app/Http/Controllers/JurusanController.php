<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Master Data'
        ];

        return view('jurusan.V_jurusan', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Master Data'
        ];

        return view('V_periode', $data);
    }
}

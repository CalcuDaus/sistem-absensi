<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrukturController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Master Data'
        ];

        return view('instruktur.V_instruktur', $data);
    }
}
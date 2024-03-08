<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $dt_sekolah = Sekolah::all();
        $data = [
            'title' => 'Master Data',
            'dt_sekolah' => $dt_sekolah,
        ];

        return view('V_sekolah', $data);
    }
}

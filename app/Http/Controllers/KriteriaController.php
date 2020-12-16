<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $bobot = Bobot::all();

        return view('pages.kriteria', [
            'bobots' => $bobot
        ]);
    }
}

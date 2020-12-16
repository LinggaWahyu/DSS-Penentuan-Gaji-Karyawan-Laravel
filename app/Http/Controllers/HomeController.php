<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $karyawan = Karyawan::all();

        return view('pages.home', [
            'karyawan' => $karyawan
        ]);
    }

    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        $subkriteria = Subkriteria::all();
        $kriteria = Kriteria::all();
        $penilaian = Penilaian::all()->where('id_karyawan', $id);

        if(!$penilaian) {
            $penilaian = null; 
        }

        return view('pages.penilaian', [
            'karyawan' => $karyawan,
            'subkriterias' => $subkriteria,
            'kriterias' => $kriteria,
            'penilaians' => $penilaian,
        ]);
    }

    public function save(Request $request, $id)
    {
        $data = $request->all();

        $penilaian = Penilaian::all()->where('id_karyawan', $id);

        if(count($penilaian) != 0) {
            $index = 1;
            foreach ($penilaian as $number => $nilai) {
                $nilai->id_sub_kriteria = $data[$index];
                $nilai->save();
                $index++;
            }
        } else {
            for ($i=1; $i <= 13 ; $i++) { 
                if ($i <= 6) {
                    $input = [
                        'id_karyawan' => $id,
                        'id_kategori' => 1,
                        'id_kriteria' => $i,
                        'id_sub_kriteria' => $data[$i]
                    ];

                    Penilaian::create($input);
                } else if ($i > 6 && $i <= 10) {
                    $input = [
                        'id_karyawan' => $id,
                        'id_kategori' => 2,
                        'id_kriteria' => $i,
                        'id_sub_kriteria' => $data[$i]
                    ];

                    Penilaian::create($input);
                } else {
                    $input = [
                        'id_karyawan' => $id,
                        'id_kategori' => 3,
                        'id_kriteria' => $i,
                        'id_sub_kriteria' => $data[$i]
                    ];

                    Penilaian::create($input);
                }
            }
        }

        return redirect()->route('home');
    }
}

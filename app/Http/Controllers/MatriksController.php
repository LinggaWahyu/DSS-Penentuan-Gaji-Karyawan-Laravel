<?php

namespace App\Http\Controllers;

use App\Models\KaliBobot;
use App\Models\Karyawan;
use App\Models\Kategori;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\Normalisasi;
use App\Models\Ranking;
use App\Models\TotalBobot;
use Illuminate\Http\Request;

class MatriksController extends Controller
{
    public function index_nilai($id_kategori)
    {
        $kategori = Kategori::all();
        $nilai = Nilai::all()->where('id_kategori', $id_kategori);
        $kriteria = Kriteria::all()->where('id_kategori', $id_kategori);
        $karyawan = Karyawan::all();

        return view('pages.nilai', [
            'kategoris' => $kategori,
            'nilais' => $nilai,
            'kriterias' => $kriteria,
            'karyawans' => $karyawan,
            'id_kategori' => $id_kategori
        ]);
    }

    public function show_nilai(Request $request)
    {
        $data = $request->all();

        return redirect()->route('nilai', $data['kategori']);
    }

    public function index_normalisasi($id_kategori)
    {
        $kategori = Kategori::all();
        $nilai = Normalisasi::all()->where('id_kategori', $id_kategori);
        $kriteria = Kriteria::all()->where('id_kategori', $id_kategori);
        $karyawan = Karyawan::all();

        return view('pages.normalisasi', [
            'kategoris' => $kategori,
            'nilais' => $nilai,
            'kriterias' => $kriteria,
            'karyawans' => $karyawan,
            'id_kategori' => $id_kategori
        ]);
    }

    public function show_normalisasi(Request $request)
    {
        $data = $request->all();

        return redirect()->route('normalisasi', $data['kategori']);
    }

    public function index_kali_bobot($id_kategori)
    {
        $kategori = Kategori::all();
        $nilai = KaliBobot::all()->where('id_kategori', $id_kategori);
        $kriteria = Kriteria::all()->where('id_kategori', $id_kategori);
        $karyawan = Karyawan::all();

        return view('pages.perkalian-bobot', [
            'kategoris' => $kategori,
            'nilais' => $nilai,
            'kriterias' => $kriteria,
            'karyawans' => $karyawan,
            'id_kategori' => $id_kategori
        ]);
    }

    public function show_kali_bobot(Request $request)
    {
        $data = $request->all();

        return redirect()->route('kali-bobot', $data['kategori']);
    }

    public function index_total_bobot($id_kategori)
    {
        $kategori = Kategori::all();
        $nilai = TotalBobot::all()->where('id_kategori', $id_kategori);
        $karyawan = Karyawan::all();

        return view('pages.total-bobot', [
            'kategoris' => $kategori,
            'nilais' => $nilai,
            'karyawans' => $karyawan,
            'id_kategori' => $id_kategori
        ]);
    }

    public function show_total_bobot(Request $request)
    {
        $data = $request->all();

        return redirect()->route('total-bobot', $data['kategori']);
    }

    public function index_ranking($id_kategori)
    {
        $kategori = Kategori::all();
        $nilai = Ranking::all()->where('id_kategori', $id_kategori);
        $karyawan = Karyawan::all();

        return view('pages.ranking', [
            'kategoris' => $kategori,
            'nilais' => $nilai,
            'karyawans' => $karyawan,
            'id_kategori' => $id_kategori
        ]);
    }

    public function show_ranking(Request $request)
    {
        $data = $request->all();

        return redirect()->route('ranking', $data['kategori']);
    }
}

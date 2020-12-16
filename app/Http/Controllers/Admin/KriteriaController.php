<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bobot;
use App\Models\Kategori;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Skala;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bobot = Bobot::all();
        $kriteria = Kriteria::all();

        return view('pages.admin.kriteria.index', [
            'kriterias' => $kriteria,
            'bobots' => $bobot
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $skala = Skala::all();

        return view('pages.admin.kriteria.create', [
            'kategoris' => $kategori,
            'skalas' => $skala
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Kriteria::create($data);

        $last_kriteria = Kriteria::all()->last();

        $data['id_kriteria'] = $last_kriteria->id_kriteria;

        Bobot::create($data);

        return redirect()->route('kriteria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        $kategori = Kategori::all();
        $bobot = Bobot::all()->where('id_kriteria', $id)->first();
        $skala = Skala::all();

        return view('pages.admin.kriteria.edit', [
            'kriteria' => $kriteria,
            'kategoris' => $kategori,
            'bobot' => $bobot,
            'skalas' => $skala
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $kriteria = Kriteria::find($id);

        $bobot = Bobot::where('id_kriteria', $id)->firstOrFail();

        $kriteria->update($data);
        $bobot->update($data);

        return redirect()->route('kriteria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriteria = Kriteria::find($id);
        $bobot = Bobot::where('id_kriteria', $id)->firstOrFail();
        $penilaians = Penilaian::where('id_kriteria', $id)->get();
        $subkriterias = Subkriteria::where('id_kriteria', $id)->get();

        foreach ($subkriterias as $subkriteria) {
            $subkriteria->delete();
        }

        foreach ($penilaians as $penilaian) {
            $penilaian->delete();
        }

        $bobot->delete();
        $kriteria->delete();
        
        return redirect()->route('kriteria.index');
    }
}

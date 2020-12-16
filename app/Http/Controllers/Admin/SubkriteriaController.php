<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkriterias = Subkriteria::all()->sortBy('id_kriteria');

        return view('pages.admin.subkriteria.index', [
            'subkriterias' => $subkriterias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriterias = Kriteria::all();

        return view('pages.admin.subkriteria.create', [
            'kriterias' => $kriterias
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

        Subkriteria::create($data);

        return redirect()->route('subkriteria.index');
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
        $kriterias = Kriteria::all();
        $subkriteria = Subkriteria::find($id);

        return view('pages.admin.subkriteria.edit', [
            'kriterias' => $kriterias,
            'subkriteria' => $subkriteria
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

        $subkriteria = Subkriteria::find($id);

        $subkriteria->update($data);

        return redirect()->route('subkriteria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkriteria = Subkriteria::find($id);

        $subkriteria->delete();

        return redirect()->route('subkriteria.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();

        return view('pages.admin.karyawan.index',[
            'karyawans' => $karyawan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.karyawan.create');
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

        Karyawan::create($data);

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        $penilaian = Penilaian::all()->where('id_karyawan', $id);

        return view('pages.admin.karyawan.detail',[
            'karyawan' => $karyawan,
            'penilaians' => $penilaian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);

        return view('pages.admin.karyawan.edit', [
            'karyawan' => $karyawan
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

        $karyawan = Karyawan::find($id);

        $karyawan->update($data);

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);

        $penilaians = Penilaian::where('id_karyawan', $id)->get();

        foreach ($penilaians as $penilaian) {
            $penilaian->delete();
        }

        $karyawan->delete();

        return redirect()->route('karyawan.index');
    }
}

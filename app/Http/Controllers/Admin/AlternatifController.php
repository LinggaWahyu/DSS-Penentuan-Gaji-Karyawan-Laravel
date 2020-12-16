<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::all();

        if(Auth::user() && Auth::user()->roles == 'ADMIN')
        {
            return view('pages.admin.alternatif.index', [
                'alternatifs' => $alternatif
            ]);
        } else {
            return view('pages.alternatif', [
                'alternatifs' => $alternatif
            ]);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alternatif = Alternatif::find($id);

        return view('pages.admin.alternatif.edit', [
            'alternatif' => $alternatif
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

        $item = Alternatif::where('id_alternatif', $id)->firstOrFail();

        $item->update($data);

        return redirect()->route('alternatif.index');
    }

}

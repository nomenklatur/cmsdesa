<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OfficialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pemerintahan/pemerintahan_desa/create', [
            'title' => 'Pemerintahan Desa',
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
        $data = $request->validate([
            'nama' => 'required|min:4|max:50',
            'jabatan' => 'required|string'
        ]);
        $data['uri'] = Str::random(30);
        Official::create($data);
        return redirect('/admin/pemerintahan')->with('officials_created', 'Pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function show(Official $official)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function edit(Official $pegawai)
    {
        return view('admin/pemerintahan/pemerintahan_desa/edit', [
            'title' => $pegawai->nama,
            'data' => $pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Official  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Official $pegawai)
    {
        $data = $request->validate([
            'nama' => 'required|min:4|max:50',
            'jabatan' => 'required|string'
        ]);
        Official::where('id', $pegawai->id)->update($data);
        return redirect('/admin/pemerintahan')->with('officials_updated', 'Pegawai berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Official  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Official $pegawai)
    {
        Official::destroy($pegawai->id);
        return redirect('/admin/pemerintahan')->with('officials_deleted', 'Pegawai berhasil dihapus');
    }
}

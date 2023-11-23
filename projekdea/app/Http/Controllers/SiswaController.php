<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtSiswa = Siswa::all();    
        return view('Siswa.Data-siswa', compact('dtSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa.Create-siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|numeric|unique:siswa,nis',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required',
            'notelp' => 'required|string',
            'tgllhr' => 'required|date',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'notlp' => $request->notelp,
            'tgllhr' => $request->tgllhr
        ]);
        
        return redirect('data-siswa')->with('toast_success', 'Data Siswa Berhasil Ditambahkan!');
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
        $sis = Siswa::findorfail($id);
        return view('Siswa.Edit-siswa', compact('sis'));
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
        $request->validate([
            'nis' => 'required|numeric|unique:siswa,nis,' . $id,
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required',
            'notelp' => 'required|string',
            'tgllhr' => 'required|date',
        ]);

        $sis = Siswa::findorfail($id);
        $sis->update($request->all());
        
        return redirect('data-siswa')->with('toast_success', 'Data Siswa Telah Diubah!');
    }       

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis = Siswa::findorfail($id);
        $sis->delete();
        return back()->with('info', 'WOW Data Siswa Dihapus!');

    }
}

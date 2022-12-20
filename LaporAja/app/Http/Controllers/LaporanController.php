<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
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
        return view('lapor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate([
            'judul' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabkota' => 'required',
            'kecamatan' => 'required',
            'deskripsi' => 'required',
        ])== false)
        {
            return back()->withErrors([
                'message' => 'Mohon isi semua formnya'
            ]);
        }

        $laporan = Laporan::create([
            'judul' => $request->judul,
            'user_id' => auth()->id(),
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kabkota' => $request->kabkota,
            'kecamatan' => $request->kecamatan,
            'deskripsi' => $request->deskripsi,
        ]);

        $data = Laporan::where('id','=',$laporan->id)->get();

        if ($data) {
            return redirect()->to('/laporan');
        } else {
            return back()->withErrors([
                'message' => 'Terdapat kesalahan'
            ]);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Pengaduanma;
use App\Http\Requests\PengaduanmaRequest;

class PengaduanmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pengaduanmas= Pengaduanma::all();
        return view('pengaduanmas.index', ['pengaduanmas'=>$pengaduanmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pengaduanmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PengaduanmaRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PengaduanmaRequest $request)
    {
        $pengaduanma = new Pengaduanma;
		$pengaduanma->nama = $request->input('nama');
		$pengaduanma->wa = $request->input('wa');
		$pengaduanma->tanggal = $request->input('tanggal');
		$pengaduanma->alamat = $request->input('alamat');
		$pengaduanma->laporan = $request->input('laporan');
        $pengaduanma->save();

        return to_route('pengaduanmas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $pengaduanma = Pengaduanma::findOrFail($id);
        return view('pengaduanmas.show',['pengaduanma'=>$pengaduanma]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $pengaduanma = Pengaduanma::findOrFail($id);
        return view('pengaduanmas.edit',['pengaduanma'=>$pengaduanma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PengaduanmaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PengaduanmaRequest $request, $id)
    {
        $pengaduanma = Pengaduanma::findOrFail($id);
		$pengaduanma->nama = $request->input('nama');
		$pengaduanma->wa = $request->input('wa');
		$pengaduanma->tanggal = $request->input('tanggal');
		$pengaduanma->alamat = $request->input('alamat');
		$pengaduanma->laporan = $request->input('laporan');
        $pengaduanma->save();

        return to_route('pengaduanmas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pengaduanma = Pengaduanma::findOrFail($id);
        $pengaduanma->delete();

        return to_route('pengaduanmas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(): View
    {
        //get posts
        $pengaduans = Pengaduan::latest()->paginate(5);

        //render view with posts
        return view('pengaduans.index', compact('pengaduans'));
    }

    public function create(): View
    {
        return view('pengaduans.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'wa'     => 'required|min:5',
            'tanggal'     => 'required|min:5',
            'alamat'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/pengaduans', $image->hashName());

        //create post
        Pengaduan::create([
            'foto'     => $image->hashName(),
            'nama'     => $request->nama,
            'wa'     => $request->wa,
            'tanggal'     => $request->tanggal,
            'alamat'     => $request->alamat,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('pengaduans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}

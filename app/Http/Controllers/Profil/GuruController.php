<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController
{
    public function index()
    {
        $gurus = Guru::get();
        return view('Profile.DaftarGuru.daftar_guru', compact('gurus'));   
    }

    public function create(Request $request)
    {   
        return view('Profile.DaftarGuru.daftar_guruCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'mapel' => 'required'
        ]);

        Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'mapel' => $request->mapel
        ]);

        return redirect()->route('daftarGuru.index')
                        ->with('berhasil','Daftar Guru Baru Berhasil Dibuat');
    }

    public function show(Request $request, $id)
    {
        $guru = Guru::find($id);
        return view('Profile.DaftarGuru.daftar_guruShow', compact('guru'));
    }

    public function edit(Request $request, $id)
    {
        $guru = Guru::find($id);
        return view('Profile.DaftarGuru.daftar_guruEdit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'mapel' => 'required'
        ]);

        $guru = Guru::find($id);

        $guru->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'mapel' => $request->mapel
        ]);
        return redirect()->route('daftarGuru.index')
                        ->with('berhasil', 'Daftar Guru berhasil diupdate.');
    }

    public function destroy(Request $request, $id)
    {
        Guru::find($id)->delete();
        return redirect()->route('daftarGuru.index')
                        ->with('berhasil', 'Daftar Guru berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\Informasi;
use App\Models\Informasi\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PengumumanController implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:pengumuman-create', only: ['create','store']),
            new Middleware('permission:pengumuman-edit', only: ['edit','update']),
            new Middleware('permission:pengumuman-delete', only: ['delete']),
            new Middleware('permission:pengumuman-list|pengumuman-create|pengumuman-edit|pengumuman-delete', only: ['index', 'show']),
        ];
    }
    
    public function index()
    {
        $pengumumen = Pengumuman::get();
        return view('Informasi.Pengumuman.pengumuman', compact('pengumumen'));   
    }

    public function create(Request $request)
    {   
        return view('Informasi.Pengumuman.pengumumanCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'desc' => 'required',
            'isi' => 'required'
        ]);

        Pengumuman::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'desc' => $request->desc,
            'isi' => $request->isi
        ]);

        return redirect()->route('Pengumuman.index')
                        ->with('berhasil','Pengumuman Berhasil Dibuat');
    }

    public function show(Request $request, $id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('Informasi.Pengumuman.pengumumanShow', compact('pengumuman'));
    }

    public function edit(Request $request, $id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('Informasi.Pengumuman.pengumumanEdit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "judul" => "required",
            "tanggal" => "required",
            "desc" => "required",
            "isi" => "required"
        ]);

        $pengumuman = Pengumuman::find($id);

        $pengumuman->update([
            "judul" => $request->judul,
            "tanggal" => $request->tanggal,
            "desc" => $request->desc,
            "isi" => $request->isi
        ]);
        return redirect()->route('Pengumuman.index')
                        ->with('berhasil', 'Pengumuman berhasil diupdate.');
    }

    public function destroy(Request $request, $id)
    {
        Pengumuman::find($id)->delete();
        return redirect()->route('Pengumuman.index')
                        ->with('berhasil', 'Pengumuman berhasil dihapus.');
    }
}

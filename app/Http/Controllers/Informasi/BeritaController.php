<?php

namespace App\Http\Controllers\Informasi;
use App\Models\Informasi\Berita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class BeritaController implements HasMiddleware
{
    
    public static function middleware(): array
    {
        return [
            new Middleware('permission:berita-create', only: ['create','store']),
            new Middleware('permission:berita-edit', only: ['edit','update']),
            new Middleware('permission:berita-delete', only: ['delete']),
            new Middleware('permission:berita-list|berita-create|berita-edit|berita-delete', only: ['index', 'show']),
        ];
    }

    public function index()
    {
        $beritas = Berita::get();
        return view('Informasi.Berita.berita',compact('beritas'));
    }

    public function create(Request $request)
    {
        return view('Informasi.Berita.beritaCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required"
        ]);

        Berita::create([
            "title" => $request->title,
            "excerpt" => $request->excerpt,
            "body" => $request->body
        ]); 

        return redirect()->route('Berita.index')
                        ->with('success', 'Berita berhasil dibuat.');
    }

    public function show(Request $request, $id)
    {
        $berita = Berita::find($id);
        return view('Informasi.Berita.beritaShow', compact('berita'));
    }
    public function edit(Request $request, $id)
    {
        $berita = Berita::find($id);
        return view('Informasi.Berita.beritaEdit', compact('berita'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required"
        ]);

        $berita = Berita::find($id);

        $berita->update([
            "title" => $request->title,
            "excerpt" => $request->excerpt,
            "body" => $request->body
        ]);
        return redirect()->route('Berita.index')
                        ->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy(Request $request, $id)
    {
        Berita::find($id)->delete();
        return redirect()->route('Berita.index')
                        ->with('success', 'Berita berhasil dihapus.');
    }
}

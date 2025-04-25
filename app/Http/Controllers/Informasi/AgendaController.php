<?php

namespace App\Http\Controllers\Informasi;
use App\Models\Informasi\Agenda;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class AgendaController implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:agenda-create', only: ['create','store']),
            new Middleware('permission:agenda-edit', only: ['edit','update']),
            new Middleware('permission:agenda-delete', only: ['delete']),
            new Middleware('permission:agenda-list|agenda-create|agenda-edit|agenda-delete', only: ['index', 'show']),
        ];
    }

    public function index()
    {
        $agendas = Agenda::all();
        return view('Informasi.Agenda.index', compact('agendas'));   
    }

    public function create(Request $request)
    {   
        return view('Informasi.Agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'desc' => 'required',
            'isi' => 'required'
        ]);

        Agenda::create([
            'judul' => $request->judul,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'desc' => $request->desc,
            'isi' => $request->isi
        ]);

        return redirect()->route('Agenda.index')
                        ->with('berhasil','Agenda Berhasil Dibuat');
    }

    public function show(string $id)
    {
        $agenda = Agenda::find($id);
        return view('Informasi.Agenda.show', compact('agenda'));
    }

    public function edit(string $id)
    {
        $agenda = Agenda::find($id);
        return view('Informasi.Agenda.edit', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "judul" => "required",
            "tanggal_pelaksanaan" => "required",
            "desc" => "required",
            "isi" => "required"
        ]);

        $agenda = Agenda::find($id);

        $agenda->update([
            "judul" => $request->judul,
            "tanggal_pelaksanaan" => $request->tanggal_pelaksanaan,
            "desc" => $request->desc,
            "isi" => $request->isi
        ]);
        return redirect()->route('Agenda.index')
                        ->with('berhasil', 'Agenda berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        Agenda::find($id)->delete();
        return redirect()->route('Agenda.index')
                        ->with('berhasil', 'agenda berhasil dihapus.');
    }
}

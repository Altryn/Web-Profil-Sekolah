<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>

    
    <link rel="stylesheet" href="/assets/style/Informasi/Agenda/agenda.index.css">

</head>
<body>
    
    <x-home_header />

    <main class="container" style="padding-top: 6em">

            <h1>Agenda Sekolah</h1>

            @session("berhasil")
            <p>{{ $value }}</p>
            @endsession
        
        @can('agenda-create')
        <section class="container my-5">
            <a href="{{ route('Agenda.create') }}" class="btn btn-success">Create</a>
        </section>
        @endcan

        <section class="container">
            @foreach ($agendas as $agenda)
            <div class="card mb-3 " style="max-width: 540px; background-color:rgb(219, 219, 0);">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $agenda->judul }}</h5>
                            <p class="card-text"><small class="text-body-secondary">{{ $agenda->tanggal_pelaksanaan }}</small></p>
                            <p class="card-text">{{ $agenda->desc }}</p>

                            @can('agenda-list')
                            <a class="btn btn-sm btn-primary" href="{{ route('Agenda.show', $agenda->id) }}">Selengkapnya</a>
                            @endcan

                            @can('agenda-edit')
                            <a class="btn btn-sm btn-info" href="{{ route('Agenda.edit', $agenda->id) }}">Edit</a>
                            @endcan

                            @can('agenda-delete')
                            <form action="{{ route('Agenda.destroy', $agenda->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </main>
    
    <x-home_footer />
</body>
</html>
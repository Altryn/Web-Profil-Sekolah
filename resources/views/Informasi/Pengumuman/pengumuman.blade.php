<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
   
</head>
<body>
    <x-home_header />

    <main>
        <h1>Pengumuman Pengumuman Sekolah</h1>

    <section class="Pengumuman">

    
        @session("berhasil")
        <p>{{ $value }}</p>
        @endsession
    @can('pengumuman-create')
    <section>
        <a href="{{ route('Pengumuman.create') }}">Create</a>
    </section>
    @endcan

    <section>
        @foreach ($pengumumen as $pengumuman)
            
        <article class="umum">
            <h3>{{ $pengumuman->judul }}</h3>
            <p>{{ $pengumuman->tanggal }}</p>
            <p>{{ $pengumuman->desc }}</p>

            @can('pengumuman-list')
            <a href="{{ route('Pengumuman.show', $pengumuman->id) }}">Selengkapnya</a>
            @endcan
            
            @can('pengumuman-edit')
            <a href="{{ route('Pengumuman.edit', $pengumuman->id) }}">Edit</a>
            @endcan
            
            @can('pengumuman-delete')
            <form action="{{ route('Pengumuman.destroy', $pengumuman->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
            @endcan

        </article>
        @endforeach
    </section>

    </main>

    <x-home_footer />
</body>
</html>
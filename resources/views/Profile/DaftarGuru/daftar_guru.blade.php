{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STM | Daftar Guru</title>

    <link rel="stylesheet" href="../assets/style/Profil/daftar_guru.css">

    {{-- bootstrap --}}

    
    {{-- <link rel="stylesheet" href="/assets/style/Home/home_header.css">
    <link rel="stylesheet" href="/assets/style/Home/home_footer.css"> --}}
 
<x-home_header/>
<body>

    {{-- <x-home_header /> --}}

    <main>
        <section class="list-guru">

        @can('guru-create')
        <a href="{{ route('daftarGuru.create') }}">Tambah</a>
        @endcan
        @foreach ($gurus as $guru)
            
        <article class="umum">
            <h3>{{ $guru->nama }}</h3>
            <h4>{{ $guru->mapel }}</h4>

            @can('guru-list')
            <a href="{{ route('daftarGuru.show', $guru->id) }}">Selengkapnya</a>
            @endcan
            
            @can('guru-edit')
            <a href="{{ route('daftarGuru.edit', $guru->id) }}">Edit</a>
            @endcan

            @can('guru-delete')
            <form action="{{ route('daftarGuru.destroy', $guru->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button>Delete</button>
            </form>
            @endcan
            
        </article>
        @endforeach
        </section>
    </main>

    {{-- <x-home_footer /> --}}


    
</body>
</html>
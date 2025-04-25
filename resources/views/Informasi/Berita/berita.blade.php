<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 3 JAYAPURA | Berita</title>

</head>
<body>
    <!-- Navbar Dropdown Yang Keren -->
    <x-home_header />

    <main>
        
        
        {{-- <section class="tambah-berita">
            <button id="myBtn">Tambah Siswa</button>
            
            <!-- The Modal -->
            <div id="myModal" class="modal">
                
                <!-- Modal content -->
                <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Tambahkan Siswa</h2>
        </div>
        <div class="modal-body">

          <form class="tambahsiswa" action="/Informasi/beritaCreate" method="POST">
           
            <p>
                <label for="">Judul</label> <br>
                <input type="text" name="judul">
            </p>
            <p>
                <label for="">Deskripsi</label> <br>
                <input type="text" name="excerpt">
            </p>
            <p>
                <label for="">Isi</label> <br>
                <textarea name="body" id="form-isi" cols="60%" rows="30"></textarea>
            </p>
            
            
        </div>
        <div class="modal-footer">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</div>

</section> --}}

@session("success")
<p>{{ $value }}</p>
@endsession

@can('berita-create') 
<section>  
    <a href="{{ route('Berita.create') }}">Create</a>
</section>
@endcan

<section class="list-berita">
    @foreach ($beritas as $berita)
    <article class="berita">
                
                <h3>{{ $berita->title }}</h3>
                
                <p>{{ $berita->excerpt }}</p>

                @can('berita-list')
                <a href="{{ route('Berita.show', $berita->id) }}" class="read-more">Selengkapnya</a>
                @endcan

                @can('berita-edit')
                <a href="{{ route('Berita.edit', $berita->id) }}" class="read-more">Edit</a>
                @endcan
                
                @can('berita-delete')
                <form action="{{ route('Berita.destroy', $berita->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
                @endcan

            </article>
        </section>
        @endforeach
        
        
    </main>
    
    <x-home_footer />
</body>
</html>

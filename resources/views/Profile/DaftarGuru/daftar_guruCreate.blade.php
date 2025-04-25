<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STM | Daftar Guru</title>

    <link rel="stylesheet" href="../assets/style/Profil/daftar_guru.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/style/Home/home_header.css">
    <link rel="stylesheet" href="/assets/style/Home/home_footer.css">
    
</head>
<body>

    <x-home_header />

    <section class="container mt-5 bg-primary text-light p-3"> {{-- Container Form --}}
        <form action="{{ route('daftarGuru.store') }}" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="text" class="form-control col-3" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
    </section>

    <main>
        <section class="list-guru">
            <a href="{{ route('daftarGuru.index') }}">Back</a>

    <form action="{{ route('daftarGuru.store') }}" method="POST">
        @csrf

        <p>
            <label for="">Nomor Induk PNS</label>
            <input type="text" name="nip" >
            @error("nip")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Nama</label>
            <input type="text" name="nama">
            @error("nama")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Jabatan Guru</label>
            <input type="text" name="jabatan">
            @error("jabatan")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Mata Pelajaran yang Diajari</label>
            <input type="text" name="mapel">
            @error("mapel")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>

        <input type="submit" value="Submit">
    </form>
        </section>
    </main>

    <x-home_footer />
</body>
</html>
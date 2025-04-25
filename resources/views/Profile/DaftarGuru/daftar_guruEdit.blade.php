<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STM | Daftar Guru</title>

    <link rel="stylesheet" href="../assets/style/Profil/daftar_guru.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/style/Home/home_header.css">
    <link rel="stylesheet" href="/assets/style/Home/home_footer.css">
    
</head>
<body>

    <x-home_header />

    <main>
        <section class="list-guru">
            <form action="{{ route('daftarGuru.update', $guru->id) }}" method="POST">
                @csrf
                @method('PUT')
        
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
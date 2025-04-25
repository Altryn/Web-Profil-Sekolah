
    <style>
    
        .navbar{
            --bs-navbar-toggler-icon-bga: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
        }

        body{
            padding-top: 76px;
        }
    
        .background__main{
            background-color: #000957;
        }
    
        .navbar-toggler-icon{
            background-image: var(--bs-navbar-toggler-icon-bga); 
        }

        .navbar-light .navbar-toggler{
            border: 3px solid white;
        }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <nav class="navbar navbar-light fixed-top navbar-expand-sm  background__main ">
        <section class="container">
          
          <a class="navbar-brand  text-light fw-bold" href="{{ route('BerandaUser') }}">
            <img class="logo" src="/assets/media/Logo_SMKN_3_JPR-removebg-preview.png" height="50" alt="">
            SMK Negeri 3 Teknologi dan Rekayasa Jayapura
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <section class="collapse navbar-collapse justify-content-center fw-semibold" id="navbarNavDropdown">
            <ul class="navbar-nav text-light">
              
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('Kepsek') }}">Sambutan Kepala Sekolah</a></li>
                  <li><a class="dropdown-item" href="{{ route('VisiMisi') }}">Visi & Misi</a></li>
                  <li><a class="dropdown-item" href="{{ route('Organisasi') }}">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="{{ route('daftarGuru.index') }}">Daftar Guru</a></li>
                </ul>
            </li>
            
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('Berita.index') }}">Berita</a></li>
                    <li><a class="dropdown-item" href="{{ route('Agenda.index') }}">Agenda</a></li>
                    <li><a class="dropdown-item" href="{{ route('Pengumuman.index') }}">Pengumuman</a></li>
                </ul>
            </li>
        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Jurusan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('DPIB') }}">Desain Permodelan & Informasi</a></li>
                  <li><a class="dropdown-item" href="{{ route('Elektronika') }}">Elektronika</a></li>
                  <li><a class="dropdown-item" href="{{ route('Geospasial') }}">Geospasial</a></li>
                  <li><a class="dropdown-item" href="{{ route('Listrik') }}">Ketenaga Listrikan</a></li>
                  <li><a class="dropdown-item" href="{{ route('Mesin') }}">Mesin</a></li>
                  <li><a class="dropdown-item" href="{{ route('Otomotif') }}">Otomotif</a></li>
                  <li><a class="dropdown-item" href="{{ route('Las') }}">Pengelasan & Fabrikasi Logam</a></li>
                  <li><a class="dropdown-item" href="{{ route('Gedung') }}">Perawatan Gedung</a></li>
                  <li><a class="dropdown-item" href="{{ route('TJKT') }}">Teknik Jaringan Komputer & Telekomunikasi</a></li>
                </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Galeri
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('foto') }}">Foto</a></li>
                        <li><a class="dropdown-item" href="{{ route('video') }}">Video</a></li> 
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/login">Login</a></li>
                          <li><a class="dropdown-item" href="/register">Register</a></li> 
                          <li><form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            
                            <button class="dropdown-item" type="submit">
                                Logout
                            </button>
                        </form></li>  
                      </ul>
                  </li>

                @can('role-create')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/users">Users</a></li>
                        <li><a class="dropdown-item" href="/roles">Roles</a></li> 
                        
                    </ul>
                </li>
                @endcan
                
                
        </ul>
    </section>
</section>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
{{--
    <nav>
        <div class="navbar_list">
                    <div class="logo">
                        <img src="/assets/media/Logo_SMKN_3_JPR-removebg-preview.png" alt="logo">
                        <h1>SMK NEGERI 3 TEKNOLOGI DAN <br> REKAYASA KOTA JAYAPURA</h1>
                    </div>
        
                <div class="dropList">    
                    <div class="dropbtn">
                        <a href="{{ route('BerandaUser') }}">Beranda</a>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">
                            Profile
                        </button>
                        <div class="dropdown-content">
                                <a href="{{ route('Kepsek') }}">Sambutan Kepala Sekolah</a>
                                <a href="{{ route('VisiMisi') }}">Visi & Misi</a>
                                <a href="{{ route('Organisasi') }}">Struktur Organisasi</a>
                                <a href="{{ route('daftarGuru.index') }}">Daftar Guru</a>
                        </div>
                    </div>
    
                    <div class="dropdown">
                        <button class="dropbtn">
                            Jurusan
                            <i class='bx bx-chevron-down'></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('Otomotif') }}">Otomotif</a>
                            <a href="{{ route('Gedung') }}">Perawatan Gedung</a>
                            <a href="{{ route('DPIB') }}">Desain Permodelan & Informasi Gedung</a>
                            <a href="{{ route('Elektronika') }}">Elektronika</a>
                            <a href="{{ route('Mesin') }}">Mesin</a>
                            <a href="{{ route('Las') }}">Pengelasan & Fabrikasi Logam</a>
                            <a href="{{ route('Listrik') }}">Ketenaga Listrikan</a>
                            <a href="{{ route('Geospasial') }}">Geospasial</a>
                            <a href="{{ route('TJKT') }}">Jaringan Komputer & Telekomunikasi</a>
                        </div>
                    </div>
    
                    <div class="dropdown">
                        <button class="dropbtn">
                        Informasi
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('pengumuman.index') }}">Pengumuman</a>
                            <a href="{{ route('berita.index') }}">Berita</a>
                            <a href="{{ route('agenda.index') }}">Agenda</a>
                        </div>
                    </div>    
    
                    <div class="dropdown">
                        <button class="dropbtn">
                        Galeri
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('foto') }}">Foto</a>
                            <a href="{{ route('video') }}">Video</a>
                        </div>
                    </div>    
    
                    <div class="dropbtn">
                        <a href="#footer">Kontak</a>
                    </div>    
    
                    <div class="dropdown">
                        <button class="dropbtn">
                            User
                        </button>
                    </div>
                </div>    
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>    
        </div>
    </nav>    

<script>
    const hamburger = document.querySelector(".hamburger");
    const navList = document.querySelector(".dropList");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navList.classList.toggle("active");
    })
</script>

--}}
<x-home_header />

<br><br><br><br><br>
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Show Users') }}</div>
                <div class="card-body">

                    <a href="{{ route('users.index') }}" class="btn btn-primary mb-4">Kembali</a>
                    
                    <p><strong>Nama: </strong> {{ $user->name }}</p>
                    <p><strong>Email: </strong> {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
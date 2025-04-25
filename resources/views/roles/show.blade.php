<x-home_header />

<br><br><br><br><br>
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Show Roles') }}</div>
                <div class="card-body">

                    <a href="{{ route('roles.index') }}" class="btn btn-primary mb-4">Kembali</a>
                    
                    <p><strong>Nama: </strong> {{ $role->name }}</p>

                    <h5>Wewenang</h5>
                    @foreach ($role->permissions as $permission)
                        <p>{{ $permission->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
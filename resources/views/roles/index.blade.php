<x-home_header />


<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Users') }}</div>
                <div class="card-body">
                    
                    @session('success')
                    <div class="alert alert-success">
                        {{ $value }}
                    </div>
                @endsession

                    @can('role-create')
                    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-success mb-3">Tambah Roles</a>
                    @endcan

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        

                                        @can('role-list')
                                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-info">Show</a>
                                        @endcan
                                        
                                        @can('role-edit')
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        @endcan

                                        @can('role-delete')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                        @endcan
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<x-home_header />


<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Create Roles') }}</div>
                <div class="card-body">

                    <a href="{{ route('roles.index') }}" class="btn btn-primary mb-4">Kembali</a>
            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')

                        @session('success')
                            <div class="alert alert-successs">
                                {{ $value }}
                            </div>
                        @endsession

                        <div class="mb-3">
                          <label class="form-label">Roles</label>
                          <input type="name" name="name" value="{{ $role->name }}" class="form-control">
                          @error('roles')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="mt-2">
                            <h3>Permission</h3>
                            @foreach ($permissions as $permission)
<label> 
    <input type="checkbox" 
    name="permissions[{{ $permission->name }}]" 
    value="{{ $permission->name }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : ''}} >
    {{ $permission->name }} </label><br>
                            @endforeach
                        </div>

                        <div class="mt-2">
                            <button type="submit" class=" mt-4 btn btn-primary">Submit</button>
                        </div>
                      </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<x-home_header />

<br><br><br><br><br>
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Create Users') }}</div>
                <div class="card-body">

                    <a href="{{ route('users.index') }}" class="btn btn-primary mb-4">Kembali</a>
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        @session('success')
                            <div class="alert alert-successs">
                                {{ $value }}
                            </div>
                        @endsession

                        <div class="mb-3">
                          <label class="form-label">Name</label>
                          <input type="name" name="name" class="form-control">
                          @error('name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" name="email" class="form-control">
                          @error('email')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Roles</label>
                            <select class="form-select" name="roles[]" multiple id="">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        

                        <button type="submit" class=" mt-4 btn btn-primary">Submit</button>
                      </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
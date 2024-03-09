@extends('layouts1.app')

@section('contents')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>

                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label><span style="color: red;">*</span>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label><span style="color: red;">*</span>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label><span style="color: red;">*</span>
                                <input type="password" name="password" id="password" class="form-control">
                                <small class="form-text text-muted" >Ubahlah password ketika melakukan update role</small>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label><span style="color: red;">*</span>
                                <select name="role" id="role" class="form-control" required>
                                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="siswa" {{ $user->role === 'siswa' ? 'selected' : '' }}>Siswa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label><span style="color: red;">*</span>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="active" {{ $user->status === 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $user->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

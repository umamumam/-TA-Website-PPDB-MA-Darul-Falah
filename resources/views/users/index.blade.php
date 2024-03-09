@extends('layouts1.app')

@section('contents')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12"> <!-- Menyesuaikan lebar kolom -->
                <div class="card">
                    <div class="card-header">Daftar Akun</div>

                    <div class="card-body">
                        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>

                        <div class="table-responsive"> <!-- Menggunakan class table-responsive untuk membuat tabel dapat di-scroll jika terlalu panjang -->
                            <table class="table table-bordered"> <!-- Menambahkan class table-bordered untuk menampilkan garis pada tabel -->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ ucfirst($user->role) }}</td>
                                            <td>{{ ucfirst($user->status) }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
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
    </div>
    <br>
@endsection

@extends('layouts1.app')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD FILE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 100%; /* Lebar container diperbesar */
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
            text-align: center;
        }
        input[type="file"] {
            display: block;
            margin: 10px auto;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .success-message, .error-message {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            text-align: center;
        }
        .error-message {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px; /* Padding diperbesar */
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        
    </style>
</head>
<body>
    <div class="container">
        
        <br>
        @if ($message = Session::get('success'))
            <div class="success-message">
                {{ $message }}
            </div>
        @endif
        <br>
        @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

        
        @if ($uploadedFiles->count() > 0)
            <h4>Silakan Cari Sesuai Nama Kemudian Download dan Cetak Kartu Ujiannya</h4>
            <h4>Atau bisa melakukan cetak kartu di madrasah dengan membawa pas foto 3x4</h4>

            <form action="{{ route('search') }}" method="GET" style="margin-top: 20px;">
                <div style="display: flex; justify-content: right;">
                    <input type="text" name="search" placeholder="Cari berdasarkan nama file..." style="padding: 10px; width: 400px; border-radius: 4px 0 0 4px; border: 1px solid #ccc;">
                    <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 0 4px 4px 0; cursor: pointer;">Cari</button>
                </div>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Nama Berkas</th>
                        
                        <th>Unduh Berkas</th>
                         <!-- Tambah kolom untuk tombol hapus -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($uploadedFiles as $file)
                        <tr>
                            <td>{{ $file->name }}</td>
                            
                            <td><a href="{{ Storage::url($file->path) }}" download><button type="submit">Download</button></a></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var uploadForm = document.getElementById("upload-form");
            var uploadButton = document.getElementById("upload-button");

            uploadButton.addEventListener("click", function() {
                uploadForm.style.display = "none";
            });
        });
    </script>
</body>
</html>
@endsection

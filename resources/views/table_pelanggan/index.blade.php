<?php
    use App\Models\Pelanggan;

    $table_pelanggan = Pelanggan::all();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Daftar Buku</h1>
        <a href="{{ route('table_pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ url('/') }}" class="btn btn-primary mb-3">Kembali ke Homepage</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>NO</th>
                        <th>NAMA PELANGGAN</th>
                        <th>ALAMAT</th>
                        <th>NOMOR TELEPON</th>
                    </thead>
                    <tbody>
                        @foreach ($table_pelanggan as $hasil)
                            <tr>
                                <td>{{ $hasil->id }}</td>
                                <td>{{ $hasil->Nama_Pelanggan }}</td>
                                <td>{{ $hasil->Alamat }}</td>
                                <td>{{ $hasil->Nomor_Telepon }}</td>
                                <td>
                                    <form action="{{ route('table_pelanggan.destroy', $hasil->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('table_pelanggan.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Form Edit Data Mahasiswa</h1>
        <a href="{{ route('table_pelanggan.index') }}" class="btn btn-primary mb-3">Kembali ke Indeks Buku</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('table_pelanggan.update', $table_buku->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nis" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="Nama_pelanggan" value="{{ $table_pelanggan->Nama_Pelanggan }}" name="Nama_pelanggan">
                      </div>
                      <div class="mb-3">
                          <label for="nm_sis" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="Alamat" value="{{ $table_pelanggan->Alamat }}" name="Alamat">
                      </div>
                      <div class="mb-3">
                          <label for="a_nis" class="form-label">Nomor Telepon</label>
                          <input type="text" class="form-control" id="Nomor_Telepon" value="{{ $table_pelanggan->Nomor_Telepon }}" name="Nomor_Telepon">
                      </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Form Edit Data Mahasiswa</h1>
        <a href="{{ route('table_buku.index') }}" class="btn btn-primary mb-3">Kembali ke Indeks Buku</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('table_buku.update', $table_buku->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nis" class="form-label">JUDUL</label>
                        <input type="text" class="form-control" id="Judul" value="{{ $table_buku->Judul }}" name="Judul">
                      </div>
                      <div class="mb-3">
                          <label for="nm_sis" class="form-label">PENGARANG</label>
                          <input type="text" class="form-control" id="Pengarang" value="{{ $table_buku->Pengarang }}" name="Pengarang">
                      </div>
                      <div class="mb-3">
                          <label for="a_nis" class="form-label">PENERBIT</label>
                          <input type="text" class="form-control" id="Penerbit" value="{{ $table_buku->Penerbit }}" name="Penerbit">
                      </div>
                      <div class="mb-3">
                          <label for="tlp_sis" class="form-label">TAHUN TERBIT</label>
                          <input type="text" class="form-control" id="Tahun_Terbit" value="{{ $table_buku->Tahun_Terbit }}" name="Tahun_Terbit">
                      </div>
                      <div class="mb-3">
                          <label for="p_sis" class="form-label">HARGA</label>
                          <input type="text" class="form-control" id="Harga" value="{{ $table_buku->Harga }}" name="Harga">
                      </div>
                      <div class="mb-3">
                          <label for="ma_sis" class="form-label">JUMLAH STOK</label>
                          <input type="text" class="form-control" id="Jumlah_Stok" value="{{ $table_buku->Jumlah_Stok }}" name="Jumlah_Stok">
                      </div>
                      <div class="mb-3">
                          <label for="TTL_sis" class="form-label">KATEGORI</label>
                          <input type="text" class="form-control" id="Kategori" value="{{ $table_buku->Kategori }}" name="Kategori">
                      </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

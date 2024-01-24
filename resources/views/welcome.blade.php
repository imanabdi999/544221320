<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Manajemen Buku</title>
</head>
<body class="text-center">

  <div class="container mt-5">
    <h1 class="mb-4">Selamat Datang di Manajemen Buku</h1>

    <div class="row">
      <div class="col-md-4 offset-md-4">
        <a href="{{ url('/buku/index') }}"><button class="btn btn-primary btn-lg btn-block mb-3">Indeks Buku</button></a>
        <a href="{{ url('/pelanggan/index') }}"><button class="btn btn-primary btn-lg btn-block mb-3">Daftar Pelanggan</button></a>
        <a><button class="btn btn-primary btn-lg btn-block">Daftar Penjualan</button></a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

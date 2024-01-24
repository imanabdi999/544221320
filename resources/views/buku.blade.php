<?php
    use App\Models\Buku;

    $table_buku = Buku::all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 style="widows: ww; ">Daftar Produk</h2>
    <table style="border: 1; cellspacing: 0; width: 100%">
        <tr>
            <th>
                ID / NO
            </th>
            <th>
                Judul
            </th>
            <th>
                Penerbit
            </th>
            <th>
                Pengarang
            </th>
            <th>
                Tahun Terbit
            </th>
            <th>
                Harga
            </th>
            <th>
                Stok
            </th>
            <th>
                Kategori
            </th>
        </tr>

        @foreach ($table_buku as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->Judul }}</td>
            <td>{{ $data->Penerbit }}</td>
            <td>{{ $data->Pengarang }}</td>
            <td>{{ $data->Tahun_Terbit }}</td>
            <td>{{ $data->Harga }}</td>
            <td>{{ $data->Harga }}</td>
            <td>{{ $data->Kategori }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

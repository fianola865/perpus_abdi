<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="<?= base_url("asset/bootstrap/css/bootstrap.min.css")?>">
    <style>
        body {
            background-color: #fff8e1;
            color: #5d4037;
        }
        header {
            background-color: #ff9800;
            color: white;
        }
        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            text-align: center;
        }
        .btn-primary {
            background-color: #ff9800;
            border-color: #e65100;
        }
        .btn-primary:hover {
            background-color: #fb8c00;
            border-color: #e65100;
        }
        table {
            background-color: white;
        }
        table th {
            background-color: #ffcc80;
            color: #5d4037;
        }
        table td {
            background-color: #ffe0b2;
        }
        .btn-danger {
            background-color: #d32f2f;
        }
        .bottombar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #ff9800;
            padding: 10px 0;
            text-align: center;
        }
        .bottombar a {
            color: white;
            padding: 10px;
            text-decoration: none;
            font-weight: bold;
        }
        .bottombar a:hover {
            color: #ffcc80;
        }
    </style>
</head>
<body>
    <header class="py-3">
        <div class="container">
            <h1>Daftar Buku</h1>   
        </div>
    </header>

    <div class="container mt-5">
        <a href="/perpus/tambah" class="btn btn-primary mb-3">Tambah Data Buku</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Id Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($buku as $perpus): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $perpus['id_buku'] ?></td>
                        <td><?= $perpus['judul'] ?></td>
                        <td><?= $perpus['penulis'] ?></td>
                        <td><?= $perpus['penerbit'] ?></td>
                        <td><?= $perpus['tahun_terbit'] ?></td>
                        <td>
                            <form action="perpus/edit" method="post" style="display:inline;">
                                <input type="hidden" name="id_buku" value="<?= $perpus['id_buku'] ?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            <form action="perpus/hapus" method="post" style="display:inline;">
                                <input type="hidden" name="id_buku" value="<?= $perpus['id_buku'] ?>">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="bottombar">
        <a href="/perpus">Daftar Buku</a>
        <a href="/peminjaman">Daftar Peminjaman</a>
        <a href="/datauser">Data User</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff8e1;
            color: #5d4037;
        }
        header {
            background-color: #ff9800;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            margin: 0;
        }
        .btn-primary {
            background-color: #ff9800;
            border-color: #e65100;
        }
        .btn-primary:hover {
            background-color: #fb8c00;
            border-color: #e65100;
        }
        .btn-warning {
            background-color: #ffb74d;
            border-color: #ff9800;
        }
        .btn-warning:hover {
            background-color: #ff9800;
        }
        .btn-danger {
            background-color: #d32f2f;
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

<header>
    <h1>Data User</h1>
</header>

<div class="container mt-5">
    <a href="/register" class="btn btn-primary mb-3">Tambah Data User</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($user as $data): ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['Username'] ?></td>
                <td><?= $data['Password'] ?></td>
                <td><?= $data['Email'] ?></td>
                <td><?= $data['NamaLengkap'] ?></td>
                <td><?= $data['Alamat'] ?></td>
                <td>
                    <form action="user/edit" method="post">
                        <input type="hidden" name="UserID" value="<?= $data['UserID'] ?>">
                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                    </form>
                    <form action="user/hapus" method="post" style="display:inline;">
                        <input type="hidden" name="UserID" value="<?= $data['UserID'] ?>">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

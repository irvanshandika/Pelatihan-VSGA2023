<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/style/style.css" />
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="src/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h1>Daftar Anggota</h1>
                    <div class="mb-5 mt-4">
                        <a href="anggota-add.php" class="btn btn-primary">Tambah Anggota</a>
                        <a href="anggota-lap.php" class="btn btn-info">Laporan Anggota</a>
                        <a href="anggota-lap.php" class="btn btn-info">Transaksi</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>ID Anggota</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "koneksi.php";

                        $query = "SELECT * FROM anggota";

                        $result = mysqli_query($koneksi, $query);

                        if (!empty($result)) {
                            foreach ($result as $key => $row) {
                        ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $row['idanggota'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['jeniskelamin'] ?></td>
                                    <td><?= $row['alamat'] ?></td>

                                    <?php
                                    echo "<td><img src='public/" . $row['foto'] . "' width='50' height='50'></td>";
                                    ?>
                                    <td>
                                        <div class="btn-group gap-2" role="group" aria-label="Basic example">
                                            <a href="anggota-add.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="anggota_act.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            // If the result is empty, display a message or take any other action.
                            echo "Tidak Ada Data Yang Diinputkan!";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="./src/script/script.js"></script>
    </body>

    </html>
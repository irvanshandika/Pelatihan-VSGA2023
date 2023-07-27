<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus - Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/style/style.css" />
</head>

<body>
    <?php
    include_once 'navbar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-12 my-5">
                        <h1>Daftar Transaksi</h1>
                        <a href="transaksi-form.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Transaksi</a>
                        <a href="transaksi-lap.php" class="btn btn-info" target="_blank"><i class="fa-sharp fa-regular fa-clipboard"></i> Laporan</a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-hover table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>ID Transaksi</th>
                                <th>Buku</th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "koneksi.php";

                            $query = "SELECT * FROM transaksi
                                        JOIN buku ON buku.id_buku = transaksi.buku
                                        JOIN anggota ON transaksi.anggota = anggota.id";

                            $data_transaksi = mysqli_query($koneksi, $query);

                            if (!empty($data_transaksi)) {

                                foreach ($data_transaksi as $key => $value) {
                            ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value['id_transaksi'] ?></td>
                                        <td><?= $value['judul_buku'] ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['tanggal_pinjam'] ?></td>
                                        <td><?= $value['tanggal_kembali'] ?></td>
                                        <td><?= $value['status'] ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="transaksi-form.php?id=<?= $value["id_transaksi"] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="transaksi_act.php?id=<?= $value["id_transaksi"] ?>" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>

                                    </tr>
                            <?php
                                }
                            } else {
                                echo "Belum ada data transaksi!";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
</body>
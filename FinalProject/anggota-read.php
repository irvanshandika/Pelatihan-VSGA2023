<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus - Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/style/style.css" />
</head>

<body>
    <?php
    include_once 'navbar.php';
    ?>
    <h1 class="d-flex justify-content-center">Daftar Anggota</h1>
    <div class="container">
        <a href="anggota-add.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Anggota</a>
        <a href="anggota-lap.php" class="btn btn-info"><i class="fa-sharp fa-regular fa-clipboard"></i> Laporan</a>

        <form method="POST" class="row">
            <div class="col-lg-4 offset-lg-6">
                <input type="text" name="pencarian" class="form-control" />
            </div>
            <div class="col-lg-2">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>

        <div class="row">
            <div class="col-12 mt-4">
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

                            $batas = 5;
                            extract($_GET);

                            if (empty($hal)) {
                                $posisi = 0;
                                $hal = 1;
                                $no = 1;
                            } else {
                                $posisi = ($hal - 1) * $batas;
                                $no = $posisi + 1;
                            }

                            if (@$_POST['pencarian']) {
                                $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
                                if ($pencarian != "") {
                                    $query = "SELECT * FROM anggota WHERE
                                        nama LIKE '%$pencarian%'
                                        OR idanggota like '%$pencarian%'
                                        OR jeniskelamin like '%$pencarian%'
                                        OR alamat like '%$pencarian%'";
                                    $queryJml = $query;
                                } else {
                                    $query = "SELECT * FROM anggota LIMIT $posisi, $batas";
                                    $queryJml = "SELECT * FROM anggota";
                                }
                            } else {
                                $query = "SELECT * FROM anggota LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM anggota";
                            }
                            $data_anggota = mysqli_query($koneksi, $query);

                            if (mysqli_num_rows($data_anggota) > 0) {
                                foreach ($data_anggota as $key => $value) {

                            ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['idanggota'] ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['jeniskelamin'] ?></td>
                                        <td><?= $value['alamat'] ?></td>

                                        <?php
                                        echo "<td><img class='foto' src='public/" . $value['foto'] . "'></td>";
                                        ?>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="anggota-add.php?id=<?= $value["id"] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="anggota_act.php?id=<?= $value["id"] ?>" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">Data Tidak Ditemukan</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="float-start">
                        <?php
                        if (isset($_POST['pencarian'])) {
                            if ($_POST['pencarian'] != '') {
                                $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
                                echo '<p>Data Hasil Pencarian : ' . $jml . '</p>';
                            }
                        } else {
                            $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
                            echo '<p>Jumlah data : ' . $jml . '</p>';
                        }
                        ?>
                    </div>
                    <nav class="float-end" aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            $jml_hal = ceil($jml / $batas);
                            for ($i = 1; $i <= $jml_hal; $i++) {
                                if ($i != $hal) {
                            ?>
                                    <li class="page-item"><a class="page-link" href="anggota-read.php?hal=<?= $i ?>"><?= $i ?></a></li>
                                <?php
                                } else {
                                ?>
                                    <li class="page-item"><a class="page-link disabled"><?= $i ?></a></li>
                                    <?php
                                    ?>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
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

</html>
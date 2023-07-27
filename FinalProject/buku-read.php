<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simperpus - Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/style/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <h1>Daftar Buku</h1>
                        <a href="buku-add.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Buku</a>
                        <a href="buku-lap.php" class="btn btn-info"><i class="fa-sharp fa-regular fa-clipboard"></i> Laporan</a>
                    </div>
                </div>
                <form method="POST" class="row mb-4">
                    <div class="col-lg-4 offset-lg-6">
                        <input type="text" name="pencarian" class="form-control" />
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </form>
                <div class="row">
                    <table class="table table-hover table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>ISBN</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Menu</th>
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
                                    $query = "SELECT * FROM buku WHERE
                                        id_buku LIKE '%$pencarian%'
                                        OR judul_buku like '%$pencarian%'
                                        OR isbn like '%$pencarian%'
                                        OR pengarang like '%$pencarian%'
                                        OR penerbit like '%$pencarian%'
                                        OR tahun like '%$pencarian%'";
                                    $queryJml = $query;
                                } else {
                                    $query = "SELECT * FROM buku LIMIT $posisi, $batas";
                                    $queryJml = "SELECT * FROM buku";
                                }
                            } else {
                                $query = "SELECT * FROM buku LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM buku";
                            }

                            $data_buku = mysqli_query($koneksi, $query);

                            if (mysqli_num_rows($data_buku) > 0) {
                                foreach ($data_buku as $key => $value) {
                            ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['id_buku'] ?></td>
                                        <td><?= $value['judul_buku'] ?></td>
                                        <td><?= $value['isbn'] ?></td>
                                        <td><?= $value['pengarang'] ?></td>
                                        <td><?= $value['penerbit'] ?></td>
                                        <td><?= $value['tahun'] ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="buku-add.php?id=<?= $value["id_buku"] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="buku_act.php?id=<?= $value["id_buku"] ?>" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
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
                                    <li class="page-item"><a class="page-link" href="buku-read.php?hal=<?= $i ?>"><?= $i ?></a></li>
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

    <?php
    include_once 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
</body>

</html>
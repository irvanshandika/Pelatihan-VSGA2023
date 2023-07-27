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
                        <a href="buku-read.php" class="btn btn-warning"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "koneksi.php";

                            $query = "SELECT * FROM buku";

                            $result = mysqli_query($koneksi, $query);

                            if (!empty($result)) {

                                foreach ($result as $key => $row) {
                            ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $row['id_buku'] ?></td>
                                        <td><?= $row['judul_buku'] ?></td>
                                        <td><?= $row['isbn'] ?></td>
                                        <td><?= $row['pengarang'] ?></td>
                                        <td><?= $row['penerbit'] ?></td>
                                        <td><?= $row['tahun'] ?></td>
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
    <script>
        window.print();
    </script>
</body>

</html>
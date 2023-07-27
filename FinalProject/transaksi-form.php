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
        <h1>Form Transaksi</h1>
        <?php
        include_once "koneksi.php";

        $query_anggota = "SELECT * FROM anggota";
        $result_anggota = mysqli_query($koneksi, $query_anggota);

        $query_buku = "SELECT * FROM buku";
        $result_buku = mysqli_query($koneksi, $query_buku);

        if (@$_GET['id']) {
            $id = $_GET['id'];
            $query = "SELECT * FROM transaksi WHERE id_transaksi = '$id'";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
        }


        ?>
        <form action="transaksi_act.php" method="POST">
            <input type="hidden" name="id" value="<?= @$row["id_transaksi"] ?>">
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Anggota</label>
                <div class="col-lg-3">

                    <select name="anggota" id="anggota" class="form-select">
                        <?php
                        foreach ($result_anggota as $key => $value) {

                        ?>

                            <option <?php echo (@$row['anggota'] == @$value['id']) ? 'selected' : ''; ?> value="<?= $value["id"] ?>"><?= $value['nama']; ?> [<?= $value["idanggota"]; ?>]</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Buku</label>
                <div class="col-lg-3">

                    <select name="buku" id="buku" class="form-select">
                        <?php
                        foreach ($result_buku as $key => $value) {

                        ?>
                            <option <?php echo (@$row['buku'] == @$value['id_buku']) ? 'selected' : ''; ?> value="<?= $value["id_buku"] ?>"><?= $value['judul_buku']; ?> [<?= $value["isbn"]; ?>]</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-lg-3">
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="<?= @$row["tanggal_pinjam"] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="buku" class="col-lg-2 col-form-label">Tanggal Kembali</label>
                <div class="col-lg-3">
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="<?= @$row["tanggal_kembali"] ?>">
                </div>
            </div>
            <?php
            if (@$_GET['id']) {
            ?>


                <div class="row mb-3">
                    <label for="buku" class="col-lg-2 col-form-label">Status</label>
                    <div class="col-lg-3">
                        <select name="status" id="status" class="form-select">
                            <option <?php echo (@$row['status'] == 'Pinjam') ? 'selected' : ''; ?> value="Pinjam">Pinjam</option>
                            <option <?php echo (@$row['status'] == 'Kembali') ? 'selected' : ''; ?> value="Kembali">Kembali</option>
                        </select>
                    </div>
                </div>
            <?php
            }
            ?>


            <div class="row mb-3">
                <div class="col-4">
                    <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    <a href="transaksi-read.php" class="btn btn-warning"><i class="fa-solid fa-left-long"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
    <?php
    include_once 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./src/script/script.js"></script>
</body>
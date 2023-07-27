<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simperpus - Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/style/style.css" />
</head>

<body>
    <?php
    include_once 'navbar.php';
    ?>
    <div class="container mt-4">
        <h1>Tambah Data Buku</h1>
        <?php
        include_once 'koneksi.php';
        if (@$_GET['id']) {

            $id = $_GET['id'];

            $query = "SELECT * FROM buku WHERE id_buku = '$id'";
            $data_buku = mysqli_query($koneksi, $query);
            $buku = mysqli_fetch_array($data_buku);
        }
        ?>
        <form action="buku_act.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_buku" value="<?= @$buku['id_buku'] ?>" />
            <div class="row mb-4">
                <label for="id_buku" class="col-lg-2 col-form-label">ID Buku</label>
                <div class="col-lg-4">
                    <input type="text" name="id_buku" id="id_buku" class="form-control" value="<?= @$buku['id_buku'] ?>" />
                </div>
            </div>
            <div class="row mb-4">
                <label for="judul_buku" class="col-lg-2 col-form-label">Nama Buku: </label>
                <div class="col-lg-4">
                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?= @$buku['judul_buku'] ?>" />
                </div>
            </div>
            <div class="row mb-4">
                <label for="isbn" class="col-lg-2 col-form-label">Nomor ISBN: </label>
                <div class="col-lg-4">
                    <input type="text" name="isbn" id="isbn" class="form-control" value="<?= @$buku['isbn'] ?>" />
                </div>
            </div>
            <div class="row mb-4">
                <label for="pengarang" class="col-lg-2 col-form-label">Pengarang: </label>
                <div class="col-lg-4">
                    <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= @$buku['pengarang'] ?>" />
                </div>
            </div>
            <div class="row mb-4">
                <label for="penerbit" class="col-lg-2 col-form-label">Penerbit: </label>
                <div class="col-lg-4">
                    <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= @$buku['penerbit'] ?>" />
                </div>
            </div>
            <div class="row mb-4">
                <label for="tahun" class="col-lg-2 col-form-label">tahun: </label>
                <div class="col-lg-4">
                    <input type="text" name="tahun" id="tahun" class="form-control" value="<?= @$buku['tahun'] ?>" />
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    <a href="buku-read.php" class="btn btn-warning"><i class="fa-solid fa-left-long"></i> Kembali</a>
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

</html>
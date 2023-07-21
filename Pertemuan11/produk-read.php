<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Read</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <h1>Data produk</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Warna</th>
            <th>Jumlah</th>
        </tr>

        <?php
        include_once 'koneksi.php';

        $query = "SELECT * FROM tb_product";
        $data_produk = mysqli_query($koneksi, $query);

        foreach ($data_produk as $key => $value) {
            # Code
        ?>
            <tr style="text-align: center;">
                <td><?= $key + 1 ?></td>
                <td><?= $value['no'] ?></td>
                <td><?= $value['nama_produk'] ?></td>
                <td><?= $value['warna'] ?></td>
                <td><?= $value['jumlah'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <a href="produk-form.php">Tambah</a>


</body>

</html>
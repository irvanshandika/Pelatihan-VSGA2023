<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Data Produk</title>
</head>

<body>
  <h1>Tambah Data Barang</h1>
  <form action="produk-add.php" method="post">
    <table>
      <tr>
        <td>Nama Merek</td>
        <td><input type="text" name="nama_produk" id="nama_produk" size="50" /></td>
      </tr>
      <tr>
        <td>Warna</td>
        <td><input type="text" name="warna" id="warna" size="2" /></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="number" name="jumlah" id="jumlah" size="10" /></td>
      </tr>
      <tr>
        <td>
          <button type="submit">Simpan</button>
          <button type="reset">Ulang</button>
        </td>
      </tr>
      <tr>
        <td><a href="produk-read.php">Kembali</a></td>
      </tr>
    </table>
  </form>
</body>

</html>
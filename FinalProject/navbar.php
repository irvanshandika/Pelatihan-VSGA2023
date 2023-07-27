<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./src/style/style.css">
</head>

<body>
  <?php
  session_start();
  if ($_SESSION['sesi'] == null) {
    header('Location: index.php');
  }
  ?>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Simperpus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku-read.php">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anggota-read.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi-read.php">Transaksi</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Laporan</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="buku-lap.php">Laporan Buku</a></li>
              <li><a class="dropdown-item" href="anggota-lap.php">Laporan Anggota</a></li>
              <li><a class="dropdown-item" href="transaksi-lap.php">Laporan Transaksi</a></li>
            </ul>
          </li>
        </ul>
        <div class="ml-auto">
          <a href="logout.php" class="btn btn-outline-secondary"><i class="fa-solid fa-power-off"></i> Logout</a>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>
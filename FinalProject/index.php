<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simperpus - Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/style/style.css" />
    <style>
      @media only screen and (max-width: 768px) {
        .player {
          width: 280px;
        }
      }
      @media only screen and (min-width: 1024px) {
        .player {
          width: 400px;
        }
      }
    </style>
  </head>

  <body>
    <?php
        include_once 'navbar.php';
    ?>
    <section class="hero">
      <div class="container-fluid px-5 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 order-lg-first">
          <div class="col-12 col-sm-8 col-lg-6 ms-10">
            <lottie-player src="https://lottie.host/c60751e8-148f-42fb-8df6-84abd6b1181d/3M7JAV91Yd.json" class="mx-auto player" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Buku Adalah Jembatan Ilmu</h1>
            <p class="lead">"Hanya pendidikan yang bisa menyelamatkan masa depan, tanpa pendidikan Indonesia tak mungkin bertahan." - <span class="fw-bold">Najwa Shihab</span></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="buku-read.php" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Lanjutkan</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="./src/script/script.js"></script>
  </body>
</html>

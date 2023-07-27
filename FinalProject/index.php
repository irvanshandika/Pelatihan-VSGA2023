<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simperpus - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <h1 class="display-3 text-center">Please Sign In</h1>
        <p class="display-6 text-center">Sistem Informasi Manajemen Perpustakaan</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 offset-lg-4">
      <form action="login-act.php" method="POST" class="mx-5">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="user" name="user" />
          <label for="user">Username</label>
        </div>
        <div class="form-floating mb-4">
          <input type="password" class="form-control" name="pass" id="pass" />
          <label for="pass">Password</label>
        </div>
        <div class="form-check text-start my-3">
          <input type="checkbox" value="remember-me" class="form-check-input" id="flexCheckDefault" />
          <label for="flexCheckDefault" class="form-check-label"> Remember Me </label>
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary w-100 py-2">Sign In</button>
        <p class="mt-5 mb-3 text-center text-bpdy-secondary">
          copyright &copy;
          <?= date('Y') ?>
        </p>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="./src/script/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simperpus - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <h1 class="display-3 text-center">Please Sign In</h1>
        <p class="display-6 text-center">Sistem Informasi Manajemen Perpustakaan</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 offset-lg-4">
      <form action="login-act.php" method="POST" class="mx-5">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="user" name="user" />
          <label for="user">Username</label>
        </div>
        <div class="form-floating mb-4">
          <input type="password" class="form-control" name="pass" id="pass" />
          <label for="pass">Password</label>
        </div>
        <div class="form-check text-start my-3">
          <input type="checkbox" value="remember-me" class="form-check-input" id="flexCheckDefault" />
          <label for="flexCheckDefault" class="form-check-label"> Remember Me </label>
        </div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary w-100 py-2">Sign In</button>
        <p class="mt-5 mb-3 text-center text-bpdy-secondary">
          copyright &copy;
          <?= date('Y') ?>
        </p>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="./src/script/script.js"></script>
</body>

</html>
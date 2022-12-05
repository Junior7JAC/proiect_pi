<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>VStack :: Login</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="VStack Shop Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<div id="particles-js"></div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="js/particle.js"></script>
<script src="js/register.js"></script>
<body>
<div class="container">
  <div class="">
    <div class="">
      <div class="card card-signin flex-row">
        <div class="card-img-left d-none d-md-flex"> </div>
        <div class="card-body">
          <h5 class="card-title text-center">Conectare</h5>
          <form class="form-signin" action="config/handler.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-label-group">
              <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required>
              <label for="inputUsername">Nume de utilizator</label>
            </div>
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
              <label for="inputPassword">Parola</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">Conectare</button>
            <a class="d-block text-center mt-2 small" href="register.php">Loghează-te</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Login & Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="style.css" >
  </head>
  <body>
    <div class="login-box">

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 login-left"  >
          <h2>Login Here</h2>
          <form class="" action="validation.php" method="post">
            <div class="form-group">
            <label>User Name</label><input type="text"
            name="username" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Password</label><input type="password"
            name="password" class="form-control" required>
            </div>
            <button type="submit" name="button" class="btn btn-primary">Login
            </button>

          </form>

        </div>
        <div class="col-md-6 login-right">
          <h2>Register Here</h2>
          <form class="" action="registration.php" method="post">
            <div class="form-group">
            <label>User Name</label><input type="text"
            name="username" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Password</label><input type="password"
            name="password" class="form-control" required>
            </div>
            <button type="submit" name="button" class="btn btn-primary">Register
            </button>

          </form>

        </div>
      </div>
  </div>
</div>
  </body>
</html>

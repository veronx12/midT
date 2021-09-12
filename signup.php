<?php
    require './issetSignup.php';
    if(isset($_SESSION['loginState']) == 1) {
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title> <title>Document</title>
    <link rel="stylesheet" href="sstyle.css">
    <style>

</style>
</head>
<body>


   <div class="box"> 
	    <left><img src="R.png"  style="width:74.5px;height:25px;"></left><br><br>
                <h2>Create your Google Account</h2>

<br><br><br>
    <form action="signup.php" method="POST">
		<div class="inputBox">
      			<input type="text"  required onkeyup="this.setAttribute('value', this.value);"  value="">
			<label>Firstname</label>   </div>
			<div class="inputBox">
    		    	<input type="text"  required onkeyup="this.setAttribute('value', this.value);"  value="">
			<label>Lastname</label>   </div><div class="inputBox">
		
			<input type="email"  required onkeyup="this.setAttribute('value', this.value);"  value="">
			<label>Username</label>   </div>

			<p style="color:'gray'; align:'left';font-family:'Arial Narrow'; font size:' 15px';"> You can use letters, numbers & periods</p>
			<p style="font-family: 'Century Gothic'; color:'blue'";><a href="https://www.google.com/">Use my current email address instead</a></p>
<div class="inputBox">
<input type="password" autocomplete="off" required onkeyup="this.setAttribute('value', this.value);"  value="">
   		     	
			<label>Password</label>   </div><div class="inputBox">
<input type="password" autocomplete="off" required onkeyup="this.setAttribute('value', this.value);"  value="">
			<label>Confirm</label>   </div>

     		   <button type="submit" name="signup">Sign up</button>
    </form>


<br><br>
                </form>

              </div>

	<form>
	




</body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Login for Patients</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('images/hospitalbackground.jpg'); background-repeat: no-repeat;background-size: cover;">
<div class="signup-form" style="margin-left:25%; margin-right:25%; margin-top:5%; border: solid black 1px; padding:2%; border-radius:10px; background-color:white;">
    <form action="controllers/logincontroller.php" method="post" enctype="multipart/form-data">
		<center><h2>Login</h2>
		<p class="hint-text">Enter Login Details for Patient</p></center>
        <div class="form-group">
        	<input type="text" class="form-control" name="aadhar" placeholder="Aadhar" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="registrationform.php">Register Here</a></div>
    </form>
</div>
</body>
</html>
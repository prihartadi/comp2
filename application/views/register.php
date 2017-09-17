<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/signin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
</head>
<body>
	<div class="container">

      <form class="form-signin" action="<?php echo base_url('Login_controller/register'); ?>" method="post">
        <h2 class="form-signin-heading">Please fill this form</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
				<label for="inputAddress" class="sr-only">Address</label>
        <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Address" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">
      </form>

    </div> <!-- /container -->
</body>
</html>

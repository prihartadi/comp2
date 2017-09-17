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

      <form class="form-signin" action="<?php echo base_url('Login_controller/login'); ?>" method="post">
        <h2 class="form-signin-heading">Please log in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
				<br>
				<span><p>Create new account?</p></span>
				<a href="<?php echo base_url().'Login_controller/call_register' ?>"><button class="btn btn-lg btn-primary btn-block" type="button" name="register">Register</button></a>
				<br>
				<a id="back" href="<?php echo base_url() ?>">Home</a>
      </form>

    </div> <!-- /container -->
</body>
</html>

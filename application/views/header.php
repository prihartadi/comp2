<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Geek's Shop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>as	sets/css/offcanvas.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		if($('.fw-branding').length){
   			$('.fw-branding').hide();
		}
	</script>
</head>
<body>
	<div id="wrapper">
		<!-- <header> -->
			<!-- <hgroup>
				<h1>WELCOME GEEKS</h1>
				<h3>Find the RIGHT computer parts you need here !!!</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'index.php/Login_controller/index' ?>">Login / Register</a></li>
					<li><a href="<?php echo base_url().'index.php/Main_controller/about' ?>">About</a></li>
				</ul>
			</nav>
			<div class="clear"></div> -->
			<nav class="navbar navbar-fixed-top navbar-inverse">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo base_url() ?>">Geek's Shop</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
						<!-- <ul class="nav navbar-nav">
	            <li class="active"><a href="<?php echo base_url().'index.php' ?>">Home</a></li>
	          </ul> -->
	          <ul class="nav navbar-nav navbar-right">
	            <!-- <li class="active"><a href="<?php echo base_url().'index.php' ?>">Home</a></li> -->
	            <li><a href="<?php echo base_url().'Login_controller/index' ?>">Login / Register</a></li>
	            <li><a href="<?php echo base_url().'Main_controller/about' ?>">About</a></li>
	          </ul>
	        </div><!-- /.nav-collapse -->
	      </div><!-- /.container -->
	    </nav><!-- /.navbar -->
		<!-- </header> -->

<!DOCTYPE html>
<html>
<head>
	<title>Computer Parts Online Shop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
	<!-- <h1>admin</h1>
	<form action="<?php echo base_url(). 'index.php/Main_controller/add_part_cpu'; ?>" method="post">
		<table style="margin:20px auto;" class="table table-bordered">
			<tr>
				<td>Code</td>
				<td><input type="text" name="code_cpu"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand_cpu"></td>
			</tr>
			<tr>
				<td>Socket</td>
				<td><input type="text" name="socket_cpu"></td>
			</tr>
			<tr>
				<td>Core</td>
				<td><input type="text" name="core_cpu"></td>
			</tr>
			<tr>
				<td>Speed</td>
				<td><input type="text" name="speed_cpu"></td>
			</tr>
			<tr>
				<td>Cache</td>
				<td><input type="text" name="cache_cpu"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="number" name="price_cpu"></td>
			</tr>
			<tr>
				<td>Performance</td>
				<td><input type="number" name="performance_cpu"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="add"></td>
			</tr>
		</table>
	</form> -->

	<!-- PROCESSOR -->
	<table border="1" class="table table-bordered">
		<h1>Processor</h1>
		<a href="<?php echo base_url().'index.php/Main_controller/call_add_cpu' ?>">Add</a>
		<tr>
			<th>Brand</th>
			<th>Code</th>
			<th>Socket</th>
			<th>Core</th>
			<th>Cache</th>
			<th>Speed</th>
			<th>Price</th>
			<th>Options</th>
		</tr>
		<?php foreach($part_cpu as $cpu){ ?>
		<tr>
			<td><?php echo $cpu->brand_cpu ?></td>
			<td><?php echo $cpu->code_cpu ?></td>
			<td><?php echo $cpu->socket_cpu ?></td>
			<td><?php echo $cpu->core_cpu ?></td>
			<td><?php echo $cpu->cache_cpu ?></td>
			<td><?php echo $cpu->speed_cpu ?></td>
			<td><?php echo $cpu->price_cpu ?></td>
			<td>
				<?php echo anchor('Main_controller/edit_cpu/'.$cpu->id_cpu,'Edit'); ?>
				<?php echo anchor('Main_controller/delete_cpu/'.$cpu->id_cpu,'Delete'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

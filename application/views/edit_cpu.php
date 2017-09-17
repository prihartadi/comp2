<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" >
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>Edit Processor</h1>
      <?php foreach ($part_cpu as $cpu) { ?>
    	<form class="form-signin col-md-8" action="<?php echo base_url(). 'index.php/Main_controller/update_cpu'; ?>" method="post">
    		<table style="margin:20px auto;" class="table table-bordered">
          <input type="hidden" name="id_cpu" class="form-control" value="<?php echo $cpu->id_cpu ?>">
    			<tr>
    				<td>Code</td>
    				<td><input type="text" name="code_cpu" class="form-control" value="<?php echo $cpu->code_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Brand</td>
    				<td><input type="text" name="brand_cpu" class="form-control" value="<?php echo $cpu->brand_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Socket</td>
    				<td><input type="text" name="socket_cpu" class="form-control" value="<?php echo $cpu->socket_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Core</td>
    				<td><input type="text" name="core_cpu" class="form-control" value="<?php echo $cpu->core_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Speed</td>
    				<td><input type="text" name="speed_cpu" class="form-control" value="<?php echo $cpu->speed_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Cache</td>
    				<td><input type="text" name="cache_cpu" class="form-control" value="<?php echo $cpu->cache_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Price</td>
    				<td><input type="number" name="price_cpu" class="form-control" value="<?php echo $cpu->price_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td>Performance</td>
    				<td><input type="number" name="performance_cpu" class="form-control" value="<?php echo $cpu->performance_cpu ?>"></td>
    			</tr>
    			<tr>
    				<td></td>
    				<td><input type="submit" value="Save" class="btn btn-success"></td>
    			</tr>
          <tr>
            <td></td>
            <td><a href="<?php echo base_url().'index.php/Main_controller/dashboard' ?>">Cancel</a></td>
          </tr>
    		</table>
    	</form>
      <?php } ?>
    </div>
  </body>
</html>

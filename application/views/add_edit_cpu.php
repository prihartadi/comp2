<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
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
  				<td><input type="submit" value="Save"></td>
  			</tr>
        <tr>
          <td></td>
          <td><a href="<?php echo base_url().'index.php/Main_controller/dashboard' ?>">Cancel</a></td>
        </tr>
  		</table>
  	</form>
  </body>
</html>

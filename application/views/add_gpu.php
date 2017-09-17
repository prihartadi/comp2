<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/add_gpu'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_gpu"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_gpu"></td>
  			</tr>
  			<tr>
  				<td>PCIE Gen</td>
  				<td><input type="text" name="pcie_gpu"></td>
  			</tr>
  			<tr>
  				<td>Vram</td>
  				<td><input type="text" name="vram_gpu"></td>
  			</tr>
  			<tr>
  				<td>Vram Size</td>
  				<td><input type="text" name="vram_size_gpu"></td>
  			</tr>
  			<tr>
  				<td>Price</td>
  				<td><input type="number" name="price_gpu"></td>
  			</tr>
        <tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_gpu"></td>
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

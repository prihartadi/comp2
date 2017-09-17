<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
    <?php foreach ($part_mem as $mem) { ?>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/update_mem'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
        <input type="hidden" name="id_mem" value="<?php echo $mem->id_mem ?>">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_mem" value="<?php echo $mem->code_mem ?>"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_mem" value="<?php echo $mem->brand_mem ?>"></td>
  			</tr>
  			<tr>
  				<td>SATA</td>
  				<td><input type="text" name="sata_mem" value="<?php echo $mem->sata_mem ?>"></td>
  			</tr>
  			<tr>
  				<td>Size</td>
  				<td><input type="text" name="size_mem" value="<?php echo $mem->size_mem ?>"></td>
  			</tr>
  			<tr>
  				<td>Price</td>
  				<td><input type="number" name="price_mem" value="<?php echo $mem->price_mem ?>"></td>
  			</tr>
        <tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_mem" value="<?php echo $mem->performance_mem ?>"></td>
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
    <?php } ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
    <?php foreach ($part_mos as $mos) { ?>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/update_mos'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
        <input type="hidden" name="id_mos" value="<?php echo $mos->id_mos ?>">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_mos" value="<?php echo $mos->code_mos ?>"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_mos" value="<?php echo $mos->brand_mos ?>"></td>
  			</tr>
  			<tr>
  				<td>Price</td>
  				<td><input type="number" name="price_mos" value="<?php echo $mos->price_mos ?>"></td>
  			</tr>
        <tr>
  				<td>Performance</td>
  				<td><input type="number" name="Performance_mos" value="<?php echo $mos->performance_mos ?>"></td>
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

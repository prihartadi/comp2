<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
    <?php foreach ($part_psu as $psu) { ?>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/update_psu'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
        <input type="hidden" name="id_psu" value="<?php echo $psu->id_psu ?>">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_psu" value="<?php echo $psu->code_psu ?>"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_psu" value="<?php echo $psu->brand_psu ?>"></td>
  			</tr>
  			<tr>
  				<td>Power</td>
  				<td><input type="text" name="power_psu" value="<?php echo $psu->power_psu ?>"></td>
  			</tr>
  			<tr>
  				<td>Certification</td>
  				<td><input type="text" name="certification_psu" value="<?php echo $psu->certification_psu ?>"></td>
  			</tr>
  			<tr>
  				<td>Price</td>
  				<td><input type="number" name="price_psu" value="<?php echo $psu->price_psu ?>"></td>
  			</tr>
        <tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_psu" value="<?php echo $psu->performance_psu ?>"></td>
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

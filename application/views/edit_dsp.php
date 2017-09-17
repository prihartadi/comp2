<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
    <?php foreach ($part_dsp as $dsp) { ?>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/update_dsp'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
        <input type="hidden" name="id_dsp" value="<?php echo $dsp->id_dsp ?>">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_dsp" value="<?php echo $dsp->code_dsp ?>"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_dsp" value="<?php echo $dsp->brand_dsp ?>"></td>
  			</tr>
  			<tr>
  				<td>Resolution</td>
  				<td><input type="text" name="resolution_dsp" value="<?php echo $dsp->resolution_dsp ?>"></td>
  			</tr>
  			<tr>
  				<td>Size</td>
  				<td><input type="text" name="size_dsp" value="<?php echo $dsp->size_dsp ?>"></td>
  			</tr>
  			<tr>
  				<td>Price</td>
  				<td><input type="number" name="price_dsp" value="<?php echo $dsp->price_dsp ?>"></td>
  			</tr>
        <tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_dsp" value="<?php echo $dsp->performance_dsp ?>"></td>
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

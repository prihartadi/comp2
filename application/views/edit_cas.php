<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
    <?php foreach ($part_cas as $cas) { ?>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/update_cas'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
        <input type="hidden" name="id_cas" value="<?php echo $cas->id_cas ?>">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_cas" value="<?php echo $cas->code_cas ?>"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_cas" value="<?php echo $cas->brand_cas ?>"></td>
  			</tr>
  			<tr>
  				<td>Form</td>
  				<td><input type="text" name="form_cas" value="<?php echo $cas->form_cas ?>"></td>
  			</tr>
  			<tr>
  				<td>Price</td>
  				<td><input type="number" name="price_cas" value="<?php echo $cas->price_cas ?>"></td>
  			</tr>
        <tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_cas" value="<?php echo $cas->performance_cas ?>"></td>
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

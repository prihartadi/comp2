<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/add_mbo'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_mbo"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_mbo"></td>
  			</tr>
  			<tr>
  				<td>Socket</td>
  				<td><input type="text" name="socket_mbo"></td>
  			</tr>
  			<tr>
  				<td>Chipset</td>
  				<td><input type="text" name="chipset_mbo"></td>
  			</tr>
  			<tr>
  				<td>Ram Type</td>
  				<td><input type="text" name="ram_type_mbo"></td>
  			</tr>
  			<tr>
  				<td>PCIE</td>
  				<td><input type="text" name="pcie_mbo"></td>
  			</tr>
  			<tr>
  				<td>SATA</td>
  				<td><input type="text" name="sata_mbo"></td>
  			</tr>
        <tr>
  				<td>Form</td>
  				<td><input type="text" name="form_mbo"></td>
  			</tr>
        <tr>
  				<td>Price</td>
  				<td><input type="number" name="price_mbo"></td>
  			</tr>
  			<tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_mbo"></td>
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

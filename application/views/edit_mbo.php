<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>admin</h1>
    <?php foreach ($part_mbo as $mbo) { ?>
  	<form action="<?php echo base_url(). 'index.php/Main_controller/update_mbo'; ?>" method="post">
  		<table style="margin:20px auto;" class="table table-bordered">
        <input type="hidden" name="id_mbo" value="<?php echo $mbo->id_mbo ?>">
  			<tr>
  				<td>Code</td>
  				<td><input type="text" name="code_mbo" value="<?php echo $mbo->code_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>Brand</td>
  				<td><input type="text" name="brand_mbo" value="<?php echo $mbo->brand_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>Socket</td>
  				<td><input type="text" name="socket_mbo" value="<?php echo $mbo->socket_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>Chipset</td>
  				<td><input type="text" name="chipset_mbo" value="<?php echo $mbo->chipset_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>Ram Type</td>
  				<td><input type="text" name="ram_type_mbo" value="<?php echo $mbo->ram_type_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>PCIE</td>
  				<td><input type="text" name="pcie_mbo" value="<?php echo $mbo->pcie_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>SATA</td>
  				<td><input type="text" name="sata_mbo" value="<?php echo $mbo->sata_mbo ?>"></td>
  			</tr>
        <tr>
  				<td>Form</td>
  				<td><input type="text" name="form_mbo" value="<?php echo $mbo->form_mbo ?>"></td>
  			</tr>
        <tr>
  				<td>Price</td>
  				<td><input type="number" name="price_mbo" value="<?php echo $mbo->price_mbo ?>"></td>
  			</tr>
  			<tr>
  				<td>Performance</td>
  				<td><input type="number" name="performance_mbo" value="<?php echo $mbo->performance_mbo ?>"></td>
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

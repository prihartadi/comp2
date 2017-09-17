<!DOCTYPE html>
<html>
<head>
	<title>Computer Parts Online Shop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/offcanvas.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>

	<div class="container">

	  <ul class="nav nav-tabs nav-justified">
	    <!-- <li><a data-toggle="tab" href="#homepage">Homepage</a></li> -->
	    <li class="active"><a data-toggle="tab" href="#data">Parts Data</a></li>
	    <li><a data-toggle="tab" href="#user">User Data</a></li>
	    <li><a data-toggle="tab" href="#transactions">Transaction Data</a></li>
	    <li><a data-toggle="tab" href="#report">Report</a></li>
	  </ul>

		  <div class="tab-content">
		    <div id="homepage" class="tab-pane fade">
				

		    </div>

		    <div id="data" class="tab-pane fade in active">
					<br>
					<section>
							<select class="slct form-control input-lg" name="slct" id="slct" onchange="change(this)">
								<option value="part_cpu">Processor</option>
								<option value="part_mbo">Motherboard</option>
								<option value="part_ram">Memory RAM</option>
								<option value="part_gpu">GPU Card</option>
								<option value="part_psu">Power Supply</option>
								<option value="part_mem">Storage Memory</option>
								<option value="part_dsp">Monitor</option>
								<option value="part_cas">Casing</option>
								<option value="part_mos">Mouse</option>
								<option value="part_key">Keyboard</option>
							</select>
							<br>
							<!-- PROCESSOR -->
							<div class="table-responsive"	>
								<table id="cpu" border="1" class="table table-bordered table-hover" style="display: table;">
									<!-- <h1>Processor</h1> -->
									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Socket</th>
										<th>Core</th>
										<th>Cache</th>
										<th>Speed</th>
										<th>Price</th><th class="th_option">Options</th>

									</tr>
									<?php foreach($part_cpu as $cpu){ ?>
									<tr>
										<td><?php echo $cpu->brand_cpu ?></td>
										<td><?php echo $cpu->code_cpu ?></td>
										<td><?php echo $cpu->socket_cpu ?></td>
										<td><?php echo $cpu->core_cpu ?></td>
										<td><?php echo $cpu->cache_cpu ?></td>
										<td><?php echo $cpu->speed_cpu ?></td>
										<td><?php echo $cpu->price_cpu ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_cpu/'.$cpu->id_cpu,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_cpu/'.$cpu->id_cpu,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_cpu' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- MOTHERBOARD -->
							<div class="table-responsive">
								<table id="mbo" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Motherboard</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Socket</th>
										<th>Chipset</th>
										<th>Ram Type</th>
										<th>PCIE</th>
										<th>SATA</th>
										<th>Form</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_mbo as $mbo){ ?>
									<tr>
										<td><?php echo $mbo->brand_mbo ?></td>
										<td><?php echo $mbo->code_mbo ?></td>
										<td><?php echo $mbo->socket_mbo ?></td>
										<td><?php echo $mbo->chipset_mbo ?></td>
										<td><?php echo $mbo->ram_type_mbo ?></td>
										<td><?php echo $mbo->pcie_mbo ?></td>
										<td><?php echo $mbo->sata_mbo ?></td>
										<td><?php echo $mbo->form_mbo ?></td>
										<td><?php echo $mbo->price_mbo ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_mbo/'.$mbo->id_mbo,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_mbo/'.$mbo->id_mbo,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_mbo' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- RAM -->
							<div class="table-responsive">
								<table id="ram" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Memory RAM</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Ram Type</th>
										<th>Size</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_ram as $ram){ ?>
									<tr>
										<td><?php echo $ram->brand_ram ?></td>
										<td><?php echo $ram->code_ram ?></td>
										<td><?php echo $ram->ram_type_ram ?></td>
										<td><?php echo $ram->size_ram ?></td>
										<td><?php echo $ram->price_ram ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_ram/'.$ram->id_ram,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_ram/'.$ram->id_ram,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_ram' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- GPU -->
							<div class="table-responsive">
								<table id="gpu" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>GPU Card</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>PCIE Gen</th>
										<th>VRAM</th>
										<th>Size</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_gpu as $gpu){ ?>
									<tr>
										<td><?php echo $gpu->brand_gpu ?></td>
										<td><?php echo $gpu->code_gpu ?></td>
										<td><?php echo $gpu->pcie_gpu ?></td>
										<td><?php echo $gpu->vram_gpu ?></td>
										<td><?php echo $gpu->vram_size_gpu ?></td>
										<td><?php echo $gpu->price_gpu ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_gpu/'.$gpu->id_gpu,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_gpu/'.$gpu->id_gpu,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_gpu' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- PSU -->
							<div class="table-responsive">
								<table id="psu" border="1" class="table table-bordered" style="display: none;">
										<!-- <h1>Power Suply</h1> -->

										<tr>
											<th>Brand</th>
											<th>Code</th>
											<th>Power</th>
											<th>Certification</th>
											<th>Price</th><th class="th_option">Options</th>
										</tr>
										<?php foreach($part_psu as $psu){ ?>
										<tr>
											<td><?php echo $psu->brand_psu ?></td>
											<td><?php echo $psu->code_psu ?></td>
											<td><?php echo $psu->power_psu ?></td>
											<td><?php echo $psu->certification_psu ?></td>
											<td><?php echo $psu->price_psu ?></td>
											<td>
											<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_psu/'.$psu->id_psu,'Edit'); ?></button>
											<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_psu/'.$psu->id_psu,'Delete'); ?></button>

												
												
											</td>
										</tr>
										<?php } ?>
										<tr>
											<td><a href="<?php echo base_url().'Main_controller/call_add_psu' ?>">Add</a></td>
										</tr>
									</table>
							</div>

							<!-- MEM -->
							<div class="table-responsive">
								<table id="mem" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Storage Memory</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>SATA</th>
										<th>Size</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_mem as $mem){ ?>
									<tr>
										<td><?php echo $mem->brand_mem ?></td>
										<td><?php echo $mem->code_mem ?></td>
										<td><?php echo $mem->sata_mem ?></td>
										<td><?php echo $mem->size_mem ?></td>
										<td><?php echo $mem->price_mem ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_mem/'.$mem->id_mem,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_mem/'.$mem->id_mem,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_mem' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- DSP -->
							<div class="table-responsive">
								<table id="dsp" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Monitor</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Resolution</th>
										<th>Size</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_dsp as $dsp){ ?>
									<tr>
										<td><?php echo $dsp->brand_dsp ?></td>
										<td><?php echo $dsp->code_dsp ?></td>
										<td><?php echo $dsp->resolution_dsp ?></td>
										<td><?php echo $dsp->size_dsp ?></td>
										<td><?php echo $dsp->price_dsp ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_dsp/'.$dsp->id_dsp,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_dsp/'.$dsp->id_dsp,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_dsp' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- CASING -->
							<div class="table-responsive">
								<table id="cas" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Casing</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Form</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_cas as $cas){ ?>
									<tr>
										<td><?php echo $cas->brand_cas ?></td>
										<td><?php echo $cas->code_cas ?></td>
										<td><?php echo $cas->form_cas ?></td>
										<td><?php echo $cas->price_cas ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_cas/'.$cas->id_cas,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_cas/'.$cas->id_cas,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_cas' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- MOUSE -->
							<div class="table-responsive">
								<table id="mos" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Mouse</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_mos as $mos){ ?>
									<tr>
										<td><?php echo $mos->brand_mos ?></td>
										<td><?php echo $mos->code_mos ?></td>
										<td><?php echo $mos->price_mos ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_mos/'.$mos->id_mos,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_mos/'.$mos->id_mos,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_mos' ?>">Add</a></td>
									</tr>
								</table>
							</div>

							<!-- KEYBOARD -->
							<div class="table-responsive">
								<table id="key" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Keyboard</h1> -->

									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Price</th><th class="th_option">Options</th>
									</tr>
									<?php foreach($part_key as $key){ ?>
									<tr>
										<td><?php echo $key->brand_key ?></td>
										<td><?php echo $key->code_key ?></td>
										<td><?php echo $key->price_key ?></td>
										<td>
										<button type="button" class="btn btn-default"><?php echo anchor('Main_controller/edit_key/'.$key->id_key,'Edit'); ?></button>
										<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_key/'.$key->id_key,'Delete'); ?></button>

											
											
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td><a href="<?php echo base_url().'Main_controller/call_add_key' ?>">Add</a></td>
									</tr>
								</table>
							</div>



					</section>

		    </div>
		    <div id="user" class="tab-pane fade">
					<br>
		      <h3>User</h3>

		      
		      	<dir class="table-responsive">
		      	<table id="user" border="1" class="table table-bordered">
		      		<tr><th>Id User</th>
										<th>Username</th>
										<th>Adress</th>
										<th class="th_option">Options</th>
									</tr>
									<?php foreach($user_data as $user){ ?>
									<form action="<?php echo base_url('Login_controller/update_user'); ?>" method="post">
									<tr>
									
									<input type="hidden" name="password" value="<?php echo $user->password ?>">
									<td><input class="form-control" type="text" name="id_user" value="<?php echo $user->id_user ?>"></td>
										<td><input class="form-control" type="text" name="username" value="<?php echo $user->username ?>"></td>
										<td><input class="form-control" type="text" name="address" value="<?php echo $user->address ?>"></td>
										<td>
											<input type="submit" name="" value="save" class="btn btn-success">
											<button type="button" class="btn btn-danger"><?php echo anchor('Login_controller/delete_user/'.$user->id_user,'Delete'); ?></button>
											
										</td>
									</tr>
									</form>
									<?php } ?>
		      	</table>
		      </dir>
		      

			</div>
			<div id="transactions" class="tab-pane fade">
					<br>
		      <h3>Transactions</h3>
		      
		      	<dir class="table-responsive">
		      	<table id="transactions" border="1" class="table table-bordered">
		      		<tr>
										<th>Id User</th>
										<th>Date</th>
										<th>Total Transaction</th>
										<th class="th_option">Options</th>
									</tr>
									<?php foreach($transactions_data as $tra){ 
										// echo $user_data[0]->username; 
										?>
										<form action="<?php echo base_url('Main_controller/update_transactions'); ?>" method="post">
									<tr>
									<input type="hidden" name="id_transaction" value="<?php echo $tra->id_transaction ?>">
										<td><input class="form-control" type="text" name="id_user" value="<?php echo $tra->id_user ?>"></td>
										<td><input class="form-control" type="text" name="date_transaction" value="<?php echo $tra->date_transaction ?>"></td>
										<td><input class="form-control" type="text" name="total_transaction" value="<?php echo $tra->total_transaction ?>"></td>
										<td>
											<input type="submit" name="" value="save" class="btn btn-success">
											<button type="button" class="btn btn-danger"><?php echo anchor('Main_controller/delete_transactions/'.$tra->id_transaction,'Delete'); ?></button>
											
										</td>
									</tr>
									</form>
									<?php } ?>
		      	</table>
		      </dir>
		      
			</div>

		    <div id="report" class="tab-pane fade">
					<br>
					
		      <h3>Menu 2</h3>
		      <script type="text/javascript">
				$(function () {
				    Highcharts.chart('container', {
				        title: {
				            text: 'Total Transaction',
				            x: -20 //center
				        },
				        subtitle: {
				            text: 'Geeks Shop',
				            x: -20
				        },
				        xAxis: {
				            categories: [
				            <?php for($i=0;$i<count($data_trans);$i++){ ?>
				            	'<?php echo $data_trans[$i]->month; ?>'
				            	<?php
				            	if($i<count($data_trans)-1)
				            		echo ',';
				             } ?>
				            ]
				        },
				        yAxis: {
				            title: {
				                text: 'Gross (Rp.)'
				            },
				            plotLines: [{
				                value: 0,
				                width: 1,
				                color: '#808080'
				            }]
				        },
				        tooltip: {
				            valuePrefix: 'Rp.'
				        },
				        legend: {
				            layout: 'vertical',
				            align: 'right',
				            verticalAlign: 'middle',
				            borderWidth: 0
				        },
				        series: [{
				            name: '2016',
				            data: [
				            <?php for($i=0;$i<count($data_trans);$i++){
				            	echo $data_trans[$i]->total;
				            	if($i<count($data_trans)-1)
				            		echo ',';
				            } ?>
				            ]
				        }
				        // , {
				        //     name: 'New York',
				        //     data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
				        // }, {
				        //     name: 'Berlin',
				        //     data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
				        // }, {
				        //     name: 'London',
				        //     data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
				        // }
				        ]
				    });
				});
			</script>
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>

				<div id="container" style="min-width: 600px; height: 400px; margin: auto"></div>
				<br>
				<a href="<?php echo base_url().'Main_controller/print_report' ?>">Print Report</a>
				<!-- <?php print_r($data_trans); 
					foreach ($data_trans as $trans) {
						echo $trans->month.',';
					}
					echo count($data_trans);
				?>
				<?php echo $data_trans[0]->total.','.$data_trans[1]->total; ?> -->
			</div>
		  </div>
		</div>

		<script type="text/javascript">

			function change(obj){
					var selectBox = obj;
					var selected = selectBox.options[selectBox.selectedIndex].value;
					var cpu1 = document.getElementById('cpu');
					var mbo1 = document.getElementById('mbo');
					var ram1 = document.getElementById('ram');
					var gpu1 = document.getElementById('gpu');
					var psu1 = document.getElementById('psu');
					var mem1 = document.getElementById('mem');
					var dsp1 = document.getElementById('dsp');
					var cas1 = document.getElementById('cas');
					var mos1 = document.getElementById('mos');
					var key1 = document.getElementById('key');

					if(selected == 'part_cpu'){
						cpu1.style.display = 'table';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_mbo'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'table';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_ram'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'table';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_gpu'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'table';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_psu'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'table';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_mem'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'table';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_dsp'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'table';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_cas'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'table';
						mos1.style.display = 'none';
						key1.style.display = 'none';
					}
					else if(selected == 'part_mos'){
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'table';
						key1.style.display = 'none';
					}
					else {
						cpu1.style.display = 'none';
						mbo1.style.display = 'none';
						ram1.style.display = 'none';
						gpu1.style.display = 'none';
						psu1.style.display = 'none';
						mem1.style.display = 'none';
						dsp1.style.display = 'none';
						cas1.style.display = 'none';
						mos1.style.display = 'none';
						key1.style.display = 'table';
					}
		}

		</script>


		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jqBarGraph.1.1.min.js"></script>
		<script type="text/javascript" src="http://www.workshop.rs/jqbargraph/jqBarGraph.js"></script>
</body>
</html>

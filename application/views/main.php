<div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
          <!-- <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p> -->
          <div class="jumbotron" id="cover">
            <h2>Hello, Welcome to Geek's Online Computer Shop</h2>
            <p>Find the <i><b>RIGHT</b></i> computer parts you need here !!!</p>
          </div>

					<section>
						<!-- <h3 id="promo">Promo</h3> -->
						<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="?widget_parameter=%7B%22sources%22%3A%5B%7B%22source%22%3A%22http%3A%2F%2Ffeeds.feedburner.com%2Fcrunchgear%22%2C%22type%22%3A%22RSS%22%7D%5D%2C%22name%22%3A%22%22%2C%22width%22%3A0%2C%22height%22%3A%22185%22%2C%22height_by_article%22%3A0%2C%22target%22%3A%22_blank%22%2C%22font%22%3A%22Arial%2C%20Helvetica%2C%20sans-serif%22%2C%22title_font_size%22%3A%2216%22%2C%22item_title_font_size%22%3A%2216%22%2C%22item_description_font_size%22%3A%2212%22%2C%22border%22%3A%22on%22%2C%22css_url%22%3A%22%22%2C%22responsive%22%3A%22on%22%2C%22text_direction%22%3A%22left%22%2C%22text_alignment%22%3A%22justify%22%2C%22corner%22%3A%22rounded%22%2C%22scroll%22%3A%22on%22%2C%22auto_scroll%22%3A%22on%22%2C%22auto_scroll_direction%22%3A%22up%22%2C%22auto_scroll_step_speed%22%3A%224%22%2C%22auto_scroll_mc_speed%22%3A%2220%22%2C%22sort%22%3A%22new%22%2C%22title%22%3A%22off%22%2C%22title_sentence%22%3A%22%22%2C%22title_link%22%3A%22%22%2C%22title_bgcolor%22%3A%22%23ffffff%22%2C%22title_color%22%3A%22%23505659%22%2C%22title_bgimage%22%3A%22%22%2C%22item_bgcolor%22%3A%22%23ffffff%22%2C%22item_bgimage%22%3A%22%22%2C%22item_title_length%22%3A%2255%22%2C%22item_title_color%22%3A%22%232e7ec8%22%2C%22item_border_bottom%22%3A%22on%22%2C%22item_description%22%3A%22both%22%2C%22item_link%22%3A%22off%22%2C%22item_description_length%22%3A%22100%22%2C%22item_description_color%22%3A%22%23505659%22%2C%22item_date%22%3A%22on%22%2C%22item_date_format%22%3A%22%25b%20%25e%2C%20%25Y%20%25k%3A%25M%22%2C%22item_date_timezone%22%3A%22%22%2C%22item_description_style%22%3A%22thumbnail%22%2C%22item_thumbnail%22%3A%22crop%22%2C%22item_thumbnail_selection%22%3A%22auto%22%2C%22article_num%22%3A%2215%22%2C%22item_player%22%3A%22youtube%22%2C%22keyword_inc%22%3A%22%22%2C%22keyword_exc%22%3A%22%22%7D"></script> <!-- end feedwind code -->

						<h2 id="subtitle"><?php echo $subtitle ?></h2>

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
										<th>Price</th>
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
									</tr>
									<?php } ?>
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
										<th>Price</th>
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
									</tr>
									<?php } ?>
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
										<th>Price</th>
									</tr>
									<?php foreach($part_ram as $ram){ ?>
									<tr>
										<td><?php echo $ram->brand_ram ?></td>
										<td><?php echo $ram->code_ram ?></td>
										<td><?php echo $ram->ram_type_ram ?></td>
										<td><?php echo $ram->size_ram ?></td>
										<td><?php echo $ram->price_ram ?></td>
									</tr>
									<?php } ?>
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
										<th>Price</th>
									</tr>
									<?php foreach($part_gpu as $gpu){ ?>
									<tr>
										<td><?php echo $gpu->brand_gpu ?></td>
										<td><?php echo $gpu->code_gpu ?></td>
										<td><?php echo $gpu->pcie_gpu ?></td>
										<td><?php echo $gpu->vram_gpu ?></td>
										<td><?php echo $gpu->vram_size_gpu ?></td>
										<td><?php echo $gpu->price_gpu ?></td>
									</tr>
									<?php } ?>
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
											<th>Price</th>
										</tr>
										<?php foreach($part_psu as $psu){ ?>
										<tr>
											<td><?php echo $psu->brand_psu ?></td>
											<td><?php echo $psu->code_psu ?></td>
											<td><?php echo $psu->power_psu ?></td>
											<td><?php echo $psu->certification_psu ?></td>
											<td><?php echo $psu->price_psu ?></td>
										</tr>
										<?php } ?>
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
										<th>Price</th>
									</tr>
									<?php foreach($part_mem as $mem){ ?>
									<tr>
										<td><?php echo $mem->brand_mem ?></td>
										<td><?php echo $mem->code_mem ?></td>
										<td><?php echo $mem->sata_mem ?></td>
										<td><?php echo $mem->size_mem ?></td>
										<td><?php echo $mem->price_mem ?></td>
									</tr>
									<?php } ?>
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
										<th>Price</th>
									</tr>
									<?php foreach($part_dsp as $dsp){ ?>
									<tr>
										<td><?php echo $dsp->brand_dsp ?></td>
										<td><?php echo $dsp->code_dsp ?></td>
										<td><?php echo $dsp->resolution_dsp ?></td>
										<td><?php echo $dsp->size_dsp ?></td>
										<td><?php echo $dsp->price_dsp ?></td>
									</tr>
									<?php } ?>
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
										<th>Price</th>
									</tr>
									<?php foreach($part_cas as $cas){ ?>
									<tr>
										<td><?php echo $cas->brand_cas ?></td>
										<td><?php echo $cas->code_cas ?></td>
										<td><?php echo $cas->form_cas ?></td>
										<td><?php echo $cas->price_cas ?></td>
									</tr>
									<?php } ?>
								</table>
							</div>

							<!-- MOUSE -->
							<div class="table-responsive">
								<table id="mos" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Mouse</h1> -->
									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Price</th>
									</tr>
									<?php foreach($part_mos as $mos){ ?>
									<tr>
										<td><?php echo $mos->brand_mos ?></td>
										<td><?php echo $mos->code_mos ?></td>
										<td><?php echo $mos->price_mos ?></td>
									</tr>
									<?php } ?>
								</table>
							</div>

							<!-- KEYBOARD -->
							<div class="table-responsive">
								<table id="key" border="1" class="table table-bordered" style="display: none;">
									<!-- <h1>Keyboard</h1> -->
									<tr>
										<th>Brand</th>
										<th>Code</th>
										<th>Price</th>
									</tr>
									<?php foreach($part_key as $key){ ?>
									<tr>
										<td><?php echo $key->brand_key ?></td>
										<td><?php echo $key->code_key ?></td>
										<td><?php echo $key->price_key ?></td>
									</tr>
									<?php } ?>
								</table>
							</div>

							<script type="text/javascript">

								// window.onload = function(){
								// 	document.getElementById("cover").style.backgroundImage = "url('<?php echo $bg ?>'	)";
								// }

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


					<iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/55768550&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
					</section>


				</div>
			</div>
			<hr id="footerline">

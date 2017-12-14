
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategoriler</h2>
						
							
								
								
								
								
									<div class="brands-name">
										<ul class="nav nav-pills nav-stacked">	
										
											<li><a  href="<?=base_url()?>Home/tel_kategori/1">İOS </a></li>										
											<li><a  href="<?=base_url()?>Home/tel_kategori/2">SYMBİAN </a></li>
											<li><a href="<?=base_url()?>Home/tel_kategori/3">ANDROİD </a></li>
											<li><a  href="<?=base_url()?>Home/tel_kategori/4">MİCROSOFT</a></li>
											
										</ul>
									</div>
								
																																		
						<!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Markalar</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php
					       foreach($veris as $rs)
					          {
					           ?>
									<li><a href="<?=base_url()?>Home/markalar/<?=$rs->marka?>"> <span class="pull-right"></span><?=$rs->marka?></a></li>
									 <?php 
						  }
						  ?>
								
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<!--/price-range-->
						<div class="brands_products"><!--brands_products-->
							<h2>Mobil Haberler</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
										<?php
						foreach($haberler as $rs)
						{
						?>
								<li><a href="<?=base_url()?>Home/haber/<?=$rs->id?>"><?=$rs->baslik?></a></li>
						<?php
						}
						?>	
									
									
								</ul>
							</div>
						</div>
						
						
					
					</div>
				</div>
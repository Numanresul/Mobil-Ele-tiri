<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">EN YENİLER</h2>
						
						<?php
						foreach($yeniler as $rs)
						{
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img width="150" height="200"src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" />
											<h2><?=$rs->fiyat?> TL</h2>
											<p><?=$rs->model?></p>
											<a href="<?=base_url()?>Home/urun_detay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ürün Detay</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?=$rs->fiyat?> TL</h2>
												<p><?=$rs->model?></p>
												<a href="<?=base_url()?>Home/urun_detay/<?=$rs->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ürün Detay</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<?php
						}
						?>
						
						
						
						
					
						
						
					</div><!--features_items-->
					
					
					
					
					
				</div>
			</div>
		</div>
	</section>
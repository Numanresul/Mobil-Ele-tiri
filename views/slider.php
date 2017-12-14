
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>M</span>-Elestiri</h1>
									<h2><?=$haberler[0]->baslik?></h2>
									<p><?=$haberler[0]->konu?>. </p>
									<a href="<?=base_url()?>Home/haber/<?=$haberler[0]->id?>"><button type="button" class="btn btn-default get">Habere Git</button></a>
								</div>
								<div class="col-sm-6">
									<img src="<?=base_url()?>uploads/<?=$haberler[0]->resim?>" class="girl img-responsive" alt="" />									
								</div>
							</div>
							<?php
						foreach($haberler as $rs)
						{
						?>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>M</span>-Elestiri</h1>
									<h2><?=$rs->baslik?></h2>
									<p><?=$rs->konu?>. </p>
									<a href="<?=base_url()?>Home/haber/<?=$rs->id?>"><button type="button" class="btn btn-default get">Habere Git</button></a>
								</div>
								<div class="col-sm-6">
									<img src="<?=base_url()?>uploads/<?=$rs->resim?>" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<?php
						}
						?>	
						</div>
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
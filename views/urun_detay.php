   <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">

             
				<?php 
				$this->load->view('_slidebar');
				
				?>
				

<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							
							<div id="similar-product" class="view-product" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  
								    <div class="carousel-inner">
										<div class="item active">
										  <a href="<?=base_url()?>uploads/<?=$veri[0]->resim?>"><img  width="40" height="50"src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt=""></a>										 
										</div>
										<?php
						foreach($veriler as $rs)
						{
								?>
										<div class="item">
										
										  <a href="<?=base_url()?>uploads/<?=$rs->resim?>"><img width="30" height="30" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""></a>
										  		
										</div>
										<?php
						
						}
						?>
										
										
									</div>
							

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								
								
								<span>
									<span>ÜRÜN ÖZELLİKLERİ:</span>
									</span>
									</br>FİYAT:<h2><?=$veri[0]->fiyat?>TL</h2></br>	
									İŞLETİM SİSTEMİ:<h2><?=$veri[0]->katadi?></h2></br>									
									MARKA:<h2><?=$veri[0]->marka?></h2></br>
								    MODEL:<h2><?=$veri[0]->model?></h2></br>								
								    ÇIKIŞ TARİHİ:<h2><?=$veri[0]->ctarih?></h2></br>
									
								
								
								
								
							</div><!--/product-information-->
								
						</div>
						<h2>ÖZELLİKLER:</h2>
						<BR><?=$veri[0]->ozellikler?><br>
						<div class="x_content">
                   
                    <table id="datatable" class="table table-striped table-bordered">                      
                             <h2>Ürün Yorumları:</h2>
                      <tbody>
					    <?php
					  foreach($yorumlar as $rs)
					  {
					?>
					
                        <tr>
						  <td><?=$rs->kisi?>:</td>
                          <td><?=$rs->yorum?></td>                         
						  <?php } ?>
                        
                        </tr>
                       
                       
                      </tbody>
                    </table>
                  </div>
						
						
						<?php
							if(! $this->session->userdata('logged_on')) { ?>
								<h2>Yorum yapmak için giriş yapmalısınız!!!</h2>
							<?php }
							else
							{
								?>
								<div class="signup-form"><!--sign up form-->
						<h2>Yorum yap;</h2>
						<form action="<?=base_url()?>login/yorum/<?=$veri[0]->id?>" method="post">
							<input type="text" name="kisi" value="<?=$this->session->logged_on['adsoy']?>" />
							<input type="text" name="telefon_id" value="<?=$veri[0]->id?>"/>
							<input type="text" name="yorum" placeholder="yorumunuz..."/>
							<button type="submit" class="btn btn-default">Yorum Yap </button>
						</form>
					</div>
								
							
							<?php } ?>
							
							
					
						
					</div><!--/product-details-->
					
					<!--/category-tab-->
					
					<!--/recommended_items-->
					
				</div>
				</section>
		        </div>
			    </div>
				
				<?php 
				$this->load->view('_footer');
				?>
				
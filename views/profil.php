
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>PROFİLİNİZ</h2>
						<?php if ($this->session->flashdata("SONUÇ"))
				{ ?>
					
				
				  <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Uyarı:</strong> <?=$this->session->flashdata("SONUÇ")?>
					
				</div> <?php } ?> 
						<form action="<?=base_url()?>login/guncellekaydet/<?=$this->session->logged_on['id']?>" method="post">
							<input type="text" name="adsoy" placeholder="ADINIZ" value="<?=$this->session->logged_on['adsoy']?>" />
							<input type="text" name="email" placeholder="EMAİL" value="<?=$this->session->logged_on['email']?>"/>
							<input type="text"  name="sifre"placeholder="ŞİFRENİZ " value="<?=$this->session->logged_on['sifre']?>"/>
							
							<button type="submit" class="btn btn-default">Güncelle</button>
						</form>
					</div><!--/login form-->
				</div>
				
				
			</div>
		</div>
	</section><!--/form-->

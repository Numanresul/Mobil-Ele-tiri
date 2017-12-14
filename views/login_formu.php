
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Hesabınıza Girin</h2>
						<?php if ($this->session->flashdata("login_hata"))
				{ ?>
					
				
				  <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Uyarı:</strong> <?=$this->session->flashdata("login_hata")?>
					
				</div> <?php } ?> 
						<?php if ($this->session->flashdata("SONUÇ"))
				{ ?>
					
				
				  <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Uyarı:</strong> <?=$this->session->flashdata("SONUÇ")?>
					
				</div> <?php } ?> 
						<form action="<?=base_url()?>login/login_ol" method="post">
							<input type="text" name="email" placeholder="EMAİL" />
							<input type="password"  name="password"placeholder="ŞİFRENİZ " />
							
							<button type="submit" class="btn btn-default">Giriş Yap</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">YA DA</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Yeni Kullanıcı Girişi!</h2>
						<form action="<?=base_url()?>login/eklekaydet" method="post">
							<input type="text" name="adsoy" placeholder="ADINIZ VE SOYADINIZ"/>
							<input type="email" name="email" placeholder="EMAİL ADRESİNİZ"/>
							<input type="text" name="sifre" placeholder="ŞİFRENİZ"/>
							<button type="submit" class="btn btn-default">Kayıt Ol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

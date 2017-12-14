						
				
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Bize Yazın</h2>
						<div class="single-blog-post">
							<div class="contact-form">
							<?php if ($this->session->flashdata("SONUÇ"))
				{ ?>
					
				
				  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>İşlem:</strong> <?=$this->session->flashdata("SONUÇ")?>
					<strong>Email:</strong> <?=$this->session->flashdata("email_sent")?>
				</div> <?php } ?>
	    				<h2 class="title text-center">Etkileşime Geçelim</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
						<script>
						function validateForm() {
                 var x = document.forms["myForm"]["adsoy"].value;
                                if (x == "") {
                                alert("Name must be filled out");
                                return false;
                                      }
                                         }
						
						</script>
				    	<form id="main-contact-form" name="myform" class="contact-form row" onsubmit="return validateForm()" action="<?=base_url()?>Home/mesaj_ekle" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="İsim Soyisim">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="E-mail Adresiniz">
				            </div>
							<div class="form-group col-md-6">
				                <input type="text" name="tel" class="form-control" required="required" placeholder="Tel No">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="konu" class="form-control" required="required" placeholder="Konu">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınızı Yazınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
				            </div>
				        </form>
	    			</div>
							
							
							
							
						</div>
					</div><!--/blog-post-area-->

					
					
									
					</div><!--/Repaly Box-->
						</section>
		        </div>
			    </div>
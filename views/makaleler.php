						
				
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">MOBİL TEKNOLOJİ MAKALELERİ</h2>
						<div class="single-blog-post">
							
	    			
	    				
						
				    	
				            <div class="form-group col-md-12">
								
								<?php
						foreach($makaleler as $rs)
						{
						?>
				                
								<h3><a href="<?=base_url()?>Home/makale/<?=$rs->id?>"><?=$rs->konu?></a></h3>
				                
								<?php
						}
						?>	
						</div>
											            							
				      			           
				            
	    			</div>
							
							
							
							
						</div>
					</div><!--/blog-post-area-->

					
					
									
					</div><!--/Repaly Box-->
						</section>
		        </div>
			    </div>
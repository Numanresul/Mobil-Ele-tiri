<head>
   <?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_slidebar');
	?>
	</head>
  
	 <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url()?>assets/admin/images/user.png" alt=""><?=$this->session->logged_in['adsoy']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?=base_url()?>admin/KullanicilarYON/preview/<?=$this->session->logged_in['id']?>"> Profil</a></li>
                    
                   
                    <li><a href="<?=base_url()?>admin/login/log_out"><i class="fa fa-sign-out pull-right"></i> Çıkış</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
           
           
           
           
          
          </div>
          <!-- /top tiles -->

         
          <br />
		  <div class="clearfix"></div>
		 
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Telefon Düzenleme Formu <small>lütfen alanları doldurunuz!</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?=base_url()?>admin/Telefonlar/guncellekaydet/<?=$veri[0]->id?>" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Marka <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="marka"  value="<?=$veri[0]->marka?>" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Model <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="model" id="last-name"  value="<?=$veri[0]->model?>" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Açıklama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="aciklama"  value="<?=$veri[0]->aciklama?>" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fiyatı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="fiyat" id="last-name"  value="<?=$veri[0]->fiyat?>" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Çıkış Tarihi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="ctarih" id="last-name"  value="<?=$veri[0]->ctarih?>" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Anahtar Kelimeler <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="keywords" id="last-name"  value="<?=$veri[0]->keywords?>" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Durum</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="durum" class="form-control">
                           	<option><?=$veri[0]->durum?></option> 
                            <option>Yeni</option>
                            <option>Yayında</option>
                            <option>Beklemede</option>
                            
                          </select>
                        </div>
                      </div>					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">İşletim Sistemi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="kategori_id" class="form-control">
                           	<option value="<?=$veri[0]->kategori_id?>"><?=$veri[0]->katadi?></option> 
							<?php	foreach($kategori as $rs)																			
							{?>
                            <option value="<?=$rs->id?>"><?=$rs->adi?></option>
                           <?php						   
							}?>                            
                          </select>
                        </div>
                      </div>
					  <div >					  
					     </br> <h4>Telefon Özellikleri:</h4></br>
						  <div >
                           <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
						   <textarea  name="ozellikler" id="ozellikler"  rows="10" cols="80">
                       <?=$veri[0]->ozellikler?>
					  

                           </textarea>
						   <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'ozellikler' );
                            </script>
						    </div>
                        </div>
                      </div>
                     
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Çıkış</button>
                          <button type="submit" class="btn btn-success">Gönder</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
		<?php
		$this->load->view('admin/_footer');
		
		?>
            </div>
	  

          

        
        </div>
		
		  
		 <!-- jQuery -->
    <script src="<?=base_url()?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url()?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url()?>assets/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url()?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=base_url()?>assets/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url()?>assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>assets/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=base_url()?>assets/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=base_url()?>assets/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url()?>assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url()?>assets/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url()?>assets/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url()?>assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url()?>assets/admin/build/js/custom.min.js"></script>

    <!-- Flot -->

   
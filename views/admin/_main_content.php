    
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
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Toplam Kullanıcı Sayısı</span>
              <div class="count">
			  <?php
			        $kullanici=0;
					  foreach($veri as $rs)
					  {
					$kullanici++;
					
					  }
					  echo"$kullanici";
					?>
			  
			  </div>            
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-mobile"></i> Toplam Telefon Sayısı</span>
              <div class="count"><?php
			        $telefonlar=0;
					  foreach($veriler as $rs)
					  {
					$telefonlar++;
					
					  }
					  echo"$telefonlar";
					?></div>             
            </div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-female"></i> Bayan Kullanıcı Sayısı</span>
              <div class="count">
			  <?php
			        $bayan=0;
					  foreach($veri as $rs)
					  { if($rs->cinsiyet=="bayan"){
					  $bayan++;}
					
					  }
					  echo"$bayan";
					?>
			  
			  </div>             
            </div>
			<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-male"></i> Erkek KullanıcıSayısıSayısı</span>
              <div class="count">
			  <?php
			        $bay=0;
					  foreach($veri as $rs)
					  { if($rs->cinsiyet=="bay"){
					  $bay++;}
					
					  }
					  echo"$bay";
					?>
			  </div>             
            </div>
           
           
           
          
          </div>
          <!-- /top tiles -->
<!-- weather widget start --><div id="m-booked-weather-bl250-56847"> 
<a href="//bookeder.com/weather/karabuk-w673503" class="booked-wzs-250-175" 
style="background-color:#102b47;"> 
<div class="booked-wzs-250-175-data wrz-22"> 
<div class="booked-wzs-250-175-right"> 
<div class="booked-wzs-day-deck"> 
<div class="booked-wzs-day-val"> 
<div class="booked-wzs-day-number">-9</div> 
<div class="booked-wzs-day-dergee"> 
<div class="booked-wzs-day-dergee-val">&deg;</div> 
<div class="booked-wzs-day-dergee-name">C</div>
</div> </div> 
<div class="booked-wzs-day"> 
<div class="booked-wzs-day-d">H: -9&deg;</div> 
<div class="booked-wzs-day-n">L: -15&deg;</div> 
</div> </div> <div class="booked-wzs-250-175-city">Karabük</div> 
<div class="booked-wzs-250-175-date">Perşembe, 01 Aralık</div> 
<div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">7 günlük hava tahminini</span>
 </div> </div> </div> 
 <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> 
 <tr> <td>Cu</td> <td>Ct</td> <td>Pz</td> <td>Pt</td> <td>Sa</td> <td>Ça</td> </tr> <tr> 
 <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico">
 <div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico">
 <div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico">
 <div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico">
 <div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico">
 <div class="wrz-sml wrzs-01"></div>
 </td> </tr> <tr> <td class="week-day-val">-2&deg;</td> <td class="week-day-val">-5&deg;</td> 
 <td class="week-day-val">0&deg;</td> <td class="week-day-val">-2&deg;</td> <td class="week-day-val">-2&deg;</td> 
 <td class="week-day-val">0&deg;</td> </tr> <tr> <td class="week-day-val">-11&deg;</td> <td class="week-day-val">-8&deg;</td> 
 <td class="week-day-val">-15&deg;</td> <td class="week-day-val">-12&deg;</td> <td class="week-day-val">-18&deg;</td> 
 <td class="week-day-val">-19&deg;</td> </tr> </table> </a> </div><script type="text/javascript"> 
 var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); 
 css_file.setAttribute("href",'//s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); 
 function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) 
 { var objMainBlock = document.getElementById('m-booked-weather-bl250-56847'); if(objMainBlock !== null) 
 { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; 
if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } 
</script> 
<script type="text/javascript" charset="UTF-8" 
src="http://widgets.booked.net/weather/info?action=get_weather_info&ver=4&cityID=w673503&type=3&scode=124&lt
id=3457&domid=765&cmetric=1&wlangID=21&color=102b47&wwidth=250&header_color=ffffff&
text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0">
</script><!-- weather widget end -->
         
          <br />
		  
		  
		   <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bilgilendirme! <small>Uygun Cep Telefonu Seçmenin Püf Noktaları</small></h2>
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

                   
                      <!-- blockquote -->
                      <blockquote>
                        <p>
		Günümüzde lüksten ziyade ihtiyaç haline gelen cep telefonları zengin model seçenekleri ve farklı fiyat aralıklarıyla kafa karıştırıyor. Söz konusu
		yeni bir cep telefonu almak olduğunda, birbirinden farklı özellikteki cep telefonlarının arasında kendiniz için en uygun cep telefonunu seçerken 
		nelere dikkat etmeli, hangi kriterler doğrultusunda seçiminizi belirlemelisiniz?
		
                        </p>
						<p>
						Gün geçmiyor ki cep telefonu pazarında yeni bir model tezgâhlardaki yerini almasın. Rengarenk, farklı fonksiyonlara hitap eden bu yeni
						cep telefonu modelleri içinden seçim yapmak gerçekten de zor. Peki, bu noktada tercihinizi neye göre belirlemeli, yeni cep telefonu 
						alırken nelere dikkat etmelisiniz?
						</p>
						<p>
						Kimileri için cep telefonu bir aksesuar demek, kimileri için iş, kimileri için sadece iletişim, kimileri için fotoğraf makinesi, 
						kimileri için ise hepsini bir arada bulabildikleri tam donanımlı bir araç… Tanımlar beklentiler her bir birey için farklılık 
						gösterirken hemen herkesin yeni çıkan bir modeli düşünmeksizin satın almaya kalkması bilinçsiz tüketici portrelerinin gelişmesine 
						aynı zamanda da cep yakan cep telefonlarının satın alınmasına neden oluyor. Kimi ebeveynler çocuklarından yadigâr son derece donanımlı
						ve gelişmiş cep telefonlarını sadece “alo” demek için kullanırken zaman zaman da bu yüksek teknolojinin altında eziliyorlar. Oysa cep
						telefonu da kişiye özel olmalı, kişinin kullanıcı alışkanlıklarına uygun bir şekilde seçilmelidir.
						</p>
						
                        <footer>Mobil Eleştiri Editörü <cite title="Source Title">--Numan Resul Kul--</cite>
                        </footer>
                      </blockquote>

                      
                    
                   

                    
                  </div>
                </div>
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

    
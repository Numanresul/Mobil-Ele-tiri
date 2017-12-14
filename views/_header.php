<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$ayarlar[0]->aciklama?>">
	<meta name="keywords" content="<?=$ayarlar[0]->keywords?>">
    <meta name="author" content="">
    <title><?=$ayarlar[0]->marka?></title>
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
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="<?=$ayarlar[0]->iletisim?>"><i class="fa fa-phone"></i> iletişim: '<?=$ayarlar[0]->email?>'</a></li>
								<li><a href="<?=base_url()?>Home/bize_yazin"><i class="fa fa-envelope"></i> bize yazın</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?=$ayarlar[0]->facebook?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?=$ayarlar[0]->twitter?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?=$ayarlar[0]->instagram?>"><i class="fa fa-linkedin"></i></a></li>								
								<li><a href="<?=$ayarlar[0]->iletisim?>"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/home/logos.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<?php
							if(! $this->session->userdata('logged_on')) { ?>
								<li><a href="<?=base_url()?>login"><i class="fa fa-user"></i>Oturum Aç</a></li>
							<?php }
							else
							{
								?>
								<li><a href="<?=base_url()?>login/profil"><i class="fa fa-user"></i><?=$this->session->logged_on['adsoy']?></a></li>
								<li><a href="<?=base_url()?>login/log_out" class=""><i class="fa fa-lock"></i> Çıkış Yap </a></li>
							<?php } ?>	
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php
						$home="";
						$bize_yazin="";
						$telefonlar="";
						$iletisim="";
						$makaleler="";
						$hakkimizda="";
						switch($menu)
						{
							case "home";
							$home='active';
							break;
							case "telefonlar";
							$telefonlar='active';
							break;
							case "makaleler";
							$makaleler='active';
							break;
							case "iletisim";
							$iletisim='active';
							break;
							case "bize_yazin";
							$bize_yazin='active';
							break;
							
							case "hakkimizda";
							$hakkimizda='active';
							break;
						}
						
						?>

						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=base_url()?>" class="<?=$home?>">Anasayfa</a></li>								 								 
								<li><a href="<?=base_url()?>Home/telefonlar" class="<?=$telefonlar?>">Telefonlar</a></li>
								<li><a href="<?=base_url()?>Home/makaleler" class="<?=$makaleler?>">Makaleler</a></li>
								<li><a href="<?=base_url()?>Home/iletisim" class="<?=$iletisim?>">İletişim</a></li>
								<li><a href="<?=base_url()?>Home/bize_yazin" class="<?=$bize_yazin?>">Bize Yazın</a></li>
								<li><a href="<?=base_url()?>Home/hakkimizda" class="<?=$hakkimizda?>">Hakkımızda</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
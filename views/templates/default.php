<!DOCTYPE html>

<html lang="pt-BR">
<!-- Cabeçario do site -->
<head>
	<meta accept-charset="iso-8859-1,utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo utf8_encode($this->config['site_title']); ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default.css" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default-mobi.css" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/icons_fonts/fonts.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
	<link rel="icon" href="<?php echo BASE_URL; ?>assets/images/icon.png">
</head>

<!-- corpo do site -->
<body>
	<!--Inicio do Header -->
	<header id="header_align">
		<div class="top_align_header"></div>
		<div class="container_header">
		
			<div class="logo-top">
				<a href="./"><img src="<?php echo BASE_URL.'assets/images/'.$this->config['home_logo']; ?>" alt="<?php echo $this->config['home_logo']; ?>"></a>
			</div>

			<div class="aling_header_search">
				<div class="top_search_header">
					<input type="search" name="search" class="search" placeholder="Busca..." />
				</div>
				<div class="btn-menu">
                    <div></div>
                    <div></div>
                    <div></div>
            	</div>
				<nav class="nav_right menu">
					<a class="btn-close"><i class="fa fa-times"></i></a>
					<?php $this->loadMenu(); ?>
				</nav>
			</div>
			
		</div>
	</header>
	<!--Fim do Header -->

	<!--Banner do site -->
	<div class="slogan">
		<div class="slogan_align">
			<div class="slogan_txt_g">
				<h2><?php echo $this->config['home_welcome_left']; ?></h2>
			</div>
			<div class="slogan_banner">
				<img src="<?php echo BASE_URL.'assets/images/'.$this->config['home_banner']; ?>">
			</div>
			<div class="slogan_txt_p">
				<h3><?php echo $this->config['home_welcome_right']; ?></h3>
			</div>
		</div>
	</div>
	<!-- Fim do banner -->
	
	<!-- formulario de captura de email -->
	<div class="align_form">
		<div class="align_int_form">
			<div class="item_txt"><p>Respeitamos sua privacidade. Você está 100% seguro!</p></div>
			<div class="item_form">
				<form action="" class="form_right">
					<input type="email" name="email" placeholder="Seu melhor e-mail.." class="item_email">
					<input type="submit" name="btn_email" value="Quero Receber!" class="item_btn">
				</form>
			</div>
		</div>
	</div>
	<!-- Fim do formulario de captura de email -->

	<main class="container">
		
		<?php 
			$this->loadViewInTemplate($viewName, $viewData);
		?>

	</main>
</body>
<footer class="container_footer">
		<div class="footer_network">
			<div class="footer_network_int">
				<div class="logo_bootom">
					<a href="./"><img src="assets/images/logo-mobile.png" title="TOPO^" alt="logo_do_roda_pé"></a>
				</div>
				<div class="network_right">

						<div class="yotube icon_box">
							<a href="https://www.youtube.com/channel/UCwiNydMAr4gyd7UKk-7ZbqQ" target="_blank"> <span class="icon-youtube"></span></a>
						</div>

						<div class="instagran icon_box">
							<a href="https://www.instagram.com/tonivansilva/?hl=pt-br" target="_blank"> <span class="icon-instagram"></span></a>
						</div>

						<div class="twitter icon_box">
							<a href="https://mobile.twitter.com/sorendaonline" target="_blank"> <span class="icon-twitter "></span></a>
						</div>
					
						<div class="facebook icon_box">
							<a href="https://www.facebook.com/sorendaonline/" target="_blank"> <span class="icon-facebook "></span></a>
						</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="list_left">
				<ul>
					<li>&copy 2014 - <?php echo date('Y'); ?> - Todos os Direitos Reservados</li>
					<li>|</li>
					<li><a href="#">Política de Privacidades</a></li>
				</ul>
			</div>
			<div class="list_right">
				<ul>
					<li>Desenvolvido Por: <span><a href="#">Tonivan Joseph</a></span></li>
				</ul>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script>
        $(".btn-menu").click(function(){
            $(".menu").show();
        });
        $(".btn-close").click(function(){
            $(".menu").hide();
        });
    </script>    
</body>
</html>
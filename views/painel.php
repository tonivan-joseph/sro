 <!DOCTYPE html>

<html lang="pt-BR">
<!-- Cabeçario do site -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bem Vindo(a) ao Painel Adminstrativo</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/painel.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
	<link rel="icon" href="<?php echo BASE_URL; ?>assets/images/icon.png">
	<script type="text/javascript" src="internet_explore.js" > </script>
	
</head>
<body>
	<div class="top_align_header"></div>
	<main class="main-template ">
		<!--cabeçalho do sistema -->
		<header class="item-header header">
			<div class="item-title">
				<h1>Área Admistrativo</h1>
			</div>
				
			<!-- <ul class="item_user">
				<li>Olá, Usuário</li>
				<img src="<?php //echo BASE_URL; ?>assets/images/Tony-autor.png" alt="Imagem_autor_Tony" />
			</ul> -->
		</header>
		
		<!-- Menu lateral do sistema -->
		<nav class="item nav">
			<div class="item_logo-mobile">
				<a href="#" class="btn_menu_mobile"><i class=" icon fas fa-bars"></i></a>
				<img src="<?php echo BASE_URL; ?>assets/images/logo-mobile.png" alt="logo-mobile">
			</div>
			<div class="avatar">
				<img src="<?php echo BASE_URL; ?>assets/images/Tony-autor.png" alt="Imagem_autor_Tony" />
				<div class="name-user">Olá, Usuário</li>
			</div>
			<ul class="menu">
				<li><a href="<?php echo BASE_URL; ?>painel"><span class="icon-home2 icno-menu"></span><i class=" icon left fas fa-home"></i>Inicio</a></li>
				<li><a href="<?php echo BASE_URL; ?>painel/paginas"><span class="icon-home2 icno-menu"></span><i class=" icon left fas fa-pager"></i>Páginas</a></li>
				<li>
					<a href="<?php echo BASE_URL; ?>painel/edit"><span class="icon-price-tag icno-menu"></span><i class=" icon left fas fa-thumbtack"></i>Posts<i class=" icon rigth fas fa-angle-down"></i></a>

					<ul class="menu_sub">
						<li><a href="<?php echo BASE_URL; ?>painel/posts"><i class=" icon left fas fa-tags"></i>Todos os Posts</a></li>
						<li><a href="<?php echo BASE_URL; ?>painel/add_posts"><i class=" icon left fas fa-tag"></i>Novo Post</a></li>
					</ul>
					
				</li>
				<li>
					<a href="<?php echo BASE_URL; ?>painel/config"><span class="icon-price-tag icno-menu"></span><i class="icon left fas fa-wrench"></i></i>Configurações<i class=" icon rigth fas fa-angle-down"></i></a>

					<ul class="menu_sub">
						<li><a href="<?php echo BASE_URL; ?>painel/menus"><i class="icon left fas fa-bars"></i>Menus</a></li>
					</ul>
					
				</li>
				<li class=""><a href="add-midias.php"><span class="icon-user-tie icno-menu"></span><i class=" icon left fas fa-camera"></i>Mídias<i class=" icon rigth fas fa-angle-down"></i></a>
					<ul class="menu_sub">
						<li><a href="<?php echo BASE_URL; ?>/painel/biblioteca"><i class=" icon left fas fa-plus-square"></i>Biblioteca</a></li>
						<li><a href="<?php echo BASE_URL; ?>/painel/add-midias"><i class=" icon left fas fa-edit"></i>Adicionar Nova</a></li>
					</ul>
				</li>
				<li><a href="./"><span class="icon-mail4 icno-menu"></span><i class=" icon left fas fa-chart-line"></i>Estatísticas</a></li>
				<li class=""><a href="<?php echo BASE_URL; ?>painel/add_users"><span class="icon-mail4 icno-menu"></span><i class=" icon left fas fa-user-tie"></i>Usuários<i class=" icon rigth fas fa-angle-down"></i></a>
					<ul class="menu_sub">
						<li><a href="<?php echo BASE_URL; ?>painel/add_users"><i class="icon left fas fa-user-plus"></i>Novo Usuário</a></li>
						<li><a href="<?php echo BASE_URL; ?>painel/all_users"><i class="icon left fas fa-users"></i>Todos os Usuário</a></li>
					</ul>
				</li>
				<li><a href="<?php echo BASE_URL; ?>/painel/logout"><span class="icon-mail4 icno-menu"></span><i class=" icon left fas fa-sign-out-alt"></i>Sair</a></li>
			</ul>
		</nav>
		<!--Fim do meun --><!--corpo do sistema -->
		<container class="item-content item">
			<?php 
				$this->loadViewInTemplate($viewName, $viewData);
			?>
		</container>
	<footer class="item footer">
		<p>Aréa Adminstrativas. <a href="<?php echo BASE_URL; ?>">Só Renda Online</a></p>
	</footer>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
	</main>
</body>
</html>
	<header class="item-header">
		<h1>Bem Vindo(a) ao SRO</h1>
		<h5>Painel Administrativo totalmente Dinâmico!</h5>
	</header>
	<section class="item-graph">
		<div class="item-btn">
			<div class="box_posts">
				<h3>Ultimos Posts</h3>
				<button class="btn_item"><?php echo $total_posts." Artigos";?></button>
			</div>
			<div class="box_views">
				<h3>Ultimos Views</h3>
				<button class="btn_item">253 Visítas</button>
			</div>
		</div>
		<divi class="item-lists">
			<ul class="">
				<li class="item-cls"><i class="fas fa-users"></i><?php echo $total_usuario; ?> - Usuários</li>
				<li class="item-cls"><i class="fas fa-pager"></i> <?php echo $total_paginas; ?> - Páginas</li>
				<li class="item-cls"><i class="fas fa-at"></i><?php echo $total_usuario; ?> - E-mail Cadastrado</li>
				<li class="item-cls"><i class="fas fa-comments"></i> 0 - Comentários</li>
				<li class="item-cls"><i class="fas fa-share-alt-square"></i>0 - Compartilhamento</li>
			</ul>
		</div>
	</section>
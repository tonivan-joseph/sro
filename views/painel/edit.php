<section class="item-content ">

	<header class="item-header header-button">
		<h1><i class=" icon left fas fa-thumbtack"></i>Todos os Posts</h1><br/>
		<button><a href="add-posts.php">Novo Posts</a></button>
	</header>

	<table class="rTable">
		<tr>
			<th class="title-table">Título</th>
			<th class="title-table">Autor</th>
			<th class="title-table">Data</th>
		</tr>
		
		<?php foreach($edit as $ed): ?>
		<tr>
			<td>
				<strong><a href="#"><?php echo utf8_encode($ed['titulo']); ?></a></strong>
				<div class="row-actions">
					<span class="edit"><a href="<?php echo BASE_URL; ?>painel/edit_paginas/<?php echo $ed['id']; ?>">Editar</a></span>
					<span class="delete"><a href="<?php echo BASE_URL; ?>painel/del_paginas/<?php echo $ed['id']; ?>">Excluir</a></span>
					<span class="views"><a href="<?php echo BASE.$ed['url']; ?>">Visualizar</a></span>
				</div>
			</td>
			<td class="item-td"><?php echo utf8_encode($ed['autor']); ?></td>
			<td class="item-td"><?php echo $ed['data']; ?></td>
		</tr>
		<?php endforeach; ?>
		
		<tr>
			<th class="title-table">Título</th>
			<th class="title-table">Autor</th>
			<th class="title-table">Data</th>
		</tr>
	</table>
</section>
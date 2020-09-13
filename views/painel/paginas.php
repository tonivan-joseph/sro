<section class="item-content ">

	<header class="item-header header-button">
		<h1><i class="icon left fas fa-pager"></i>Todas ás Páginas</h1><br/>
		<button><a href="<?php echo BASE_URL; ?>painel/add_paginas">Adicionar Nova</a></button>
	</header>

	<table class="rTable">
		<tr>
			<th class="title-table">Título</th>
			<th class="title-table">Autor</th>
			<th class="title-table">Data</th>
		</tr>
		<?php foreach($paginas as $pagina): ?>
		<tr>
			<td class="td">
				<strong><a href="#"><?php echo utf8_encode($pagina['titulo']); ?></a></strong>
				<div class="row-actions">
					<span class="edit"><a href="<?php echo BASE_URL; ?>painel/edit_paginas/<?php echo $pagina['id']; ?>">Editar</a></span>
					<span class="delete"><a href="<?php echo BASE_URL; ?>painel/del_paginas/<?php echo $pagina['id']; ?>">Excluir</a></span>
					<span class="views"><a href="<?php echo BASE_URL.$pagina['url']; ?>">Visualizar</a></span>
				</div>
			</td>
			<td class="td">
				<strong><a href="#"><?php echo $pagina['autor']; ?></a></strong>
			</td>
			<td class="td">
				<strong><a href="#"><?php echo $pagina['data']; ?></a></strong>
			</td>
		</tr>
		<?php endforeach; ?>

		<tr>
			<th class="title-table">Título</th>
			<th class="title-table">Autor</th>
			<th class="title-table">Data</th>
		</tr>

	</table>
</section>
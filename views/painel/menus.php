<section class="item-content ">

	<header class="item-header header-button">
		<h1><i class="icon left fas fa-bars"></i>Menus</h1><br/>
		<button><a href="<?php echo BASE_URL; ?>painel/add_menus">Adicionar Novo</a></button>
	</header>

	<table class="rTable">
		<tr>
			<th class="title-table">Título</th>
			<th class="title-table">Url</th>
			<th class="title-table">Icons</th>
		</tr>
		
		<?php foreach($menus as $menu): ?>
		
		<tr>
			<td class="td">
				<strong><a href="<?php echo BASE_URL.$menu['url']; ?>"><?php echo $menu['nome']; ?></a></strong>
				<div class="row-actions">
					<span class="edit"><a href="<?php echo BASE_URL; ?>painel/edit_menus/<?php echo $menu['id']; ?>">Editar</a></span>
					<span class="edit"><a href="<?php echo BASE_URL; ?>painel/del_menus/<?php echo $menu['id']; ?>">Excluir</a></span>
				</div>
			</td>
			<td class="td">
				<strong><a href="<?php echo BASE_URL.$menu['url']; ?>"><?php echo $menu['url']; ?></a></strong>
			</td>
			<td class="td">
				<strong><i class=" icon left fas <?php echo $menu['icons'] ?>"></i></strong>
			</td>
		</tr>
		
		<?php endforeach; ?>

		<tr>
			<th class="title-table">Título</th>
			<th class="title-table">Url</th>
			<th class="title-table">Icons</th>
		</tr>

	</table>
</section>
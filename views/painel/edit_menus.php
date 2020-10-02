<section class="item-content content-form item1 content">
	<header class="item-header">
		<h1>Editar Menus</h1>
	</header>
	
	<div class="form-content">
		<form class="item-form" method="POST">
			<label for="">Nome do Menu:</label>
			<input class="text" type="text" name="nome" value="<?php echo $menu['nome'] ?>"/>
			<label for="">URL do Menu:</label>
			<input class="text" type="text" name="url" value="<?php echo $menu['url'] ?>"/>
			<label>Nome do Icons:</label><br/>
			<input calss="text" type="text" name="icons" value="<?php echo $menu['icons'] ?>">
			<input class="btn-form" type="submit" value="Salvar" />
		</form>
	</div>
</section>
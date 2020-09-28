<section class="item-content ">
	<header class="item-header">
		<h1><i class="icon left fas fa-user-plus"></i>Editar Usuário</h1>
	</header>
	
	<div class="form-content">
		<div class="alert"></div>
		<form class="item-form" method="POST">
			<label for="">Nome:</label>
			<input class="text" type="text" name="nome" value="<?php echo $all_users['nome']; ?> ">
			<label for="">E-mail:</label>
			<input class="url" type="email" name="email" size="" maxlength="" value="<?php echo $all_users['email']; ?>" />
			<label>Senha:</label>
			<input type="password" name="senha" value="<?php $all_users['senha']; ?>">
			<input class="btn-form" type="submit" name="castrar" value="Atualizar" />
		</form>
	</div>
</section>
<section class="item-content ">
	<header class="item-header">
		<h1><i class="icon left fas fa-users"></i>Todos os Usuarios</h1>
	</header>
	
	<div class="form-content ">
		
		<table class="table-user">
			<thead>
				<tr class="tab-header">
					<th>Nome</th>
					<th>E-mail</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<tbody class="tbody-users">
				<?php foreach($all_users as $user_item): ?>
				<tr>
					<td class="tb-users"><p><?php echo $user_item['nome']; ?></p></td>
					<td class="tb-users"><p><?php echo $user_item['email']; ?></p></td>
					<td class="tb-users">
						<a href="<?php echo BASE_URL; ?>painel/edit_users/<?php echo $user_item['id']; ?>">Editar</a>
						<a href="<?php echo BASE_URL; ?>painel/del_users/<?php echo $user_item['id']; ?>" class="delet-cor"><span>Excluir</span></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>
</section>
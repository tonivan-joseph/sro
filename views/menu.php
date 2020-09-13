		 
		<ul>
			<?php foreach ($menu as $menuitem): ?>
			<li><a href="<?php echo BASE_URL.$menuitem['url']; ?>"><i class="icon left fas <?php echo $menuitem['icons']; ?> icno-menu"></i><?php echo utf8_encode($menuitem['nome']); ?></a></li>
			<?php endforeach ?>
		</ul>

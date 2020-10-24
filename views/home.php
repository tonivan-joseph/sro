
<!--Conteudo Principal do site -->
		<section class="content">
			<?php foreach($posts as $pag): ?>
				<article>
					<header><h1><a href="<?php echo BASE.$pag['url']; ?>"><?php echo strtoupper($pag['titulo']); ?></a></h1></header>
					<!-- <div class="avatar_autor">
						<div class="img_icon">
							<img src="<?php echo BASE_URL.'assets/images/'.$pag['']; ?>">
						</div>
						<div class="txt_icon">Escrito por: <span><?php echo $pag['autor']; ?></span></div>
					</div>  -->
					<figure>
					<a href="<?php echo BASE.$pag['url']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/imagem-marketing-digital.jpg" />
					</a></figure>
					<p><?php echo substr($pag['corpo'], 0, 250); ?><a href="<?php echo BASE.$pag['url']; ?>">Continue lendo >></a></p>
				</article>
			<?php endforeach ?>	
		</section>
		<!-- fim do conteudo principal -->

		<!-- Sidbar esquerda do site -->
		<aside class="sidebar_left">
			<div class="sidebar_autor">
				<div class="sidebar_perf">
					<img src="<?php echo BASE_URL.'assets/images/'.$this->config['home_sidebar_autor_img']; ?>" width="270" height="270"/>
				</div>
				<div class="sidebar_name">
					<h2><?php echo $this->config['home_siderbar_autor_name'];?><span class="icon-user"></span></h2>
				</div>
				<div class="sidebar_legend">
					<p> <?php echo $this->config['home_siderbar_autor_legend']; ?><a href="<?php echo BASE_URL ?>sobre">Saiba mais..</a></p>
				</div>
			</div>

			<div class="sidebar_artgs">

				<div class="box_title">
					<h2><span class="icon-newspaper"></span>Artigos Populares</h2>
				</div>
				<?php foreach($posts as $pag_bar): ?>
					<div class="title_aling">
						<ul>
							<li><span class="icon-arrow-right icon-arrow"></span></li>
							<li class="line_bootom"><a href="<?php echo BASE.$pag_bar['url']; ?>"><?php echo $pag_bar['titulo']; ?></a>
							</li>
						</ul>
					</div>
				<?php endforeach ?>
			</div>

			<div class="sideba_form">
				<div class="form_title">
					<h2><span class="icon-download3"></span>Recebas as Novidades</h2>
				</div>
				<div class="form_txt"><p>Coloque o seu email abaixo para receber gratuitamente as atualizações do blog!</p></div>
				<div class="sdb_form">
					<form action="" class="sdb_form_right">
						<input type="email" name="email" class="sdb_item_email" placeholder="Seu melhor e-mail..">
						<input type="submit" name="btn_email" value="Quero Receber!" class="sdb_item_btn">
					</form>
				</div>
			</div>
		</aside>
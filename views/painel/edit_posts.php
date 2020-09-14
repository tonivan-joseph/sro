<section class="item-content content-form item1 content">
	<header class="item-header">
		<h1>Editar Posts</h1>
	</header>
	
	<div class="form-content">
		<form class="item-form" accept-charset="iso-8859-1,utf-8" method="POST">
			<label for="">Editar Titulo do Posts:</label>
			<input class="text" type="text" name="titulo" value="<?php echo $posts['titulo']; ?>">
			<label for="">Editar URL da Posts:</label>
			<input class="text" type="text" name="url" value="<?php echo $posts['url']; ?>">
			<label>Editar Corpo da Posts:</label><br/>
			<textarea class="texarea" name="corpo" id="id_textarea"><?php echo $posts['corpo']; ?></textarea>
			<input class="btn-form" type="submit" name="enviar" value="Salvar" />
		</form>
	</div>
</section>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apikay=xml5dlvil2t5bdkb5gyxwvhfop541k12cclml9i5md1dm83k"></script>
 <script type="text/javascript">
	  tinymce.init({
	    selector: '#id_textarea',
	    height:500,
	    menubar:true,
	    plugins:[
	    	'textcolor image media lists link'
	    ],
	    toolbar:'undo redo | formatselect bold italic backcolor | media image link | alignleft alignright alignjustify aligncenter | bullist numlist | removeformat | ',
	    automatic_uploads:true,
	    file_picker_types:'image',
	    images_upload_url:'<?php echo BASE; ?>pages/upload',
	  
	  });
  </script>
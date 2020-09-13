<?php 
class paginasController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($url) {
		$dados = array();

		$p = new Paginas();
		$dados = $p->getPagina($url);

		$this->loadTemplate('paginas', $dados);
	}

	public function upload() {

		if(!empty($_FILES['file']['tmp_name'])) {

			$types_allowed = array('image/jpeg', 'image/png');

			if(in_array($_FILES['file']['type'], $types_allowed)) {

				$newname = md5(time().rand(0,999).rand(0,999)).' .jpg';

				move_uploaded_file($_FILES['file']['tmp_name'], '../sorendaonline.com/midia/pages'.$newname);

				$array = array(
					'location' => BASE.'media/pages/'.$newname
				);

				echo json_encode($array);
				exit;
			}

		}

	}

}
?>
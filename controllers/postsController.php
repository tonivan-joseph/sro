<?php
class postsController extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index($url) {
		$dados = array();

		$ps = new Posts();
		$dados = $ps->getPost($url);

		$this->loadTemplate('posts', $dados);
	}



}
?>
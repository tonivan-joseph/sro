<?php
class homeController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$dados = array(
			'depoimentos' => array(),
			'posts' => array()
		);

		//código para pegar os depoimentos
		$depo = new Depoimentos();
		$dados['depoimentos'] = $depo->getDepoimentos(2);

		$post = new Posts();
		$dados['posts'] = $post->getPosts(4);
		
		$this->loadTemplate('home', $dados);
	}
	
}

<?php 
class painelController extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$u = new Usuarios();
		$u->verificarLogin();
		$p = new Paginas();

		$dados = array();

		$total_paginas = $p->getTotalPaginas();
		$dados['total_paginas'] = $total_paginas;

		$total_usuario = $u->getTotalUsuarios();
		$dados['total_usuario'] = $total_usuario;

		$this->loadTemplateInPainel('painel/home', $dados);
	}

	//Aqui o usuario faz o login do sistema
	public function login(){
		$dados = array(
			'erro' =>''
		);

		if(isset($_POST['email']) && !empty($_POST['email'])) {
			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);

			$u = new Usuarios();
			$dados['erro'] = $u->logar($email, $senha);
		} 
			
			$this->loadView('painel/login', $dados);
			
	}

	//função que faz o usuários desconectar do sistema
	public function logout() {
		unset($_SESSION['lgpainel']);
		header("Location: ".BASE_URL."painel/login");
	}


	//Listas das páginas cadastrada no painel administrativo
	public function paginas() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();

		$p = new Paginas();
		$dados['paginas'] = $p->getPaginas();

		$this->loadTemplateInPainel('painel/paginas', $dados);
	}

	public function all_posts() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();

		$pt = new Posts();
		$dados['all_posts'] = $pt->getPosts();

		$this->loadTemplateInPainel('painel/all_posts', $dados);
	}

	public function menus() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();

		$m = new Menu();
		$dados['menus'] = $m->getMenu();

		$this->loadTemplateInPainel('painel/menus', $dados);
	}

	public function del_menus($id) {
		$u = new Usuarios();
		$u->verificarLogin();

		$m = new Menu();
		$m->delete($id);

		header("Location: ".BASE_URL.'painel/menus');

		$this->loadTemplateInPainel('painel/menus', $dados);
	}

	public function edit_menus($id) {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();
		$m = new Menu();

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$url = addslashes($_POST['url']);
			$icons = addslashes($_POST['icons']);
			
			$m->getUpdate($nome, $url, $icons, $id);

			header("Location: ".BASE_URL."painel/menus");
			exit;
		}

		$dados['menu'] = $m->getMenu($id);

		$this->loadTemplateInPainel('painel/edit_menus', $dados);
	}

	public function add_menus() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();
		$m = new Menu();

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$url = addslashes($_POST['url']);
			$icons = addslashes($_POST['icons']);
			
			$m->getInsert($nome, $url, $icons);

			header("Location: ".BASE_URL."painel/menus");
			exit;
		}

		$this->loadTemplateInPainel('painel/add_menus', $dados);
	}

	// Class da exclução das paginas
	public function del_paginas($id) {
		$u = new Usuarios();
		$u->verificarLogin();

		$p = new Paginas();
		$p->deletPages($id);

		header("Location: ".BASE_URL."painel/paginas");
	}

	//Editar paginas
	public function edit_paginas($id) {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();
		$p = new Paginas();

		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$url = addslashes($_POST['url']);
			$corpo_pages = addslashes($_POST['corpo_pages']);
			
			$p->updatePages($id, $titulo, $url, $corpo_pages);
			header("Location: ".BASE_URL."painel/paginas");
			exit;
		}

		$dados['paginas'] = $p->getPaginaById($id);

		$this->loadTemplateInPainel('painel/edit_paginas', $dados);
	}

	public function add_paginas() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();
		$p = new Paginas();

		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = utf8_encode(addslashes($_POST['titulo']));
			$url = addslashes($_POST['url']);
			$autor = addslashes($_POST['autor']);
			$corpo_pages = addslashes($_POST['corpo_pages']);
			$p->insertPaginas($titulo, $url, $autor, $corpo_pages);

			if(isset($_POST['ad_menu']) && !empty($_POST['ad_menu'])) {
				$m = new Menu();
				$m->getInsert($titulo, $url, $id=0);
			}

			header("Location: ".BASE_URL."painel/paginas");
			exit;
		}

		$this->loadTemplateInPainel('painel/add_paginas', $dados);
	}

	//adcionando os usuarios do sistema
	public function add_users() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();
		$us = new Usuarios();

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));
			
			$us->insertUsers($nome, $email, $senha);

			header("Location: ".BASE_URL.'painel/all_users');
			exit;
		}

		$this->loadTemplateInPainel('painel/add_users', $dados);
	}

	//exibindo todos os usuários do sistema
	public function all_users() {
		$u = new Usuarios();
		$u->verificarLogin();

		$dados = array();

		$dados['all_users'] = $u->getAlluser();

		$this->loadTemplateInPainel('painel/all_users', $dados);
	}

	// funcção para excluir os usuários do sistema
	public function del_users($id) {
		$u = new Usuarios();
		$u->verificarLogin();

		$u->deletUsers($id);

		header("Location: ".BASE_URL.'painel/all_users');
	}

}


?>
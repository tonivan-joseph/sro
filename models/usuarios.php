<?php
class Usuarios extends model {

	public function verificarLogin() {

	if(!isset($_SESSION['lgpainel']) || (isset($_SESSION['lgpainel']) && empty($_SESSION['lgpainel']) )) {
		header("Location: ".BASE."painel/login");
		exit;
		}
	}

	public function logar($email, $senha) {
		$retorno = '';

		$sql = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$f = $sql->fetch();

			$_SESSION['lgpainel'] = $f['id'];

			header("Location: ".BASE_URL."painel");

		} else {
			$retorno = 'E-mail e/ou Senha não conferem!';
		}

		return $retorno;
	}

	public function insertUsers($nome, $email, $senha) {
		$this->db->query("INSERT INTO usuarios SET nome = '$nome', email ='$email', senha ='$senha'");
	}

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function getAlluser() {
		$sql = "SELECT * FROM usuarios";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		}else {
			return array();
		}
	}

	public function getEdit_Users($nome, $email, $id) {

		$this->db->query("UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'");
	}

	public function getEditUserById($id) {
		$array = array();

		$sql = "SELECT nome, email, senha FROM usuarios WHERE id ='$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function deletUsers($id) {

		$this->db->query("DELETE FROM usuarios WHERE id = '$id'");
	}
}
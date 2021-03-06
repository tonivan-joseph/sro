<?php  
class Paginas extends model {

	public function getPaginas() {
		$array = array();

		$sql = 'SELECT id, titulo, url, autor, data FROM paginas';
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	//requisição para dados da páginas do artigo
	public function getPagina($url) {
		$array  = array();

		$sql = "SELECT titulo, corpo FROM paginas WHERE url = '$url'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getPaginaById($id) {
		$array  = array();

		$sql = "SELECT titulo, url, corpo FROM paginas WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;

	}

	public function deletPages($id) {

		$this->db->query("DELETE FROM paginas WHERE id = '$id'");
	}

	public function updatePages($id, $titulo, $url, $corpo) {

		$this->db->query("UPDATE paginas SET titulo = '$titulo', url = '$url', corpo = '$corpo' WHERE id = '$id'");
	}

	public function insertPaginas($titulo, $url, $autor, $corpo) {
		$this->db->query("INSERT INTO paginas SET titulo = '$titulo', url ='$url', autor ='$autor', corpo ='$corpo'");
	}

	public function getTotalPaginas() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM paginas");
		$row = $sql->fetch();

		return $row['c'];
	}

}

?>
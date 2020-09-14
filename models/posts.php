<?php  
class Posts extends model {

	public function getPosts($limit = 200) {
		$array = array();

		$sql = "SELECT * FROM posts";
		if($limit > 0) {
			$sql .= " LIMIT ".$limit;
		}

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getPost($url) {
		$array  = array();

		$sql = "SELECT titulo, autor, data, corpo FROM posts WHERE url = '$url'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}
}
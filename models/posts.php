<?php  
class Posts extends model {

	public function getPosts($limit = 0) {
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

	public function getPostsById($id) {
		$array  = array();

		$sql = "SELECT titulo, url, autor, corpo FROM posts WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;

	}

	public function deletPosts($id) {

		$this->db->query("DELETE FROM posts WHERE id = '$id'");
	}

	public function updatePosts($id, $titulo, $url, $autor, $corpo) {

		$this->db->query("UPDATE posts SET titulo = '$titulo', url = '$url', autor = '$autor', corpo = '$corpo' WHERE id = '$id'");
	}

	public function insertPosts($titulo, $url, $autor, $corpo) {
		$this->db->query("INSERT INTO posts SET titulo = '$titulo', url ='$url', autor ='$autor', corpo ='$corpo'");
	}

	public function getTotalPosts() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM posts");
		$row = $sql->fetch();

		return $row['c'];
	}
}
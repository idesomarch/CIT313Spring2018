<?php
class Post extends Model{

	function getPost($pID){

		$sql =  'SELECT pID, title, date, categoryID, uID, content FROM posts WHERE pID = ?';

		// perform query

		$results = $this->db->getrow($sql, array($pID));

		$post = $results;

		return $post;

	}

	public function getAllPosts($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}



		$sql =  'SELECT pID, title, date, categoryID, uID, content FROM posts'.$numposts;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

	}


	public function addPost($data){

		$sql="INSERT INTO posts (title,date,categoryID,content) VALUES (?,?,?,?)";
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;

	}

public function update($data){

	$sql="UPDATE posts SET title='?', date='?', categoryID='?', content='?' WHERE pID ='0'";
	$this->db->execute($sql,$data);
	$message = 'Post Updated.';
	return $message;
}

}

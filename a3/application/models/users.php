<?php
class Users extends Model{

	function getUser($uID){

		$sql =  'SELECT uID, email, first_name, last_name, password, user_type, active FROM posts WHERE uID = ?';

		// perform query

		$results = $this->db->getrow($sql, array($uID));

		$user = $results;

		return $user;

	}

	public function getAllUsers($limit = 0){

		if($limit > 0){

			$numusers = ' LIMIT '.$limit;
		}


		$sql =  'SELECT uID, email, first_name, last_name, password, user_type FROM users';

		 //perform query
		$results = $this->db->execute($sql);
		

		while ($row=$results->fetchrow()) {
			$users[] = $row;

		}

		return $users;

	}


	public function addUser($data){

		$sql="INSERT INTO users (email,first_name,last_name,password) VALUES (?,?,?,?)";
		$this->db->execute($sql,$data);
		$userMessage = 'User added.';
		return $userMessage;

	}


}

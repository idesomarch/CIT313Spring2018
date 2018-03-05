<?php
class Users extends Model{

	function getUsers($uID){

		$sql =  'SELECT uID, email, first_name, last_name, password, user_type, active FROM posts WHERE uID = ?';

		$results = $this->db->getrow($sql, array($uID));

		$users = $results;

		return $users;

	}

	public function getAllUsers($limit = 0){

		if($limit > 0){

			$numusers = ' LIMIT '.$limit;
		}


		$sql =  'SELECT uID, email, first_name, last_name, password, user_type, active FROM posts'.$numusers;

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

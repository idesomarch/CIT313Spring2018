<?php

class BlogController extends Controller{

	public $postObject;
	public $commentObject;

   	public function post($pID){
    $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  $this->set('post',$post);
   	}

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}


	public function addComment(){
		$this->commentObject = new Comment();
		$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date']);
		$this->commentObject->addUser($data);

		$this->userObject->addUser($data);
		$this->set('message', 'Thanks for registering!');
	}

}

?>
?>

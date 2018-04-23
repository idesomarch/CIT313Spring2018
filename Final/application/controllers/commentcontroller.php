<?php

class ManageCommentsController extends Controller{

public $commentObject;

protected $access = "1";

public function index() {

}

public function add() {
$this->commentObject = new Comment();
$this->set('task', 'save');
}

public function save() {
$this->commentObject = new Comment();
$data = array('uID'=>$_POST['uID'], 'commentText'=>$_POST['commentText'], 'date'=>$_SESSION['date']);
$result = $this->commentObject->addComment($data);

$this->set('message', $result);
}


}

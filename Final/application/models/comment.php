
<?php
class Comment extends Model{

public function getComment($pID) {
$sql = 'SELECT comments.commentText, comments.date, users.first_name as f_name, users.last_name as l_name,
INNER JOIN posts on posts.pID = comments.postID,
INNER JOIN users on users.uID = comments.uID
WHERE post.pID = ?';

$results = $this->db->getrow($sql, array($pID));

$comment = $results;

return $comment;

}

public function addComment($data){

$sql='INSERT INTO comments (uID,commentText,date) VALUES (?,?,1)
VALUES ('".$_POST["uID"]"','".$_POST["commentText"]."','".$_POST["date"]."')';
$this->db->execute($sql,$data);
$message = 'Comment Saved.';
return $message;

}


}

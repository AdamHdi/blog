<?php

namespace App\src\manager;

use App\src\model\Comment;

class CommentManager extends Manager
{
    public function getCommentsFromBillet($id)
    {
        $sql = 'SELECT id, pseudo, content, date_added FROM comment WHERE billet_id = ?';
        $result = $this->sql($sql, [$id]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        return $comments;
    }

    public function getCommentReported()
    {
    	$sql = 'SELECT id, pseudo, content, date_added, billet_id FROM comment WHERE comment_reported = 1 ORDER BY id';
    	$result = $this->sql($sql);
    	$comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildAnotherObject($row);
        }
        return $comments;
    }

    public function reportComment($id)
    {
    	$sql = 'UPDATE comment SET comment_reported = ? WHERE id = ?';
    	$this->sql($sql, [true, $id]);
    }

    public function deleteComments($id)
    {
    	$sql = 'DELETE FROM comment WHERE billet_id = ?';
    	$this->sql($sql, [$id]);
    }

    public function addComment($comment, $id)
    {
    	extract($comment);
    	$sql = 'INSERT INTO comment (pseudo, content, date_added, billet_id) VALUES (?, ?, NOW(), ?)';
    	$this->sql($sql, [$pseudo, $content, $id]);
    }

    private function buildObject(array $row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setDateAdded($row['date_added']);
        return $comment;
    }

    private function buildAnotherObject(array $row)
    {
    	$comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setDateAdded($row['date_added']);
        $comment->setBilletId($row['billet_id']);
        return $comment;
    }
}

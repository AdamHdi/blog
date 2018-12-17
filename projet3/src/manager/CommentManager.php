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

    private function buildObject(array $row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setDateAdded($row['date_added']);
        return $comment;
    }
}

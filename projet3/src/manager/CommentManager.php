<?php

namespace App\src\manager;

class Comment extends Manager
{
    public function getCommentsFromBillet($id)
    {
        $sql = 'SELECT id, pseudo, content, date_added FROM comment WHERE billet_id = ?';
        $result = $this->sql($sql, [$id]);
        return $result;
    }
}

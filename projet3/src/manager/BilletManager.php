<?php

namespace App\src\manager;

class Billet extends Manager
{
    public function getBillets()
    {
        $sql = 'SELECT id, title, content, date_added FROM billets ORDER BY id DESC';
        $result = $this->sql($sql);
        return $result;
    }

    public function getBillet($id)
    {
        $sql = 'SELECT id, title, content, date_added FROM billets WHERE id = ?';
        $result = $this->sql($sql, [$id]);
        return $result;
    }
}
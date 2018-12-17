<?php

namespace App\src\manager;

use App\src\model\Billet;

class BilletManager extends Manager
{
    public function getBillets()
    {
        $sql = 'SELECT id, title, content, date_added FROM billets ORDER BY id DESC';
        $result = $this->sql($sql);
        $billets = [];
        foreach ($result as $row) {
            $billetId = $row['id'];
            $billets[$billetId] = $this->buildObject($row);
        }
        return $billets;
    }

    public function getBillet($id)
    {
        $sql = 'SELECT id, title, content, date_added FROM billets WHERE id = ?';
        $result = $this->sql($sql, [$id]);
        $row = $result->fetch();
        if($row) {
            return $this->buildObject($row);
        } else {
            echo 'Aucun billet existant avec cet identifiant';
        }
    }

    private function buildObject(array $row)
    {
        $billet = new Billet();
        $billet->setId($row['id']);
        $billet->setTitle($row['title']);
        $billet->setContent($row['content']);
        $billet->setDateAdded($row['date_added']);
        return $billet;
    }
}

<?php

namespace App\src\manager;

use App\src\model\Billet;

class BilletManager extends Manager
{
    public function getBillets()
    {
        $sql = 'SELECT id, title, content, DATE_FORMAT(date_added, "%d/%m/%Y") AS date_added FROM billets ORDER BY id DESC';
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

    public function addBillet($billet)
    {
        //Permet de récupérer les variables $title, $content
        extract($billet);
        $sql = 'INSERT INTO billets (title, content, date_added) VALUES (?, ?, NOW())';
        $this->sql($sql, [$title, $content]);
    }

    public function deleteBillet($id)
    {
        $sql = 'DELETE FROM billets WHERE id = ?';
        $this->sql($sql, [$id]);
    }

    public function updateBillet($id, $post)
    {
        extract($post);
        $sql = 'UPDATE billets SET title = ?, content = ?, date_update = NOW() WHERE id = ?';
        $this->sql($sql, [$title, $content, $id]);
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

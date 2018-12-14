<?php

namespace App\src\controller;

use App\src\manager\BilletManager;
use App\src\manager\CommentManager;

class FrontController
{
    private $billetManager;
    private $commentManager;

    public function __construct()
    {
        $this->billetManager = new BilletManager();
        $this->commentMananger = new CommentManager();
    }

    public function home()
    {
        $billets = $this->billetManager->getBillets();
        require '../templates/home.php';
    }

    public function billet($id)
    {
        $billet = $this->billetManager->getBillet($id);
        $comments = $this->commentMananger->getCommentsFromBillet($id);
        require '../templates/single.php';
    }
}
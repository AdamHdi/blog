<?php

namespace App\src\controller;

use App\src\manager\BilletManager;
use App\src\manager\CommentManager;
use App\src\model\View;

class FrontController
{
    private $billetManager;
    private $commentManager;
    private $view;

    public function __construct()
    {
        $this->billetManager = new BilletManager();
        $this->commentManager = new CommentManager();
        $this->view = new View();
    }

    public function home()
    {
        $billets = $this->billetManager->getBillets();
        $this->view->render('home', [
            'billets' => $billets
        ]);
    }

    public function billet($id)
    {
        $billet = $this->billetManager->getBillet($id);
        $comments = $this->commentManager->getCommentsFromBillet($id);
        $this->view->render('single', [
            'billet' => $billet,
            'comments' => $comments
        ]);
    }
}
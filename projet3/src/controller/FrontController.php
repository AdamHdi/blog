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

    public function billet($id, $comment)
    {
        $billet = $this->billetManager->getBillet($id);
        if(isset($comment['submit'])) {
            $comments = $this->commentManager->addComment($comment, $id);
        }
        $comments = $this->commentManager->getCommentsFromBillet($id);
        $this->view->render('single', [
            'billet' => $billet,
            'comments' => $comments
        ]);
    }

    public function reportComment($id)
    {
        $this->commentManager->reportComment($id);
        //ajouter session pour confirmation
    }
}
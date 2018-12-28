<?php

namespace App\src\controller;

use App\src\manager\BilletManager;
use App\src\manager\CommentManager;
use App\src\model\View;

class BackController
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

    public function admin()
    {
    	$billets = $this->billetManager->getBillets();
        $this->view->render('admin', [
            'billets' => $billets
        ]);
    }

    public function addBillet($post)
    {
        if(isset($post['submit'])) {
            $this->billetManager->addBillet($post);
            session_start();
            $_SESSION['add_billet'] = 'Le nouveau billet a bien été ajouté';
            header('Location: ../public/index.php');
        }
        $this->view->render('add_billet', [
            'post' => $post
        ]);
    }

    public function deleteBillet($id)
    {
        $this->billetManager->deleteBillet($id);
        $this->commentManager->deleteComments($id);
        session_start();
        $_SESSION['delete_billet'] = 'Le billet a bien été supprimé';
        header('Location: ../public/index.php');
    }

    public function updateBillet($id, $post)
    {
    	$billet = $this->billetManager->getBillet($id);
    	if(isset($post['modifier'])) {
            $this->billetManager->updateBillet($id, $post);
            session_start();
            $_SESSION['update_billet'] = 'Le billet a bien été modifié';
            header('Location: ../public/index.php');
        }
        $this->view->render('update_billet', [
            'billet' => $billet
        ]);
    }
}
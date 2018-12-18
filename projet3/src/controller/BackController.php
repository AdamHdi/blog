<?php

namespace App\src\controller;

use App\src\manager\BilletManager;
use App\src\model\View;

class BackController
{
	private $billetManager;
	private $view;

	public function __construct()
    {
        $this->billetManager = new BilletManager();
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
}
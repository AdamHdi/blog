<?php

namespace App\src\controller;

use App\src\manager\BilletManager;
use App\src\manager\CommentManager;
use App\src\manager\UserManager;
use App\src\model\View;

class BackController
{
	private $billetManager;
	private $commentManager;
	private $userManager;
	private $view;

	public function __construct()
    {
        $this->billetManager = new BilletManager();
        $this->commentManager = new CommentManager();
        $this->userManager = new UserManager();
        $this->view = new View();
    }

    public function formulaireConnexion()
    {
    	if (isset($_COOKIE['password']) && isset($_COOKIE['email'])) {
    		$this->admin();
    	}
    	else {
    		$this->view->render('connexion');
    	}
    }

    public function connexion($post)
    {
    	extract($post);
    	$user = $this->userManager->getUserInfos();
    	$data = $user->fetch();
        if ((isset($password) && $password == $data['password']) && (isset($email) && $email == $data['email'])) {
        	setcookie('password', $password, time() + 365*24*3600, null, null, false, true);
        	setcookie('email', $email, time() + 365*24*3600, null, null, false, true);
            return $this->admin();
        }
        else
        {
            session_start();
            $_SESSION['message'] = 'Email ou mot de passe incorect';
            header('Location: ../public/index.php?route=admin');
        }
    }

    public function deconnexion()
    {
    	session_destroy();
    	setcookie('password', '', 1);
        setcookie('email', '', 1);
        unset($_COOKIE['password']);
        unset($_COOKIE['email']);
    }

    public function admin()
    {
    	$billets = $this->billetManager->getLastBillets();
        $this->view->render('admin', [
            'billets' => $billets
        ]);
    }

    public function getBillets()
    {
    	$billets = $this->billetManager->getBillets();
        $this->view->render('liste', [
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

    public function getCommentReported()
    {
    	$comment_reported = $this->commentManager->getCommentReported();
    	$this->view->render('comment_reported', [
            'comment_reported' => $comment_reported
        ]);
    }

    public function deleteReportedComment($id)
    {
    	$this->commentManager->deleteReportedComment($id);
    	$_SESSION['delete_comment'] = 'Le commentaire a bien été supprimé';
    	header('Location: ../public/index.php?route=admin&action=report');
    }

    public function ignoreReportedComment($id)
    {
    	$this->commentManager->ignoreReportedComment($id);
    	$_SESSION['ignore_comment'] = 'Le commentaire a bien été ignoré';
    	header('Location: ../public/index.php?route=admin&action=report');
    }
}
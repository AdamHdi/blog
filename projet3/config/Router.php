<?php

namespace App\config;
use App\src\controller\ErrorController;
use App\src\controller\FrontController;
use App\src\controller\BackController;

class Router
{
    private $frontController;
    private $errorController;
    private $backController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
        $this->backController = new BackController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'billet'){
                    $this->frontController->billet($_GET['id'], $_POST);
                    if (isset($_GET['action']) && $_GET['action'] === 'report') {
                        $this->frontController->reportComment($_GET['comment']);
                    }
                }
                elseif ($_GET['route'] === 'admin') {
                    if (isset($_GET['action']) && $_GET['action'] === 'ajout') {
                        $this->backController->addBillet($_POST);
                    }
                    elseif (isset($_GET['action']) && $_GET['action'] === 'report') {
                        $this->backController->getCommentReported();
                        if (isset($_GET['supprimer'])) {
                            $this->backController->deleteReportedComment($_GET['supprimer']);
                        }
                        elseif (isset($_GET['ignore'])) {
                            $this->backController->ignoreReportedComment($_GET['ignore']);
                        }
                    }
                    elseif (isset($_GET['action']) && $_GET['action'] === 'liste') {
                        $this->backController->getBillets();
                    }
                    elseif (isset($_GET['supprimer'])) {
                        $this->backController->deleteBillet($_GET['supprimer']);
                    }
                    elseif (isset($_GET['modifier'])) {
                        $this->backController->updateBillet($_GET['modifier'], $_POST);
                    }
                    elseif (isset($_GET['action']) && $_GET['action'] === 'connexion') {
                        $this->backController->connexion($_POST);
                    }
                    elseif (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
                        $this->backController->deconnexion();
                    }
                    else {
                        $this->backController->formulaireConnexion();
                    }
                }
                else {
                    $this->errorController->unknown();
                }
            }
            else {
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->error();
        }
    }
}

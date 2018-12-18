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
                    $this->frontController->billet($_GET['id']);
                }
                elseif ($_GET['route'] === 'admin') {
                    if (isset($_GET['action']) && $_GET['action'] === 'ajout') {
                        $this->backController->addBillet($_POST);
                    }
                    else {
                    $this->backController->admin();
                    }
                }
                else{
                    $this->errorController->unknown();
                }
            }
            else{
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->error();
        }
    }
}

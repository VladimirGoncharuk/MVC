<?php
namespace App\controllers;
use App\core\Controller;
class Home extends Controller
{
    public function index(){
        $this->view->render('home.php','template.phtml');
    }
    public function airmodals(){
        $this->view->render('airmodals.php','template.phtml'); 
    }   
    public function news(){
    $this->view->render('news.php','template.phtml');
    }
    public function specialaviation(){
    $this->view->render('specialAviation.php','template.phtml');
    }
    public function contacts(){
    $this->view->render('contacts.php','template.phtml');
    }
}
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PlayersController
 *
 * @author vladp
 */
class HomeController extends Controller
{
    private $pageTpl = "../views/home.page.tpl.php";
    
    public function __construct()
    {
        $this->model = new HomeModel();
        $this->view = new View();
        
    }
    public function index()
    {
        $this->pageData['title'] = "Players List";
        $this->pageData['playersList'] = $this->model->getPlayersList();
        
        $this->pageData['title'] = "Players List";
        $this->pageData['gamesList'] = $this->model->getGamesList();
        
        $this->pageData['title'] = "Players List";
        $this->pageData['statisticList'] = $this->model->getStatisticList();
        
        
        $this->view->render($this->pageTpl, $this->pageData); //page render
        
    }
    
    
}

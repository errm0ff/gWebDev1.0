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
class StatisticController extends Controller
{
    private $pageTpl = "../views/create.statistic.tpl.php";
    
    public function __construct()
    {
        $this->model = new StatisticModel();
        $this->view = new View();
        
    }
    public function index()
    {
        $this->pageData['title'] = "Player statistic";
        
        $this->pageData['gamesList'] = $this->model->getGamesList();
        $this->pageData['playersList'] = $this->model->getPlayersList();
        
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add new player
            $player_id = $_POST['player_id'];
            $game_id = $_POST['game_id'];
            $statisticinfo = $this->model->addStatistic($player_id, $game_id);
            $this->pageData['statisticinfo'] = $statisticinfo;
             header("Location: ./home");
           
        }
        $this->view->render($this->pageTpl, $this->pageData); //page render
       
    }
    
}

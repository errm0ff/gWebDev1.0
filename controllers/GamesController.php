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
class GamesController extends Controller
{
    private $pageTpl = "../views/create.game.tpl.php";
    
    public function __construct()
    {
        $this->model = new GamesModel();
        $this->view = new View();
        
    }
    public function index()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add new player
            $game_startdate = $_POST['game_startdate'];
            $game_winner = NULL;
            $game_status = $_POST['game_status'];
            $game_min_players = $_POST['game_min_players'];
            $game_max_players = $_POST['game_max_players'];
            $game_title = $_POST['game_title'];
            $gamesinfo = $this->model->addGame($game_startdate,$game_winner,$game_status,$game_min_players, $game_max_players, $game_title);
            $this->pageData['gamesinfo'] = $gamesinfo;
             header("Location: ./home");
        }
        $this->view->render($this->pageTpl, $this->pageData); //page render
    }
    
}

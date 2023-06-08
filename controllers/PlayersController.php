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
class PlayersController extends Controller
{
    private $pageTpl = "../views/create.player.tpl.php";
    
    public function __construct()
    {
        $this->model = new PlayersModel();
        $this->view = new View();
        
    }
    public function index()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add new player
            $player_nickname = $_POST['player_nickname'];
            $player_email = $_POST['player_email'];
            $playersinfo = $this->model->addPlayer($player_nickname, $player_email);
            $this->pageData['playersinfo'] = $playersinfo;
             header("Location: ./home");
           
        }
        $this->view->render($this->pageTpl, $this->pageData); //page render
        
    }
    
}

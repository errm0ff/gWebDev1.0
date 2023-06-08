<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PlayersModel
 *
 * @author vladp
 */
class GamesModel extends Model
{

    public function getGamesList() 
    {
     $sqlquery = "SELECT * FROM `game_information`";
      $stmt = $this->db->prepare($sqlquery);
        $stmt->execute();
        $results = array();
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $results[$row['game_id']] = $row;
        }
        return $results;
    }
     public function addGame($game_startdate,$game_winner,$game_status,$game_min_players, $game_max_players, $game_title)
    {
        $stmt = $this->db->prepare("INSERT INTO game_information (game_startdate,game_winner,game_status,game_min_players, game_max_players, game_title) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$game_startdate,$game_winner,$game_status,$game_min_players, $game_max_players, $game_title]);
    }
    
}

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
class StatisticModel extends Model
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
    public function getPlayersList() 
    {
     $sqlquery = "SELECT * FROM `player_information`";
      $stmt = $this->db->prepare($sqlquery);
        $stmt->execute();
        $results = array();
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $results[$row['player_id']] = $row;
        }
        return $results;
    }
     public function addStatistic($player_id,$game_id)
    {
        $stmt = $this->db->prepare("INSERT INTO player_statistic (player_id, game_id) VALUES (?, ?)");
        $stmt->execute([$player_id,$game_id]);
    }
    
}

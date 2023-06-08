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
class PlayersModel extends Model
{

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
     public function addPlayer($player_email, $player_nickname)
    {
        $stmt = $this->db->prepare("INSERT INTO player_information (player_email, player_nickname) VALUES (?, ?)");
        $stmt->execute([$player_email, $player_nickname]);
    }
    
}

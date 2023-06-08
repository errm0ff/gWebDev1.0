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
class HomeModel extends Model
{

    public function getPlayersList() 
    {
     $sqlquery = "SELECT * FROM `player_information` ORDER BY `player_information`.`player_id` ASC";
      $stmt = $this->db->prepare($sqlquery);
        $stmt->execute();
        $results = array();
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $results[$row['player_id']] = $row;
        }
        return $results;
    }
    public function getGamesList() 
    {
     $sqlquery = "SELECT * FROM `game_information` ORDER BY `game_information`.`game_startdate` ASC";
      $stmt = $this->db->prepare($sqlquery);
        $stmt->execute();
        $results = array();
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $results[$row['game_id']] = $row;
        }
        return $results;
    }
    public function getStatisticList() 
    {
     $sqlquery = "SELECT 
			`player_statistic`.`id` as sid,
            `player_statistic`.`player_id` as psid,
            `player_statistic`.`game_id` as gsid,
            `player_information`.`player_nickname` as nickname,
            `player_information`.`player_id` as pid,
            `game_information`.`game_id` as gid,
            `game_information`.`game_title`  as title
            
           FROM  `player_statistic`
           LEFT JOIN `player_information` ON `player_information`.`player_id` = `player_statistic`.`player_id`
           LEFT JOIN `game_information` ON`game_information`.`game_id` = `player_statistic`.`game_id`
           ORDER BY  `game_information`.`game_title` ASC ;
        ";
      $stmt = $this->db->prepare($sqlquery);
        $stmt->execute();
        $results = array();
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $results[$row['sid']] = $row;
        }
        return $results;
    }
    
}

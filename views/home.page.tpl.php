<?php
$con = new mysqli("localhost", "root", "", "wf3_php_final_meryem1");
if (isset($_POST['player_id'])) {
    $id = $_POST['player_id'];

    $query1 = "DELETE FROM `player_information` WHERE `player_information`.`player_id`='$id'";
    $res = mysqli_query($con, $query1);
    header("Location: ./home");
}
if (isset($_POST['game_id'])) {
    $gid = $_POST['game_id'];

    $query1 = "DELETE FROM `game_information` WHERE `game_information`.`game_id`='$gid'";
    $res = mysqli_query($con, $query1);
    header("Location: ./home");
}
if (isset($_POST['sid'])) {
    $sid = $_POST['sid'];

    $query1 = "DELETE FROM `player_statistic` WHERE `player_statistic`.`id`='$sid'";
    $res = mysqli_query($con, $query1);
    header("Location: ./home");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <link rel="stylesheet" href="../views/assets/css/style.css">

    <title>
        <?php
        echo $pageData['title'];
        ?>
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?ctrl=home&method=hello">My Scoreboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link" href="./players">AJOUTER UN JEU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./games">AJOUTER UN JOUEUR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./statistic">AJOUTER UN MATCH</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
<div>
    <!-- Mon contenu ira se greffer ici -->
<div class="container">
    <br>
  <h3>Players information</h3>
  <br>
  
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Player id</th>
        <th>Player Email</th>
        <th>Player Nickname</th>
        <th>action</th>
        <th>action</th>
      </tr>
      <?php
            foreach ($pageData['playersList'] as $key => $value) {


            echo '
      <tr>
        <form method="post">
        <td contenteditable="false">'.$value['player_id'].'</td>
        <td contenteditable="false">'.$value['player_nickname'].'</td>
        <td contenteditable="false">'.$value['player_email'].'</td>
        <input type="hidden" name="player_id" id="player_id" class="form-control" value = '.$value['player_id'].'/>    
        <td contenteditable=«false»><input type="submit" class="btn btn-primary" name="playeriddel" value="delete"></td>
        <td contenteditable=«false»><input type="submit" class="btn btn-primary" name="edititem" value="edit"><a href = "edit.game.tpl.php"></td>
        </form>
            </tr>'; }
            ?>
      <!-- This is our clonable table line -->
      
    </table>
  </div>
  <br>
   
    <h3>Available Games </h3>
  <br>
  
   <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Game Id</th>
        <th>Title</th>
        <th>Start date</th>
        <th>Winner</th>
        <th>Max players</th>
        <th>Min players</th>
        <th>Game status</th>
        <th>action</th>
        <th>action</th>
      </tr>
      <?php
            foreach ($pageData['gamesList'] as $key => $value) {


            echo '
      <tr>
       <form method="post">
        <td contenteditable="false">'.$value['game_id'].'</td>
        <td contenteditable="false">'.$value['game_title'].'</td>
        <td contenteditable="false">'.$value['game_startdate'].'</td>
        <td contenteditable="false">'.$value['game_winner'].'</td>
        <td contenteditable="false">'.$value['game_max_players'].'</td>
        <td contenteditable="false">'.$value['game_min_players'].'</td>
        <td contenteditable="false">'.$value['game_status'].'</td>
        <input type="hidden" name="game_id" id="game_id" class="form-control" value ='.$value['game_id'].'/>    
        <td contenteditable=«false»><input type="submit" class="btn btn-primary" name="gamedel" value="delete"></td>
        <td contenteditable=«false»><input type="submit" class="btn btn-primary" name="create" value="edit"></td>
       </form>
       
            </tr>'; }
            ?>
      <!-- This is our clonable table line -->
      
    </table>
  </div>
   <br> 
     <h3>Games results</h3>
  <br>
  
<div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>Statistic id</th>
        <th>Game title</th>
        <th>Player Nickname</th>
        <th>action</th>
      </tr>
      <?php
            foreach ($pageData['statisticList'] as $key => $value) {


            echo '
      <tr>
      <form method="post">
        <td contenteditable="false">'.$value['sid'].'</td>
        <td contenteditable="false">'.$value['title'].'</td>
        <td contenteditable="false">'.$value['nickname'].'</td>
       <input type="hidden" name="sid" id="sid" class="form-control" value ='.$value['sid'].'/>    
        <td contenteditable=«false»><input type="submit" class="btn btn-primary" name="gamedel" value="delete"></td>
        <td contenteditable=«false»><input type="submit" class="btn btn-primary" name="create" value="edit"></td>
       </form>
       
            </tr>'; }
            ?>
      <!-- This is our clonable table line -->
      
    </table>
  </div>
  
  <br>
   
    
    
    
    
</div>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
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
    <div class="container">
<h1>Create Game</h1>
<div class="card">
    <div class="card-body">
        <form method="post">
            <div class="form-group mb-3">
                <label for="title">Player nickname</label>
                <select name="player_id">
                    <option value = ""></option>
                    <?php
                    foreach ($pageData['playersList'] as $key => $value) {


                        echo '
                <option value=' . $value['player_id'] . '>' . $value['player_nickname'] . '</option>
                                        ';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="title">Player nickname</label>
                <select name="game_id">
                    <option value = ""></option>
                    <?php
                    foreach ($pageData['gamesList'] as $key => $value) {


                        echo '
                <option value=' . $value['game_id'] . '>' . $value['game_title'] . '</option>
                                        ';
                    }
                    ?>
                </select>
            </div>


			<input type="submit" class="btn btn-primary" name="create" value="Create">
			<!-- <a href="index.php?ctrl=game&method=list" class="btn btn-light">Back</a> -->
		</form>
	</div>
</div>
    </div>

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
                    <a class="nav-link" href="index.php?ctrl=game&method=create">AJOUTER UN JEU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctrl=player&method=create">AJOUTER UN JOUEUR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?ctrl=contest&method=create">AJOUTER UN MATCH</a>
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
				<label for="title">Game title</label>
				<input type="text" name="game_title" id="game_title" class="form-control" />
			</div>
                        <div class="form-group mb-3">
				<label for="title">Game status</label>
				<input type="text" name="game_status" id="game_status" class="form-control" />
			</div>
                       
                        <div class="form-group mb-3">
				<label for="title">Game start date</label>
				<input type="text" name="game_startdate" id="game_startdate" class="form-control" />
			</div>
			<div class="form-group mb-3">
				<label for="max">Nombre de joueur maximum</label>
				<input type="number" name="game_max_players" id="game_max_players" class="form-control" />
			</div>
			<div class="form-group mb-3">
				<label for="max">Nombre de joueur minimum</label>
				<input type="number" name="game_min_players" id="game_min_players" class="form-control" />
			</div>

			<input type="submit" class="btn btn-primary" name="create" value="Create">
			<!-- <a href="index.php?ctrl=game&method=list" class="btn btn-light">Back</a> -->
		</form>
	</div>
</div>
    </div>

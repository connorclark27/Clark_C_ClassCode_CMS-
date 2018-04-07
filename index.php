<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getMovies = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Movie Database | Home</title>
	<link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>
<body>
<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">MOVIE</span><span class="heavy">DATABASE</span></span></h1>
<p class="welcomeText">Welcome to the movie database admin panel! <br> Simply use the Log In button below if you have administrative privileges in order to add, remove, or edit a video. <br> You will also be able to create new users, edit existing users, and remove users from your admin panel. </p>
<div class="logInBut"><a href="admin/admin_login.php" class="button">LOG IN</a><div>

<div class="moviesHomePage grid-x">
	<?php

		if(!is_string($getMovies)){
			while($row = mysqli_fetch_array($getMovies)){
				
				echo "<div class=\"small-6 medium-4 large-3 movieSelection cell\"> 
					<a href=\"details.php?id={$row['movies_id']}\"><img src=\"images/{$row['movies_cover']}\" class=\"movieImg\" alt=\"{$row['movies_title']}\"></a>
					<h2 class=\"movieTitle\">{$row['movies_title']}</h2>
					<p class=\"movieYear\">{$row['movies_year']}</p>
					<a href=\"details.php?id={$row['movies_id']}\" class=\"movieDetails\">More Details</a>
					<br><br></div>";
			}
		}else{
			echo "<p class=\"error\">{$getMovies}</p>";
		}

	?>
</div>
</body>
</html>
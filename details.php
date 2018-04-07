<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movies_id";
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html class="detailsBody">
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>Movie Details</title>
</head>
<body class="detailsBody">
	<?php
		if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
			echo "<img src=\"images/{$row['movies_cover']}\" class=\"movieImgDet\" alt=\"{$row['movies_title']}\">
				<h2 class=\"movieTitle\">{$row['movies_title']}</h2>
				<p class=\"movieYear\">{$row['movies_year']}</p>
				<p class=\"movieYear\">{$row['movies_storyline']}</p>
				<a href=\"index.php\" class=\"backButton\">Back To Home</a>";
		}else{
			echo "<p class=\"error\">{$getSingle}</p>";
		}
	?>
</body>
</html>
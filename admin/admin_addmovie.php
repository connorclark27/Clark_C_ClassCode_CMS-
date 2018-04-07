<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$tbl="tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$cover = $_FILES['cover'];
		$year = $_POST['year'];
		$runtime = $_POST['runtime'];
		$storyline = $_POST['storyline'];
		$trailer = $_POST['trailer'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];
		$uploadMovie = addMovie($title, $cover, $year, $runtime, $storyline, $trailer, $release, $genre);
		$message = $uploadMovie;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<title>Admin | Add Movie</title>
</head>
<body>
	<h1 class="mainTitleCont"><span class="mainTitle"><span class="light">ADD</span><span class="heavy">MOVIE</span></span></h1>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data">
		<label class="labelCenter">Movie Title:</label>
		<input class="inputField" name="title" type="text" value=""><br><br>
		<label class="labelCenter">Movie Cover Image:</label>
		<input class="inputField" name="cover" type="file" value=""><br><br>
		<label class="labelCenter">Movie Year:</label>
		<input class="inputField"name="year" type="text" value=""><br><br>
		<label class="labelCenter">Movie Runtime</label>
		<input class="inputField" name="runtime" type="text" value=""><br><br>
		<label class="labelCenter">Movie Storyline</label>
		<input class="inputField" name="storyline" type="text" value=""><br><br>
		<label class="labelCenter">Movie Trailer</label>
		<input class="inputField" name="trailer" type="text" value=""><br><br>
		<label class="labelCenter">Movie Release</label>
		<input class="inputField" name="release" type="text" value=""><br><br>
		<select class="inputField" name="genList">
			<option class="inputField" value="">Please select a genre</option> 
			<?php 
				while($row = mysqli_fetch_array($genQuery)){
					echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
				} 
			?>
		</select><br><br><br>
		<input type="submit" name="submit" value="Add Movie">
	</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>	
	<div id="menu">
		<nav>
			<input type="checkbox" id="show-menu" role="button">
			<label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
			<label for="show-menu" class="close"><span class="fa fa-times"></span></label>
			<ul id="topnav">
				<li><a href="/home">Home</a></li>
				<li><a href="#">Recent</a></li>
				<li><a href="#">Random</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</div>

	<div id="container">
		
		<?php
		if (isset($_GET["story"])) {
			$base = "stories";
			$story = $_GET["story"];
			$news = "stories/$story.html";
			if (realpath($news) === false || strncmp($news, $base, strlen($base)) !== 0) {
				echo "Missing file or not in the expected location $news $base";
			} else {
				$story = str_replace("-", " ", ucfirst($story));
				echo "<div id='pageheader'>";
				echo "<h1>$story.</h1>";
				echo "</div>";
				include $news;
			}
		} else {
			echo "Missing file or not in the expected location";
		}
		?>
	</div>
</body>
</html>

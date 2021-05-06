<?php
include("config.php");

	if(isset($_GET["term"])) {
		$term = $_GET["term"];
	}
	else {
		exit("You must enter a search term");
	}

	$type = isset($_GET["type"]) ? $_GET["type"] : "sites";


	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Doodle</title>

	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

</head>
<body>

	<div class="wrapper">
	
		<div class="header">


			<div class="headerContent">

				<div class="logoContainer">
					<a href="index.php">
						<img src="assets/images/SearchThisLogo.png">
					</a>
				</div>

				<div class="searchContainer">

					<form action="search.php" method="GET">

						<div class="searchBarContainer">

							<input class="searchBox" type="text" name="term">
							<button class="searchButton">
								<img src="assets/images/icons/glass.png">
							</button>
						</div>

					</form>

				</div>

			</div>


			<div class="tabsContainer">

				<ul class="tabList">

					<li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
							Sites
						</a>
					</li>

					<li class="<?php echo $type == 'images' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=images"; ?>'>
							Images
						</a>
					</li>

					<li class="<?php echo $type == 'videos' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=videos"; ?>'>
							Videos
						</a>
					</li>

					<li class="<?php echo $type == 'news' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=news"; ?>'>
							News
						</a>
					</li>

					<li class="<?php echo $type == 'maps' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=maps"; ?>'>
							Maps
						</a>
					</li>

					<li class="<?php echo $type == 'music' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=music"; ?>'>
							Music
						</a>
					</li>

				</ul>


			</div>



		</div>
	</div>

</body>
</html>

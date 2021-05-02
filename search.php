<?php

	if(isset($_GET["term"])) {
		$term = $_GET["term"];
	}
	else {
		exit("You must enter a search term");
	}


	
?>
<!DOCTYPE html>
<html>
<head>
	<title>SearchThis | Minimal SE</title>

	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="icon" href="assets/images/icons/search.png">

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

					<li>
						<a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
							Sites
						</a>
					</li>

					<li>
						<a href='<?php echo "search.php?term=$term&type=images"; ?>'>
							Images
						</a>
					</li>

				</ul>


			</div>



		</div>
	</div>

</body>
</html>

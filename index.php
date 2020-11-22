<?php
	include "includes/functions.php";
?>
<!doctype html>
<html lang="en">
<head>
	<title>Cloud Development Tutorials</title>
	<link rel="stylesheet" media="screen" href="styles/main.css">
	<link rel="stylesheet" media="print" href="styles/print.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="heading">
		<?php
			// The standard page header
			include "includes/header.php";
		?>
	</div>
	
		<?php
			
			// The standard nav section
			include "includes/nav.php";
		?>
		
	<div id="wrapper">
		<?php
			// Get the relevant page content based on the get "page" var
			get_content();
		?>
	</div>
	
		<?php
			// The standard page footer
			include "includes/footer.php";
		?>
	
</body>
</html>


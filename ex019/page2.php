<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 019 - The GET Array</title>
	<meta charset="utf-8">

</head>
<body>

<h1>The $_GET associative arrays</h1>

<p>Files to edit /ex019/page2.php</p>


<!-- **********************************************************************************
*                                    Exercise 019a                                    *
*********************************************************************************** -->
<h2>019a Reading $_GET variables</h2>

<?php
/* GET variable are placed in the URL and are accessed using the $_GET associative
array. We often call these "get variables" but the correct name is elements in the GET
associative array. We can read the values in the same way we read any other associative
array and we can use the isset() function to check if a variable is set in the array
*/
if (isset($_GET['pagenumber'])) {
	echo "<p>The pagenumber is set to " . $_GET['pagenumber'] . "</p>\n";
} else {
	echo "<p>The pagenumber is not set</p>\n";
}

if (isset($_GET['fruit'])) {
	echo "<p>The fruit is set to " . $_GET['fruit'] . "</p>\n";
} else {
	echo "<p>The fruit is not set</p>\n";
}

if (isset($_GET['season'])) {
	echo "<p>The season is set to " . $_GET['season'] . "</p>\n";
} else {
	echo "<p>The season is not set</p>\n";
}
?>


<!-- **********************************************************************************
*                                    Exercise 019b                                    *
*********************************************************************************** -->
<h2>019b Selecting a category</h2>

<?php
/* You have 10 categories in your online shop. Write code to check that a category (cat)
is set in the url and that it is less than or equal to 10.
If the cat is not set echo
	"No category selected"
If the category is set and less than or equal to 10 echo 
	"You have selected category (followed by the value of cat)"
If the category is greater than 10 echo
	"That category does not exist"
*/

// write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 019c                                    *
*********************************************************************************** -->
<h2>019c Including a category</h2>

<?php
/* Write code to include the appropriate file based on the "shopcat" variable in
the url. For instance if the value of shopcat is 7 you should include
	includes/category7.php
If no category is set or the category is greater than 10 include the file
	includes/category1.php
*/

// write your code here

?>


</body>
</html>
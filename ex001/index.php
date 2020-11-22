<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 001 - Echo Statements</title>
	<meta charset="utf-8">

</head>
<body>

<h1>Echo Statements</h1>

<p>Files to edit /ex001/index.php</p>

<!-- **********************************************************************************
*                                    Exercise 001a                                    *
*********************************************************************************** -->
<h2>001a Standard echo Statement</h2>

<?php
/* Use an echo statement to echo out the text
	My name is Fred
to the browser. Don't forget the quotes and the semicolon */

// Write your code here

?>

<!-- **********************************************************************************
*                                    Exercise 001b                                    *
*********************************************************************************** -->
<h2>001b Echoing quote marks</h2>

<?php
/* Use an echo statement to echo out the text
	<blockquote>"To be, or not to be, that is the question"</blockquote>
to the browser. Don't forget to escape the quotes using the backslash (\)
character */

// Write your code here

?>

<!-- **********************************************************************************
*                                    Exercise 001c                                    *
*********************************************************************************** -->
<h2>001c Escaping characters</h2>

<?php
/* Use an echo statement to echo out the text
	<p class="highlight">Tom said "That will cost $30."</p>
to the browser. NOTE: There are two sets of quotes and a dollar sign to escape */

// Write your code here

?>

<!-- **********************************************************************************
*                                    Exercise 001d                                    *
*********************************************************************************** -->
<h2>001d Code on new lines</h2>

<?php
/* Look at the HTML source code for this section in the browser. You will see
all the lines run together. Place a new line character (\n) at the end of each line 
just before the closing quote and check the code in the browser again. 
What has changed? */

echo "<p>This is line 1</p>";
echo "<p>This is line 2</p>";
echo "<p>This is line 3</p>";
?>

</body>
</html>
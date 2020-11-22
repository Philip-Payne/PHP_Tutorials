<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 004 - Indexed Arrays</title>
	<meta charset="utf-8">

</head>
<body>

<h1>Indexed Arrays</h1>

<p>Files to edit /ex004/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 004a                                    *
*********************************************************************************** -->
<h2>004a Echoing array elements</h2>

<?php
/* Write a line of code to output a paragraph of text that says
	Tom and Jane came to class but Susan and Mary did not.
NOTE: You must use the concatenation operator with arrays.
Don't forget the paragraph tags and the new line character. */

$students[0] = "Tom";
$students[1] = "Jane";
$students[2] = "Susan";
$students[3] = "Mary";

// Write your code here...

?>


<!-- **********************************************************************************
*                                    Exercise 004b                                    *
*********************************************************************************** -->
<h2>004b Sorting Arrays</h2>

<?php

sort ($students);

// Copy and paste your answer to exercise  004a here


/* Check your work in a browser. What is the difference in output between 004a and 004b?
What do you think the "sort" function does to the array? 
(HINT: The answer is in the name!) */

// Write a comment here to explain what the operation the sort function performs.

?>


<!-- **********************************************************************************
*                                    Exercise 004c                                    *
*********************************************************************************** -->
<h2>004c Shuffling Arrays</h2>

<?php

shuffle ($students);

// Copy and paste your answer to exercise  004a here


/* Check your work in a browser. Refresh the browser several times. What is the 
difference in output between 004a and 004c? What do you think the "shuffle" function does 
to the array? (HINT: The answer is in the name!) */

// Write a comment here to explain what the operation the shuffle function performs.
// Add a link to the php.net manual page for the shuffle function.
?>


</body>
</html>
<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 006 - For Loops</title>
	<meta charset="utf-8">

</head>
<body>

<h1>For Loops</h1>

<p>Files to edit /ex006/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 006a                                    *
*********************************************************************************** -->
<h2>006a Basic For Loop</h2>

<?php
/* Write a for loop to echo out five lines as follows...
	<p>This is loop 0</p>
	<p>This is loop 1</p>
	<p>This is loop 2</p>
	<p>This is loop 3</p>
	<p>This is loop 4</p>
You are provided with some code as a hint. All you need to do is add the code 
indicated within the brackets ()
*/

/************* Hint Code **************
for (Place your code here) {
	echo "<p>This is loop $i</p>\n";
}
***************************************/

?>


<!-- **********************************************************************************
*                                    Exercise 006b                                    *
*********************************************************************************** -->
<h2>006b Thunderbirds are go! - Counting Down</h2>

<?php
/* We want to echo out the following...

	<p>5, 4, 3, 2, 1, Thunderbirds are go!</p>
	
Write a for loop to echo out 5, 4, 3, 2, 1,
The rest of the code is provided for you.
Note how the code is organised.
HINT use -- to count down like we used ++ to count up
(We are decrementing rather than incrementing)
*/

echo "<p>";

// Write your code here...



echo "Thunderbirds are go!</p>\n";
?>


<!-- **********************************************************************************
*                                    Exercise 006c                                    *
*********************************************************************************** -->
<h2>006c Loops within loops 1</h2>

<?php
/* We want to make a multiplication list that goes from...
	1 x 1 = 1
to...
	5 x 5 = 25
Uncomment the code below and check the result in the browser.
What is wrong? Make the changes necessary to get the correct result
*/

/*** Uncomment this code
// The outer loop
for ($i = 1; $i < 5; $i++) {
	// The inner loop
	for ($j = 1; $j < 5; $j++) {
		echo "<p>$i x $j = " . $i*$j . "</p>\n";
	}
}
*/ // Remove this closing comment too
?>


<!-- **********************************************************************************
*                                    Exercise 006d                                    *
*********************************************************************************** -->
<h2>006d Loops within loops 2</h2>

<?php
/* The output above would be better displayed in a table.
Add the code indicated below to make a 5 x 5 multiplication table
NOTE: You will need to make changes to the loop conditions as you did above
to get the correct range (5 x 5).
NOTE2 The output will not look particularly well styled in the browser 
but we can fix that in the next exercise
*/
// Echo out an opening <table> tag here

// The outer loop
for ($i = 1; $i < 5; $i++) {
	// Echo out an opening <tr> tag here
	
	// The inner loop
	for ($j = 1; $j < 5; $j++) {
		// Echo out an opening <td> tag here
		
		echo $i*$j;
		// Echo out an closing </td> tag here
		
	}
	// Echo out an closing </tr> tag here
	
}
// Echo out an closing </table> tag here

?>


<!-- **********************************************************************************
*                                    Exercise 006e                                    *
*********************************************************************************** -->
<h2>006e Loops within loops 3</h2>

<?php
/* Using the code above create a 12 x 12 multiplication table
Use inline styling to give the table a border 1px wide solid and black
Use inline styling on the td elements to fix the width of the cells (try 30px)
and right align the text. Give the cells a 1px border in a red.
*/

//Write your code here...


?>

</body>
</html>
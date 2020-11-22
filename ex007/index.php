<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 007 - While Loops</title>
	<meta charset="utf-8">

</head>
<body>

<h1>While Loops</h1>

<p>Files to edit /ex007/index.php</p>

<!-- **********************************************************************************
*                                    Exercise 007a                                    *
*********************************************************************************** -->
<h2>007a Basic While Loop</h2>

<?php
/* Write a while loop to echo out five lines as follows...
	<p>This is loop 0</p>
	<p>This is loop 1</p>
	<p>This is loop 2</p>
	<p>This is loop 3</p>
	<p>This is loop 4</p>
You are provided with some code as a hint. All you need to do is add the code 
indicated within the brackets () and in the loop
*/

/************* Hint Code **************
$i = 0;
while (place your code for the condition here) {
	echo "<p>This is loop $i</p>\n";
	// Add 1 to $i here
	
}
***************************************/

// Write your code here...

?>


<!-- **********************************************************************************
*                                    Exercise 007b                                    *
*********************************************************************************** -->
<h2>007b Rewrite a for loop as a while loop</h2>

<?php
/* You hopefully noticed that the last exercise was very similar 
to Exercise 006a. You can always rewrite a for loop as a while loop.
Rewrite the following for loop as a while loop


for ($i = 10; $i > 0; $i--) {
	echo "<p>$i green bottles, standing on a wall,<br>\n";
	echo "$i green bottles, standing on a wall,<br>\n";
	echo "And if one green bottle should accidently fall,<br>\n";
	echo "There'd be " . ($i-1) . " green bottles standing on a wall.</p>\n\n";
}

*/

// Write your code here

?>

<!--	That's it for while loops - we will see a lot more of them in 
		later exercises													-->

</body>
</html>
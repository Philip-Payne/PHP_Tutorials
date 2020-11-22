<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 008 - foreach Loops</title>
	<meta charset="utf-8">

</head>
<body>

<h1>foreach Loops</h1>

<p>Files to edit /ex008/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 008a                                    *
*********************************************************************************** -->
<h2>008a Basic foreach Loop</h2>

<?php
/* Below is an example of a foreach loop. Look at the output in the browser
we have not used the $key variable
Rewrite the code so that the output is...
	<p>The key for Volvo is 0.</p>
	<p>The key for BMW is 1.</p>
	<p>The key for Rover is 2.</p>
NOTE: You do not need to write the array out again
*/

//Set up the array
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Rover";

foreach($cars as $key => $value){
	// Echo out the text
	echo "<p>$value is a type of car.</p>\n";
}

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 008b                                    *
*********************************************************************************** -->
<h2>008b foreach Loop and associative arrays</h2>

<?php
/* Write a foreach loop so the output is...
	<p>Monica is 12 years old.</p>
	<p>Darren is 17 years old.</p>
	<p>Stacey is 19 years old.</p>
	<p>Barry is 15 years old.</p>
*/

//Set up the array
$age['Monica'] = 12;
$age['Darren'] = 17;
$age['Stacey'] = 19;
$age['Barry'] = 15;

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 008c                                    *
*********************************************************************************** -->
<h2>008c Sorting associative arrays again</h2>

<?php
/* We looked at sorting associative arrays in a previous exercise
Here is another example.
*/

//sort the array
asort ($age);

// Copy your code from Exercise 008b above and paste it here


/*	Look at the output in the browser. What has happened?
Write your answer below

*/
?>


<!-- **********************************************************************************
*                                    Exercise 008d                                    *
*********************************************************************************** -->
<h2>008d Sorting associative arrays yet again</h2>

<?php
/* Here is another way to sort an associative array
*/

//sort the array
ksort ($age);

// Copy your code from Exercise 008b above and paste it here


/*	Look at the output in the browser. What has happened?
	In what way are asort and ksort different?
Write your answer below

*/
?>


<!-- **********************************************************************************
*                                    Exercise 008e                                    *
*********************************************************************************** -->
<h2>008e Performing a calculation in a foreach loop</h2>

<?php
/* Write a foreach loop to output
	<p>Barry will be 21 in 6 years</p>
	<p>Darren will be 21 in 4 years</p>
	<p>Monica will be 21 in 9 years</p>
	<p>Stacey will be 21 in 2 years</p>
NOTE: You will need to calculate the difference between each person's
age and 21 and assign the result to a variable. you can then use the 
variable in the echo statement.
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 008f                                    *
*********************************************************************************** -->
<h2>008f Output an ordered list</h2>

<?php
/* Write code to output the following ordered list. You should use a foreach
loop but you will also have to place some code outside the loop.
	<ol>
		<li>TCP</li>
		<li>IP</li>
		<li>HTTP</li>
		<li>FTP</li>
		<li>SMTP</li>
	</ol>
NOTE: We have set up the array in a different way. This is a much
quicker way of setting up an indexed array as long as we don't care what 
index is assigned to each value (and most of the time we don't care)
*/

// Set up the array
$protocols = array("TCP", "IP", "HTTP", "FTP", "SMTP");

// Write your code here

?>
 

</body>
</html>
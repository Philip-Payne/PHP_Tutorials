<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 013 - strlen - string length</title>
	<meta charset="utf-8">

</head>
<body>

<h1>strlen() function</h1>

<p>Files to edit /ex013/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 013a                                    *
*********************************************************************************** -->
<h2>013a Basic strlen() function</h2>

<?php
/* Below is an example of the strlen() function. Remember that strlen simply returns
an integer - the number of characters in the string passed as the parameter.

The output in this case is 9. Remember that strlen() counts all characters including
spaces
*/

$testString = "Some Text";

echo strlen($testString);
?>


<!-- **********************************************************************************
*                                    Exercise 013b                                    *
*********************************************************************************** -->
<h2>013b Too short</h2>

<?php
/* An email address must be at least six characters long (a@b.co). If you get an email
address from a form you should check that it is at least six characters long.

Write some code to check if an email address is at least six characters in length. Two 
strings are supplied for you to test - you only need to test one at a time.

Your code should echo out an HTML paragraph containing the words...
	"The email address is too short"
or
	"The email address is long enough"
HINT: Use an if else statement to check if the value returned by strlen() is at 
least 6
*/

$short = "abcd";
$long = "abcdefghij";

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 013c                                    *
*********************************************************************************** -->
<h2>013c The Right Length</h2>

<?php
/* You are provided with an array of credit card numbers. Write code to test if
each of the numbers supplied is 16 digits long. Your code should display each 
number in turn along with a message saying that the number is 16 characters long 
or that the number is invalid.
HINT: Use a foreach loop
*/

$ccnum[] = "1234567891011121";
$ccnum[] = "58455456454454";
$ccnum[] = "9931542254454642";
$ccnum[] = "455453546416";
$ccnum[] = "974314236662554545463545";
$ccnum[] = "4568521593546987";

// Write your code here

?>


</body>
</html>
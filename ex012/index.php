<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 012 - date() function</title>
	<meta charset="utf-8">

</head>
<body>

<h1>date() function</h1>

<p>Files to edit /ex012/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 012a                                    *
*********************************************************************************** -->
<h2>012a Basic date() function</h2>

<?php
/* The date function returns the date in numerous formats dictated by the parameters 
passed . In the example below the parameter Y represents the year in a four digit
format so the result will be something like 2017.

You can see a full list of parameters and many example at the PHP man page for the 
date function here http://php.net/manual/en/function.date.php
*/

echo date(Y);
?>


<!-- **********************************************************************************
*                                    Exercise 012b                                    *
*********************************************************************************** -->
<h2>012b Today's Date</h2>

<?php
/* Echo out today's date in two digit format with a dash between day, month and year
dd-mm-yy
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 012c                                    *
*********************************************************************************** -->
<h2>012c The Day Today</h2>

<?php
/* What day of the week is it today? Use the date function to echo out the day of
the week, e.g. Monday, Tuesday etc. Use the output from the date function to output
a paragraph of text that says "Today is xxx" replacing xxx with the day of the week.
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 012d                                    *
*********************************************************************************** -->
<h2>012d Unix Epoch</h2>

<?php
/* How many seconds have passed since January 1st 1970? This is known as 
the Unix Epoch Time.
HINT: The code is much simpler than you probably would guess. Look at the last parameter 
listed on the PHP man page for the date() function
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 012e                                    *
*********************************************************************************** -->
<h2>012e That Special Day</h2>

<?php
/* Write a line of code to echo out the day of the week for 3rd April 1965.
Something like...
	<p>April 3, 1965 is on a Monday</p>
(Note it's not Monday!).
HINT: you will need to use the mktime() function. There are examples on the PHP
man page for the date function.
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 012f                                    *
*********************************************************************************** -->
<h2>012f MySQL datetime format</h2>

<?php
/* The MySQL datetime format is YYYY-MM-DD HH:MM:SS
Write some code to output the date and time now in MySQL datetime format.
This will be very useful next year when we are learning MySQL.
*/

// Write your code here

?>


</body>
</html>
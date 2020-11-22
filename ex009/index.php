<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 009 - if Statements</title>
	<meta charset="utf-8">

</head>
<body>

<h1>if Statements</h1>

<p>Files to edit /ex009/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 009a                                    *
*********************************************************************************** -->
<h2>009a Basic if statement</h2>

<?php
/* Below is an example of an if statement which checks if a variable is
equal to 5. Change the condition to check if the variable is larger than 5 and
change the text to be echoed out.
Change the value of the variable to see what happens - check the result in the browser.
Try values of 3 and 7

Here is a list of comparison operators
	==		Is equal to
	!=		Is NOT equal to
	>		Is greater than
	>+		Is greater than or equal to
	<		Is less than
	<=		Is less than or equal to
	===		Is exactly equal to (value and type)
	!==		Is not exactly equal to

*/

$testVar = 5;

if ($testVar == 5) {
	echo "The value of the test variable is 5";
}
?>


<!-- **********************************************************************************
*                                    Exercise 009b                                    *
*********************************************************************************** -->
<h2>009b if else statement</h2>

<?php
/* Write an if else statement to maximum value of two
variables.
NOTE: we only want to know the maximum value - we don't care which
variable contains the value

Some pseudo code is provided to guide you.
*/

$a = 7;
$b = 5;

echo "<p>The maximum value is ";

// Write your code here
// if $ a is larger than $b

//		echo out $a because it is the larger of the two values

// else

//		echo out $b

// close if statement


echo "</p>\n";
?>


<!-- **********************************************************************************
*                                    Exercise 009c                                    *
*********************************************************************************** -->
<h2>009c Age check</h2>

<?php
/* You have to be 18 or over to go to the pub. Using the supplied array
write code to decide who can go to the pub. We don't care about anyone 
who can't go to the pub.
HINT:	Use a foreach loop to step through each element in the array.
		Inside the foreach loop use an if statement to echo only the 
		people who can go to the pub.
Put your output in an unordered list
*/
echo "<p>A list of people who can go to the pub</p>\n";

$age['Luke'] = 17;
$age['Han'] = 43;
$age['Leia'] = 17;
$age['Ben'] = 68;
$age['Grand Moff Tarkin'] = 65;
$age['Chewbacca'] = 116;

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 009d                                    *
*********************************************************************************** -->
<h2>009d Boolean Check</h2>

<?php
/* Write an if else statement to check if Tom and Monica are
both over 21. The output should be an HTML paragraph element
containing the phrase 
	"Tom and Monica are both over 21"
or
	"Tom and Monica are not both over 21"

Write a second if else statement to check  if
either of them is over 21. The output should be
	"Tom or Monica are over 21"
or
	"Neither Tom or Monica are over 21"
*/
$tom = 18;
$monica = 23;

// Write your first if else statement here


// Write your second if else statement here

?>


<!-- **********************************************************************************
*                                    Exercise 009e                                    *
*********************************************************************************** -->
<h2>009e Directory content</h2>

<?php
/* You are supplied with an array called $contents. This array is the 
contents of a directory (folder) on a computer. Don't worry about where 
this array came from - we will cover that in a later example.

Note that the array contains a list of jpeg files and two other items "." and ".."
"." represents the current directory and ".." represents the parent directory.

We want an array called $pictures that only contains the jpeg files

Write code to create a new array called $pictures with only the jpeg files and
then echo this array out in an ordered list.
HINT: Do this in steps
1) Write a foreach loop that echos out all elements in the $contents array
2) Use an if statement inside your foreach loop which does not echo out "." or ".."
3) Replace the echo statement with an operation to add the file name to the 
   $pictures array. It will look like this $pictures[] = $value;
4) Write a second foreach loop after the first to echo out the list
Check as you go along to make sure everything is working.
*/

$contents = array(".", "..", "IMG001.jpg", "IMG002.jpg", "IMG003.jpg", "IMG004.jpg", 
					"IMG005.jpg", "IMG006.jpg", "IMG007.jpg", "IMG008.jpg",
					"IMG009.jpg", "IMG010.jpg", "IMG011.jpg", "IMG012.jpg", 
					"IMG013.jpg", "IMG014.jpg", "IMG015.jpg", "IMG016.jpg");

// Write your code here

?>


</body>
</html>
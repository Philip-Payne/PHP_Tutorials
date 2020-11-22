<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 018 - Reading Directories</title>
	<meta charset="utf-8">

</head>
<body>

<h1>Reading Directories</h1>

<p>Files to edit /ex018/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 018a                                    *
*********************************************************************************** -->
<h2>018a Reading a directory contents</h2>

<?php
/* There are several ways in PHP to read a directory content but the most flexible is 
to open the directory with opendir() read the content with readdir() and then close the 
directory with closedir(). We will also use a while loop to read out all the items 
in the directory.

This may look complicated at first but the structure is the same every time.
*/
$path = "media/images";

$dh = opendir($path);

while ($item = readdir($dh)) {
	echo "<p>$item</p>\n";
}

closedir($dh);
/* When you view this in the browser you will see the first two items are "." and ".."
These represent the current directory and the parent directory. There is also an item
".DS_Store" which is created by the OS.
*/
?>


<!-- **********************************************************************************
*                                    Exercise 018b                                    *
*********************************************************************************** -->
<h2>018b Removing unwanted items</h2>

<?php
/* Copy and paste the code from above and use an if statement to stop ".", ".." and
".DS_Store" being echoed out to the screen.
HINT: You want your code to echo out an item if it is NOT EQUAL to the above items
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 018c                                    *
*********************************************************************************** -->
<h2>018c Forming an array</h2>

<?php
/* Use your code from exercise 18b but instead of echoing the items add them to an 
array called $images. Use a foreach loop to echo out the array in an unordered list.
HITN: You can add items to the array with $images[] = $item;
*/

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 018d                                    *
*********************************************************************************** -->
<h2>018d More complex example</h2>

<?php
/* Write code to read the contents of the "stuff" directory. Form an array that contains
only the directory names but not "." or "..". Use a foreach loop to echo out the 
array in an ordered list.
HINT: The is_dir() function will return true if the item is a directory
*/

// Write your code here

?>


</body>
</html>
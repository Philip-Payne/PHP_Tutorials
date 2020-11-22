<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 020 - The POST array</title>
	<meta charset="utf-8">

</head>
<body>

<h1>The $_POST associative array</h1>

<p>Files to edit /ex019/page2.php</p>


<!-- **********************************************************************************
*                                    Exercise 020a                                    *
*********************************************************************************** -->
<h2>020a Reading $_POST variables</h2>

<?php
/* In a similar way to the $_GET associative array we use the $_POST associative array
to retrieve data sent from a form. We cannot use the isset() function to check if a field
is empty but we can use isset() to check if the form has been sent

Remember that the NAME attribute in the form field gives us the KEY for the element
in the $_POST array (We are associating the name of the field with the value).
*/
if (isset($_POST['firstname'])) {
	echo "<p>Your first name is set to " . $_POST['firstname'] . "</p>\n";
} else {
	echo "<p>The First Name field was empty</p>\n";
}

if (isset($_POST['age'])) {
	echo "<p>Your age was set to " . $_POST['age'] . "</p>\n";
} else {
	echo "<p>You did not enter your age</p>\n";
}

if (isset($_POST['submit'])) {
	echo "<p>The form was sent.</p>\n";
} else {
	echo "<p>The form was not sent.</p>\n";
}

var_dump ($_POST);

echo "<p><strong>Version 2</strong></p>\n";

if ($_POST['firstname'] != "") {
	echo "<p>Your first name is set to " . $_POST['firstname'] . "</p>\n";
} else {
	echo "<p>The First Name field was empty</p>\n";
}

if ($_POST['age'] != "") {
	echo "<p>Your age was set to " . $_POST['age'] . "</p>\n";
} else {
	echo "<p>You did not enter your age</p>\n";
}

if (isset($_POST['submit'])) {
	echo "<p>The form was sent.</p>\n";
} else {
	echo "<p>The form was not sent.</p>\n";
}
?>


<!-- **********************************************************************************
*                                    Exercise 020b                                    *
*********************************************************************************** -->
<h2>020b Reading color values</h2>

<?php
/* Write code to echo out the data from the form. The field names are 
	fullname
	favcolor
	submit2

Your code should check if the form has been sent. If the form has been sent your code 
should echo a paragraph of text similar to the following
	"Your full name is Fred Smith and your favourite colour is #ff0000"
But your code should detect if the fullname field was empty and change the text to 
indicate that the user did not enter a name.

For an additional challenge use the color value from the form to colour your text
HINT: Use an inline style sheet
*/

// write your code here...

?>


<!-- **********************************************************************************
*                                    Exercise 020c                                    *
*********************************************************************************** -->
<h2>020c Reading radio buttons</h2>

<?php
/* Write code to echo out the type of pizza base chosen if the form is submitted. If
the form is not submitted then echo out some text to that effect.
*/

// write your code here...

?>


</body>
</html>
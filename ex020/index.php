<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 020 - The POST array</title>
	<meta charset="utf-8">
	<!-- Some styling included to make the forms easier to read -->
	<style>
		form ol {
			list-style-type:none;
		}
		
		form li {
			padding:10px 0 0 0;
		}
		
		form label {
			float:left;
			text-align:right;
			width:150px;
			padding:0 10px 0 0;
		}
	</style>

</head>
<body>

<h1>The $_POST associative arrays</h1>

<p>Open this page (index.php) in the browser but edit /ex020/page2.php</p>


<!-- **********************************************************************************
*                                    Exercise 020a                                    *
*********************************************************************************** -->
<h2>020a Data sent from a form</h2>

<!-- Edit the code in page2.php not this file -->

<!-- A form used to collect data - note the action and method -->
<form action="page2.php" method="post">
<ol>
	<li>
		<label for="firstname">Your First Name</label>
		<input type="text" id="firstname" name="firstname">
	</li>
	<li>
		<label for="age">Your age</label>
		<input type="number" id="age" name="age">
	</li>
	<li>
		<label for="submit">&nbsp;</label>
		<input type="submit" id="submit" name="submit" value="Send to page 2">
	</li>
</ol>
<form>

<p>Here is <a href="page2.php">a link to page 2</a> that does not use the form.</p>


<!-- **********************************************************************************
*                                    Exercise 020b                                    *
*********************************************************************************** -->
<h2>020b Reading color values</h2>

<!-- Edit the code in page2.php not this file -->

<!-- A form used to collect data - note the action and method -->
<form action="page2.php" method="post">
<ol>
	<li>
		<label for="fullname">Your Full Name</label>
		<input type="text" id="fullname" name="fullname">
	</li>
	<li>
		<label for="favcolor">Favourite Colour</label>
		<input type="color" id="favcolor" name="favcolor">
	</li>
	<li>
		<label for="submit2">&nbsp;</label>
		<input type="submit" id="submit2" name="submit2" value="Send to page 2">
	</li>
</ol>
<form>

<p>Here is <a href="page2.php">a link to page 2</a> that does not use the form.</p>


<!-- **********************************************************************************
*                                    Exercise 020c                                    *
*********************************************************************************** -->
<h2>020c Reading radio buttons</h2>

<!-- Edit the code in page2.php not this file -->

<!-- Note how each radio button has the same value for the "name" attribute
Also note how each radio button has a different value for the "id" attribute - we
already know that you can only use an "id"  value once on each page.

The "name" is used when transferring data to the form action and the "id" is used
to identify the element. -->
<form action="page2.php" method="post">
<ol>
	<li>
		<ol>
			<li>Select your favourite pizza base</li>
			<li>
				<label for="thin">Thin Crust</label>
				<input type="radio" id="thin" name="pizzabase" value="thin">
			</li>
			<li>
				<label for="thich">Thick Crust</label>
				<input type="radio" id="thick" name="pizzabase" value="thick">
			</li>
			<li>
				<label for="stuffed">Stuffed Crust</label>
				<input type="radio" id="stuffed" name="pizzabase" value="stuffed">
			</li>
		</ol>
	</li>
	<li>
		<label for="submit3">&nbsp;</label>
		<input type="submit" id="submit3" name="submit3" value="Send to page 2">
	</li>
</ol>
<form>


</body>
</html>
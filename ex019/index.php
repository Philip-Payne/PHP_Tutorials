<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 019 - The GET array</title>
	<meta charset="utf-8">

</head>
<body>

<h1>The $_GET associative arrays</h1>

<p>Open this page (index.php) in the browser but edit /ex019/page2.php</p>


<!-- **********************************************************************************
*                                    Exercise 019a                                    *
*********************************************************************************** -->
<h2>019a variables set in URL</h2>

<!-- Edit the code in page2.php not this file -->

<!-- link with one variable in the url -->
<p><a href="page2.php?pagenumber=7">This link</a> only has one variable in the url</p>

<!-- link with three variables in the url -->
<p><a href="page2.php?pagenumber=5&fruit=apple&season=autumn">This link</a> has 
three variables in the url</p>


<!-- **********************************************************************************
*                                    Exercise 019b                                    *
*********************************************************************************** -->
<h2>019b Selecting a category</h2>

<!-- Edit the code in page2.php not this file -->

<!-- link with cat not set -->
<p><a href="page2.php">This link</a> does not have the cat set</p>

<!-- link with cat set to 2 -->
<p><a href="page2.php?cat=2">This link</a> has the cat set to 2</p>

<!-- link with cat set to 153 -->
<p><a href="page2.php?cat=153">This link</a> has the cat set to 153</p>


<!-- **********************************************************************************
*                                    Exercise 019c                                    *
*********************************************************************************** -->
<h2>019c Including a category</h2>

<!-- Edit the code in page2.php not this file -->

<!-- link with cat not set -->
<p><a href="page2.php">This link</a> does not have the cat set</p>

<!-- link with cat set to 2 -->
<p><a href="page2.php?shopcat=5">This link</a> has the shopcat set to 2</p>

<!-- link with cat set to 153 -->
<p><a href="page2.php?shopcat=153">This link</a> has the shopcat set to 153</p>

</body>
</html>
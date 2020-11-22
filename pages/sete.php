
<main>


<h2>Exercise Set E - User Defined Functions</h2>

<article>

<h3>Quick Start</h3>

<ol start="21" class="quickLinks">
	<li><a href="ex021/index.php" target="_blank">Exercise 021 - Using Functions</a></li>
	<li><a href="ex022/index.php" target="_blank">Exercise 022 - Writing Functions</a></li>
	<li><a href="ex023/index.php" target="_blank">Exercise 023 - in_both_arrays()</a></li>
	<li><a href="ex024/index.php" target="_blank">Exercise 024 - hex_to_rgb()</a></li>
	<li><a href="ex025/index.php" target="_blank">Exercise 025 - in_range()</a></li>
</ol>

<p>Exercise set E allows you to practice developing simple user defined functions
in PHP and employing these functions in your code. Combining sections of code into
reusable user defined functions is a basic principal of writing good code, in fact it
has a name which is the DRY principal. DRY stands for "Don't Repeat Yourself". If you
have a block of code that you use in more than one place you should place that code 
in a function. It is also a good idea to place distance code blocks in a function 
once you know they are working.</p>

<p>
Another principal to keep in mind is that your functions should (normally) not send
any output to the browser. Functions should return a result that is then output to the 
browser in the main code block. This allows you to more easily reuse your functions 
because the output can be displayed in different ways. In PHP coding we do sometimes 
write functions that output to the browser but these are generally "helper" or "wrapper" 
functions that encapsulate other code.
</p>

</article>

<aside>
<h3>Read the notes</h3>
<p>Before you start the tutorial exercises read the notes on this page - 
they are here to help you!</p>
</aside>

<?php

include "pages/exnotes/ex021.php";
include "pages/exnotes/ex022.php";
include "pages/exnotes/ex023.php";
include "pages/exnotes/ex024.php";
include "pages/exnotes/ex025.php";

?>

</main>
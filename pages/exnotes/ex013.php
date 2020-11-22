<article>
<h3>Exercise 013 - The strlen() function - String Length</h3>
<p>The <code>strlen()</code> function simply returns the length of a string passed
as a parameter. You can test a literal string or use a string variable as the 
parameter. Here are two examples</p>

<pre>
<code>
	$theLength = strlen("Bob"); <span class="rem">// $theLength now contains 3</span>
	
	$name = "Philip";
	$someVar = strlen($name); <span class="rem">// $someVar now contains 6</span>
</code>
</pre>

<p>
As with any other function you can use the <code>strlen()</code> function as part of 
other statements like so...
</p>

<pre>
<code>
	$name = "Philip";
	
	if (strlen($name) == 6) {
		echo "&lt;p&gt;Yes that's the right way to spell Philip.&lt;/p&gt;\n";
	} else {
		echo "&lt;p&gt;No, Phillip is just wrong.&lt;/p&gt;\n";
	}
</code>
</pre>

</article>

<aside>
<h3>More about strlen()</h3>
<p>You can find out more about the <code>strlen()</code> function 
<a href="http://php.net/manual/en/function.strlen.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/func_string_strlen.asp" target="_blank">here.</a></p>
</aside>

<article>
<h3>Function Prototypes</h3>
<p>Now is a good time to consider function prototypes. A function prototype gives us
a great deal of information about a function in a simple (but not always easy to read) 
form. Look at the PHP man page for the <code>strlen()</code> function and you will see...
</p>

<pre>
<code>
	int strlen ( string $string )
</code>
</pre>

<p>
<code>int</code> is the "Return Type". The function returns an integer (the number of
characters in the string). You can't have 2.5 characters, the return value has to be a 
whole number, hence an int.
</p>

<p>
<code>strlen</code> is the name of the function.
</p>

<p>
<code>string</code> is the "Parameter Type" - we have to give the function a string to
function correctly.
</p>

<p>
<code>$string</code> indicates that there is only one parameter. If there was more than 
one parameter required then this would be shown.
</p>

<p>
Start looking at the function prototypes for each function from now on. If there is 
something that you do not understand ask your tutor for help.
</p>



</article>

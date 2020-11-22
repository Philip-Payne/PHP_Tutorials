<article>
<h3>Exercise 002 - String Variables</h3>
<p>A string is a series of characters. When we want to assign a string to a variable
we need to use the assignment operator (=) and place the string in quotes like so...</p>

<pre>
<code>
	$myVar = "Hello World";
</code>
</pre>
<p>
Note that the variable name starts with a dollar sign ($) just like all variables in PHP.
</p>
</article>

<aside>
<h3>More about Strings</h3>
<p>You can find out more about PHP strings 
<a href="http://php.net/manual/en/language.types.string.php" target="_blank">here</a>.
</p>
</aside>

<article>
<h3>Joining Strings - Concatenating</h3>
<p>If we want to join two, or more strings together it is called Concatenating. The
Concatenation operator is a dot (.). We can join literal strings together or string
variable or we can mix and match. Here are some examples...</p>

<pre>
<code>
	$firstWord = "Hello";
	$secondWord = "world";

	<span class="rem">// $phraseOne now contains "My name is Bob"</span>
	$phraseOne = "My " . "name " . "is " . "Bob";
		
	<span class="rem">// $phraseTwo now contains "Hello World"</span>
	<span class="rem">// Note how we have needed to add a space</span>
	<span class="rem">// between the words.</span>
	$phraseTwo = $firstWord . " " . $secondWord;	
</code>
</pre>
</article>

<aside>
<h3>More about Concatenation</h3>
<p>You can find out more about concatenation 
<a href="http://php.net/manual/en/language.operators.string.php" target="_blank">here</a>.</p>
</aside>
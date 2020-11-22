<article>
<h3>Exercise 015 - The explode() function</h3>
<p>The <code>explode()</code> function splits a string into an array based on a 
delimiter. For instance we can split up the sample text into individual words by 
using a space as the delimiter</p>

<pre>
<code>
	$text = "This is some text";
	$delimiter = " ";
	
	$pieces = explode ($delimiter, $text);
	<span class="rem">// $pieces is now an array containing...
	// $pieces[0] = "This";
	// $pieces[1] = "is";
	// $pieces[2] = "some";
	// $pieces[3] = "text"; </span>
</code>
</pre>

<p>
<strong>Note: </strong> The delimiter is lost in the explosion - there are no spaces
in the array above.
</p>

<p>
The <code>explode()</code> function can be useful to split up a file name when we do 
not know the file extention. For example...
</p>

<pre>
<code>
	$text = "this_is_the_file_name.txt";
	
	$fName = explode (".", $text);
	<span class="rem">// $fName is now an array containing...
	// $fName[0] = "this_is_the_file_name";
	// $fName[1] = "txt"; </span>
</code>
</pre>

<p>
So we can use <code>$fName[0]</code> in a <code>str_replace()</code> function to replace 
the underscores with spaces.
</p>
</article>

<aside>
<h3>More about explode()</h3>
<p>You can find out more about the <code>explode()</code> function 
<a href="http://php.net/manual/en/function.explode.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/func_string_explode.asp" target="_blank">here.</a></p>
</aside>

<article>
<h3>The implode() function</h3>
<p>The <code>implode()</code> function is the opposite of the <code>explode</code> 
function. The <code>implode()</code> function "glues" an array together to form a 
string.</p>

<p>
You can find more information about the <code>implode()</code> function at 
<a href="http://php.net/manual/en/function.implode.php" target="_blank">the PHP man 
page</a> or 
<a href="https://www.w3schools.com/php/func_string_implode.asp" target="_blank">on 
W3Schools</a>.
</p>
</article>


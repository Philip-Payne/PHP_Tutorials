<article>
<h3>Exercise 016 - The in_array() function</h3>
<p>The <code>in_array()</code> function checks to see if a particular value exists in
an array. The <code>in_array()</code> function returns true if the search value is 
found and false if the value is not found.</p>

<pre>
<code>
	$needle = "Tom";
	$haystack = array ("Tom", "Richard", "Harry");
	
	$testA = in_array ($needle, $haystack);
	<span class="rem">// $testA is set to true</span>
	
	$testB = in_array ("Fred", $haystack);
	<span class="rem">// $testB is set to false</span>
</code>
</pre>

<p>
The <code>in_array()</code> function is case sensitive when searching for strings. You 
should check the PHP man page for more details of this function.
</p>
</article>

<aside>
<h3>More about in_array()</h3>
<p>You can find out more about the <code>in_array()</code> function 
<a href="http://php.net/manual/en/function.in-array.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/func_array_in_array.asp" target="_blank">here.</a></p>
</aside>




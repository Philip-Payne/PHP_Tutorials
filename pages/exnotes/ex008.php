<article>
<h3>Exercise 008 - foreach</h3>
<p>The foreach loop allows your code to step through an array without having to 
know how many elements there are in the array. The foreach loop is probably the most 
common type of loop used in PHP.</p>

<p>
Here is the basic construction of a foreach loop. 
</p>
<pre>
<code>
	$foo = array ("Tracey, "Stacie", "Lucy", "Debbie", "Nigel");

	foreach ($foo as $key => $value) {
		<span class="rem">// Do something with $key and $value here</span>
	}
</code>
</pre>

<p>Here are some notes about the foreach loop above</p>

<ol>
<li><strong><code>$foo</code></strong> is the name of the array. Note that we do not add the 
square brackets after the name</li>
<li><strong><code>as $key => $value</code></strong> should be read "As each $key maps to 
each $value"</li>
<li>Each time through the lopp the next element key will be put into $key and each 
element value will be put into $value</li>
<li>We do not have to use $key and $value as our variable names. $key and $name 
might have been better choices in the example above.</li>
</ol>
</article>

<aside>
<h3>More about foreach loops</h3>
<p>You can find out more about foreach loops 
<a href="http://php.net/manual/en/control-structures.foreach.php" target="_blank">here</a> 
and some more examples 
<a href="https://www.w3schools.com/php/php_looping_for.asp" target="_blank">here.</a></p>
</aside>
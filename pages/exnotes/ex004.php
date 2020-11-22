<article>
<h3>Exercise 004 - Indexed Arrays</h3>
<p>An array is a collection of variables that all have the same name. The individual
values are identified with a key which is placed in square brackets [ ]. In an indexed 
array the keys are numbers. Array numbering starts at zero. Here is an example...
</p>
<pre>
<code>
	<span class="rem">// Set up the array</span>
	$name[0] = "Tom";
	$name[1] = "Dick";
	$name[2] = "Harry";

	<span class="rem">// This will echo out &lt;p&gt;Hello Harry&lt;/p&gt</span>
	echo "&lt;p&gt;Hello " . $name[2] . "&lt;/p&gt;\n";
</code>
</pre>
<p>
When you use an array variable you <strong>must</strong> use the concatenation operator.
</p>
<p>
You can set up an indexed array in another way like this...
</p>
<pre>
<code>
	<span class="rem">// Set up the array</span>
	$name = array ("Tom", "Dick", "Harry");

	<span class="rem">// The result is the same as above</span>
	echo "&lt;p&gt;Hello " . $name[2] . "&lt;/p&gt;\n";
</code>
</pre>
<p>
In this case the index is automatically assigned to the value. Often we do not care
what index is assigned to each value. If the index matters use the first version.
</p>
</article>

<aside>
<h3>More about arrays</h3>
<p>You can find out more about arrays 
<a href="http://php.net/manual/en/language.types.array.php" target="_blank">here</a>.</p>
</aside>

<article>
<h3>Exercise 017 - The min() &amp; max() function</h3>
<p>The <code>min()</code> &amp; <code>max()</code> function find, respectively, the
minimum and maximum values in an array. These functions operate as you would expect.
For example...
</p>

<pre>
<code>
	$testArray = array(17, 5, 72, 19, 2);
	
	$minimumVal = min ($testArray);
	<span class="rem">// $minimumVal now contains 2</span>
	
	$maximumVal = max ($testArray);
	<span class="rem">// $maximumVal now contains 72</span>
</code>
</pre>

<p>
It is important to note that you will get unexpected results if the array contains
any data other than numbers. See the PHP man pages for the <code>min()</code> &amp; 
<code>max()</code> functions.
</p>
</article>

<aside>
<h3>More about min() &amp; max()</h3>
<p>You can find out more about the <code>min()</code> function 
<a href="http://php.net/manual/en/function.min.php" target="_blank">here</a>
and more about the <code>max()</code> function 
<a href="http://php.net/manual/en/function.max.php" target="_blank">here.</a></p>
</aside>
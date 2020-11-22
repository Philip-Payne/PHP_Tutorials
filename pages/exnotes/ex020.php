<article>
<h3>Exercise 020 - The $_POST associative array</h3>
<p>The <code>$_POST[]</code> associative array allows your code to access parameters
passed to the current script from an HTML form. The  <code>$_POST[]</code> associative 
array is more a secure way of passing data but is not completely fool proof.</p>

<pre>
<code>
	<span class="rem">// A field in the form</span>
	&lt;input type="text" name="fruit"&gt;
	
	<span class="rem">// then the code in a script can access the values with...</span>
	$pageNum = $_POST['fruit'];
</code>
</pre>

<p>
Note that the "name" of the form field must match the "key" in the <code>$_POST[]</code>
 array.
</p>

<p>
Although this is only a short section of the tutorial notes we will often use the 
<code>$_POST[]</code> array in our work. There are many other examples in the lecture 
series.
</p>

</article>

<aside>
<h3>More about $_POST</h3>
<p>You can find out more about <code>$_POST</code> 
<a href="http://php.net/manual/en/reserved.variables.post.php" target="_blank">here</a>.
</p>
<p>
<code>$_POST</code> &amp; <code>$_GET</code> are both types of "Super Globals" in PHP.
You can find out more about "Super Globals" 
<a href="https://www.w3schools.com/php/php_superglobals.asp" target="_blank">here.</a></p>
</aside>

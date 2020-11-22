<article>
<h3>Exercise 019 - The $_GET associative array</h3>
<p>The <code>$_GET[]</code> associative array allows your code to access parameters
passed to the current script in the URL. The  <code>$_GET[]</code> associative array is 
not a secure way of passing data but is adequate for simple information such as page
numbers or category selection.</p>

<pre>
<code>
	<span class="rem">// If the URL is...</span>
	somepage.php?page=34&cat=fruit
	
	<span class="rem">// then the code in somepage.php can access the values with...</span>
	$pageNum = $_GET['page'];
	$category = $_GET['cat'];
	
</code>
</pre>

<p>
We can use the <code>isset()</code> function to check if the parameter has been given a
value in the URL
</p>

<pre>
<code>
	<span class="rem">// If the URL is...</span>
	somepage.php?page=34
	
	isset ($_GET['cat']) <span class="rem">// will be false</span>
	
</code>
</pre>

</article>

<aside>
<h3>More about $_GET</h3>
<p>You can find out more about <code>$_GET</code> 
<a href="http://php.net/manual/en/reserved.variables.get.php" target="_blank">here</a>
and more about the <code>isset()</code> function 
<a href="http://php.net/manual/en/function.isset.php" target="_blank">here.</a></p>
</aside>

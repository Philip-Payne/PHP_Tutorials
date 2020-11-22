<article>
<h3>Exercise 018 - Reading Directory Contents</h3>
<p>It is frequently useful to read the contents of a directory on a server. There are 
a number of ways to do this in PHP (See next section) but the most flexible method is
described here. We will use three functions, <code>opendir()</code>, 
<code>readdir()</code> and <code>closedir()</code>. This method may seem a little 
complex at first but the code can be repeated in many circumstances and forms a standard
method for reading a directory contents</p>

<pre>
<code>
	<span class="rem">// This is the path to the directory to read</span>
	$path = "path/to/dir/";
	
	$dh = opendir($path);
	
	while (($item = readdir($dh)) !== false)) {
		<span class="rem">// Do something with $item here</span>
	}
	
	closedir($dh)
</code>
</pre>

<p>
There are several things to explain in the code above
</p>

<p>
1) The path is relative to the page running the PHP code.
</p>

<p>
2) The <code>opendir()</code> function returns a "resource". The resource holds 
information about the object (in this case the directory being read) and we need to 
store this in a variable for use later. This variable is called a "handler" and because 
we are dealing with a directory we would call this variable a "directory handler", or 
<code>$dh</code> for short.
</p>

<p>
3) The condition in the file loop may seem confusing but we can split this down into 
sections. Each time through the loop the readdir() function reads the next item in the 
directory into the variable $item. When the loop gets to the end of the items the 
<code>readdir()</code> function returns the bool value <code>false</code>. The code 
continues to loop as long as the <code>readdir()</code> function does 
<strong>not</strong> return <code>false</code>. We use the "not exactly equal to 
operator <code>!== </code> rather than the not equal to operator <code>!= </code> because 
we may have an item in the directory called "false" or "0" and we are only interested 
in the bool value <code>false</code>.
</p>

<p>
4) It is always important to remember to close the directory with the 
<code>closedir()</code> function. If you forget to do this you will not see any errors
but your code will effectively keep opening directories on the server. This is similar 
to opening folders on your computer - having a few folders open is fine but having
hundreds of folders open will slow your computer down or make it crash. If your web site 
has many users it is very easy to crash a server by forgetting to close a directory.
</p>
</article>

<aside>
<h3>More about Reading Directories</h3>
<p>You can find out more about reading directories  
<a href="http://php.net/manual/en/function.readdir.php" target="_blank">here</a>.</p>
</aside>

<article>
<h3>Other methods of reading directories</h3>
<p>There are two other ways of reading a directory's content. You can use either the
<code>scandir()</code> function or the <code>glob()</code> function.</p>

<p>
The <code>scandir()</code> function is simpler in use but can only be used to return an 
array of all the items in a directory. Using the method described above we can create 
our own array and be selective about the items we include in the array.
</p>

<p>
The <code>glob()</code> function is useful when you know exactly the patten of items you 
are expecting in the directory but is a little slower to run than other options.
</p>

<p>
You can find more information about the <code>scandir()</code> function at 
<a href="http://php.net/manual/en/function.scandir.php" target="_blank">the PHP man 
page</a>
</p>
<p>
You can find more information about the <code>glob()</code> function at 
<a href="http://php.net/manual/en/function.glob.php" target="_blank">the PHP man 
page</a>
</p>
</article>


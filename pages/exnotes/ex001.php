<article>
<h3>Exercise 001 - The Echo Statement</h3>
<p>The echo statement sends content to a web page. Most commonly we will be sending
HTML output to a web page but we will not always be sending a complete HTML element.</p>

<p>Suppose we want to send the following to a web browser...</p>

<pre>
<code>
	&lt;p&gt;Hello World!&lt;/p&gt;
</code>
</pre>

<p>In PHP we would write...</p>

<pre>
<code>
	echo "&lt;p&gt;Hello World!&lt;/p&gt;";
</code>
</pre>

<p>We have used the <code>echo</code> statement to tell PHP that we want to send the text
to the browser. We have enclosed the text to send in double quotes ("...") and we have 
ended the line with a semicolon (;). To see this output we need to look at the "Page 
Source" in the browser.
</p>
</article>

<aside>
<h3>Print Statement</h3>
<p>Rather than using the <code>echo</code> statement we could use the 
<code>print</code> statement. The two statements do the same thing but it is 
more common to use <code>echo</code></p>
</aside>

<aside>
<h3>More about echo</h3>
<p>You can find out more about the echo statement 
<a href="http://php.net/manual/en/function.echo.php" target="_blank">here</a>.</p>
</aside>

<article>
<h3>Escape Characters</h3>
<p>
Some characters cannot be echoed directly to the browser. For instance if we want to
echo out a double quote (") then PHP will think that it has reached the end of the 
line of text and you will get an error. To correct this we place the escape character 
(a backslash \) <strong>before</strong> the quotes. Here is an example...
</p>
<p>
This will cause an error...
</p>
<pre>
<code>
	echo "&lt;p class="something"&gt;Hello World!&lt;/p&gt;";
</code>
</pre>

<p>Here we have fixed the problem...</p>

<pre>
<code>
	echo "&lt;p class=\"something\"&gt;Hello World!&lt;/p&gt;";
</code>
</pre>

<p>Here is a list of the commonly used escape codes...</p>

<dl>
	<dt>\"</dt> <dd>Double Quote</dd>
	<dt>\n</dt> <dd>New Line</dd>
	<dt>\t</dt> <dd>Tab</dd>
	<dt>\$</dt> <dd>Dollar Sign</dd>
	<dt>\\</dt> <dd>Backslash</dd>
</dl>

<p>There are other escape characters but these are all you will need for now.</p>
</article>

<aside>
<h3>More about Escaping Characters</h3>
<p>You can find out more about escape characters 
<a href="http://php.net/manual/en/regexp.reference.escape.php" target="_blank">here</a>.</p>
</aside>
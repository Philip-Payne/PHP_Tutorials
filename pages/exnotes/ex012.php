<article>
<h3>Exercise 012 - The date() function</h3>
<p>The <code>date()</code> function returns a string representing the current date or
time based on a formatting string parameter. Optionally a timecode can be added using 
the <code>mktime()</code> function to return results for other dates or times.</p>

<p>Look through the PHP man page for the <code>date()</code> function (see sidebar) 
for a list of the many formatting parameters and several examples.</p>

<p>It is important to note that the "Current Time" is that set on the server hosting
the web site and your code is reliant on the time being set correctly.</p>

<p>Here are some examples...</p>

<pre>
<code>
	$year = date(Y); <span class="rem">// $date contains the current year</span>
	
	<span class="rem">// The following gives...
	// Today is the <?php echo date(jS); ?> day of the month</span>
	echo "&lt;p&gt;Today is the " . date(jS) . " day of the month&lt;/p&gt;\n";
	
</code>
</pre>

<p>
You can include other characters in the parameter string but you must enclose the
parameters in quotes like so...
</p>

<pre>
<code>
	<span class="rem">// The following gives...
	// The date is <?php echo date("d-m-Y"); ?></span>
	echo "&lt;p&gt;The date is " . date("d-m-Y") . "&lt;/p&gt;\n";
	
</code>
</pre>

<p>
We can use the <code>mktime()</code> function to set a date and time other than the 
current date and time like so...
</p>

<pre>
<code>
	<span class="rem">// The following gives...
	// The 3rd of April 1965 was a <?php echo date(l, mktime(0, 0, 0, 4, 3, 1965)); ?></span>
	echo "&lt;p&gt;The 3rd of April 1965 was a " 
	. echo date(l, mktime(0, 0, 0, 4, 3, 1965)) 
	. "&lt;/p&gt;\n";
	
</code>
</pre>

<p>
If you have to write any code that requires the manipulation of dates or times then the 
<code>date()</code> function is a good place to start.
</p>

</article>

<aside>
<h3>More about date()</h3>
<p>You can find out more about the <code>date()</code> function
<a href="http://php.net/manual/en/function.date.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/func_date_date.asp" target="_blank">here.</a></p>
</aside>
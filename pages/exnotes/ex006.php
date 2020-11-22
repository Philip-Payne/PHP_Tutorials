<article>
<h3>Exercise 006 - for loops</h3>
<p>For loops allow you to loop through code as long as a condition is true. A for
loop is normally used to loop a specific number of times</p>

<p>Here is an example...</p>

<pre>
<code>
	for ($i = 0; $i < 10; $i++) {
		echo $i;
	}
</code>
</pre>

<p>
This code would echo out <code>0123456789</code> (Why not 10?)
</p>

<p>
In the example above<br>
<code>$i = 0</code> is the starting condition<br>
<code>$i < 10</code> is the terminating condition - the loop runs as long as $i
is less than 10<br>
<code>$i++</code> is the operator, the ++ operator adds 1 to $i each time round the loop<br>
And these three items are separated with semicolons (;).
</p>
<p>
Note that $i is the control variable and does not exist outside the loop.
</p>
<p>
We often use $i++ to count through a loop but there are other options. Here is a list...
</p>
<dl>
	<dt>$i++</dt> <dd>Adds 1 each loop</dd>
	<dt>$i--</dt> <dd>Subtracts 1 each loop</dd>
	<dt>$i += 5</dt> <dd>Adds 5 each loop - you can change the number</dd>
	<dt>$i /= 2</dt> <dd>Divides by two each loop</dd>
</dl>
</article>

<aside>
<h3>More about for loops</h3>
<p>You can find out more about for loops 
<a href="http://php.net/manual/en/control-structures.for.php" target="_blank">here</a> 
and some more examples 
<a href="https://www.w3schools.com/php/php_looping_for.asp" target="_blank">here.</a></p>
</aside>

<article>
<h3>Control variable names</h3>
<p>
Above we have called our control variable $i but you can use any legal variable name. 
If you are creating a loop within a loop you must use a different name for each 
control variable. Common names are $i, $j and $k but pick names that make sense in the
context of your loop.
</p>
</article>

<aside>
<h3>More about Variable names</h3>
<p>You can find out more about variable names
<a href="http://php.net/manual/en/language.variables.basics.php" target="_blank">here</a>.</p>
</aside>
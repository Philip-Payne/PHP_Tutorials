<article>
<h3>Exercise 009 - if statements</h3>
<p>An if statement lets our code make a choice based on a condition.</p>

<pre>
<code>
	if (condition) {
		<span class="rem">// Code here runs if condition is true</span>
	}
</code>
</pre>

<p>The code within the braces will <strong>only</strong> run if the condition is true.</p>

<p>
Sometimes we want two options, one to run if the condition is true, and another
to run if the condition is false. To do this we can use an <strong>if else</strong> statement.
</p>

<pre>
<code>
	if (condition) {
		<span class="rem">// Code here runs if condition is true</span>
	} else {
		<span class="rem">// Code here runs if condition is false</span>
	}
</code>
</pre>

<p>
Sometimes we want multiple options. To do this we can use an <strong>if elseif else
</strong> statement. This can become complex and easily lead to errors. Always try 
to use the simplest version of an if statement that you can.
</p>

<pre>
<code>
	if (condition) {
		<span class="rem">// Code here runs if condition is true</span>
	} elseif (condition2) {
		<span class="rem">// Code here runs if condition2 is true</span>
	} elseif (condition3) {
		<span class="rem">// Code here runs if condition3 is true</span>
	} else {
		<span class="rem">// Code here runs if all the above conditions are false</span>
	}
</code>
</pre>

</article>

<aside>
<h3>More about if statements</h3>
<p>You can find out more about if statements 
<a href="http://php.net/manual/en/control-structures.if.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/php_if_else.asp" target="_blank">here.</a></p>
</aside>
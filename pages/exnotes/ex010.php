<article>
<h3>Exercise 010 - switch statements</h3>
<p>The <code>switch</code> statement is less common than the <code>if</code> statement 
but is very useful in certain circumstances. You can replace an <code>if elseif else
</code> statement with a much simpler <code>switch</code> statement. Here is an example. 
Look at the link in the sidebar for more examples</p>

<pre>
<code>
	$favFruit = "apple";

	switch ($favFruit) {
	case "orange":
		echo "Your favourite fruit is an orange";
		break;
	case "apple":
		echo "Your favourite fruit is an apple";
		break;
	case "peach":
		echo "Your favourite fruit is a peach";
		break;
	default:
	echo "Your favourite fruit is neither orange, apple, nor peach!";
	}
</code>
</pre>

<p>
Don't forget the <code>break</code> statements and the <code>default</code> case.
</p>
</article>

<aside>
<h3>More about switch statements</h3>
<p>You can find out more about switch statements 
<a href="http://php.net/manual/en/control-structures.switch.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/php_switch.asp" target="_blank">here.</a></p>
</aside>
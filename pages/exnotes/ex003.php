<article>
<h3>Exercise 003 - Numeric Variables</h3>
<p>Because PHP5 loosely types variables we do not need to worry (at this stage) about
what sort of number (int, char, float, double) a variable contains. In most cases
PHP will do what we expect with numeric variables.</p>

<p>
Assignment and mathematical operations work in a similar way to most other C based
languages. Here are some examples...
</p>
<pre>
<code>
	<span class="rem">// $a now contains 7</span>
	$a = 3 + 4;

	$b = 5;
	$c = 2;
	<span class="rem">// $d now contains 2.5</span>
	$d = $b / $c;
</code>
</pre>

<p>Here is a list of maths operators...</p>

<dl>
	<dt>+</dt> <dd>Add</dd>
	<dt>-</dt> <dd>Subtract</dd>
	<dt>*</dt> <dd>Multiply</dd>
	<dt>/</dt> <dd>Divide</dd>
	<dt>%</dt> <dd>Modulus</dd>
</dl>

</article>

<aside>
<h3>More about numeric variables</h3>
<p>You can find out more about numeric variables 
<a href="http://php.net/manual/en/language.types.integer.php" target="_blank">here</a> 
and <a href="http://php.net/manual/en/language.types.float.php" target="_blank">here</a>.</p>
</aside>

<article>
<h3>The Modulus Operator</h3>
<p>You are probably less familiar with the modulus operator than the others
in the list above. The modulus operator returns the remainder of a division.</p>

<p>
Here are some examples...
</p>
<pre>
<code>
	<span class="rem">// $a now contains 3</span>
	<span class="rem">// 3/4 is 0 with a REMAINDER of 3</span>
	$a = 3 % 4;

	$b = 5;
	$c = 2;
	<span class="rem">// $d now contains 1</span>
	<span class="rem">// 5/2 is 2 with a REMAINDER of 1</span>
	<span class="rem">// Very useful for checking for odd numbers</span>
	$d = $b % $c;
</code>
</pre>
</article>

<aside>
<h3>More about math operators</h3>
<p>You can find out more about math operators 
<a href="http://php.net/manual/en/language.operators.arithmetic.php" target="_blank">here</a>.</p>
</aside>

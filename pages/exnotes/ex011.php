<article>
<h3>Exercise 011 - include Statement</h3>
<p>The <code>include</code> statement is used to <code>include</code> one PHP file 
within another PHP file. This is useful to split up web pages into more
manageable sections. We can also use <code>include</code> to <code>include</code> 
one file in many other pages. For example you could <code>include</code> one footer.php 
file in every page on a web site.</p>

<p>Here is the standard form of the include statement...</p>

<pre>
<code>
	include "<span class="rem">path</span>";
</code>
</pre>

<p>
The <code><span class="rem">path</span></code> is the path to the file you wish to 
<code>include</code>. For example if you wished to <code>include</code> a file 
called "footer.php" which is within a directory called "includes" then the 
<code>include</code> statement would be...</p>
</p>

<pre>
<code>
	include "includes/footer.php";
</code>
</pre>

<p>
The include statement is often used to <code>include</code> files that are used in 
many pages. A particular example is to create a file called functions.php which 
contains all your user defined functions (more on user defined functions in later 
exercises) and to <code>include</code> this file in all your PHP files so you can 
use your own functions anywhere in your web site.
</p>

</article>

<aside>
<h3>More about include statements</h3>
<p>You can find out more about includes statements 
<a href="http://php.net/manual/en/function.include.php" target="_blank">here</a>.
</aside>
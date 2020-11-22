<article>
<h3>Exercise 014 - The str_replace() function</h3>
<p>The <code>str_replace()</code> function replaces each occurrence of a search string 
with a replacement string. Here is an example...</p>

<pre>
<code>
	$someText = "This is some text";
	
	<span class="rem">// We replace all the spaces with underscores _</span>
	$newText = str_replace(" ", "_", $someText);
	<span class="rem">// $newText is now "This_is_some_text"</span>
</code>
</pre>

<p>
More often we would want to do this the other way round. File names often use 
underscores instead of spaces so to change "My_great_holiday" to "My great holiday" 
we would use
</p>

<pre>
<code>
	$newText = str_replace("_", " ", $someText);
</code>
</pre>

<p>
You can also use the <code>str_replace()</code> function to remove a character or a set 
of characters by replacing with nothing, i.e. ""
</p>

<pre>
<code>
	$someText = "image_file_name.jpg";
	$tempText = str_replace("_", " ", $someText);
	$newText = str_replace(".jpg", "", $tempText);
	<span class="rem">// $newText is now "image file name"</span>
</code>
</pre>

<p>
The <code>str_replace()</code> function is actually capable of using arrays of 
characters for complex string replacement - See the PHP man page for more details.
</p>

</article>

<aside>
<h3>More about str_replace()</h3>
<p>You can find out more about the <code>str_replace()</code> function  
<a href="http://php.net/manual/en/function.str-replace.php" target="_blank">here</a>
and some more examples 
<a href="https://www.w3schools.com/php/func_string_str_replace.asp" target="_blank">here.</a></p>
</aside>
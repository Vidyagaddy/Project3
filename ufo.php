<h2> UFO Welcome Center </h2>
<div class="body">
<p>

This attraction is designed for aliens by humans.
It is shaped like a flying saucer with a smaller flying saucer on top.
It is falling apart but it's caretaker is committed to keeping it open.
It welcomes visiters from all corners of the universe (including humans).
The point of this place is to create an environment that aliens would feel comfortable in,
not so much for humans. It's covered in wires and gadgets from ceiling to floor. </p>
	<br>
<a href="https://www.roadsideamerica.com/story/10911"> Source </a>
</div>
<div class = "comments">
<?php
	if (isset($_POST['op'])) {
		$content  = $_POST['content'];
		$name  = $_POST['name'];
			echo "<h2 align=\"center\">Your Comment Has Been Posted</h2>\n";
			
			echo "<blockquote> \n $name : $content \n </blockquote>\n";
		
	
	}
	else if(!isset($username)){
		//do nothing
	}
	else {
	?>
        <h2 align="center">We'd Love to Hear From You</h2>
        <p>Enter your comment below </p>
        <form method="post" action="ufo.php">
        Name    <input type="text" name="name"    size="30"><br/>
        <textarea name="content" rows="5" cols="40"></textarea><br/>
        <input type="hidden" value="done" name="op">
        <input type="submit" value="Send">
        </form>
<?php
	}
	?>

<br /><br />
</div>

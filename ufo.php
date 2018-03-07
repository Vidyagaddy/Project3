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
	$errors = ""; 
	if (isset($_POST['op'])) {
		if($_POST['name'] != ""){
			$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			if($_POST['name'] == ""){
				$errors .= 'Please enter a valid name.<br/><br/>';
			}
		}
		else {
			$errors .= 'Please enter your name.<br/>';
		}
	

		if($_POST['content'] != ""){
			$content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
			if($_POST['name'] == ""){
				$errors .= 'Please enter valid content.<br/><br/>';
			}
		}
		else {
			$errors .= 'Please enter your content.<br/>';
		}
		

		if(!$errors) {
			echo "<h2 align=\"center\">Your Comment Has Been Posted</h2>\n";
                        
			echo "<blockquote> \n $name : $content \n </blockquote>\n";
		} else {
			echo '<div style="color: red">' . $errors . '<br/></div>';
		}	
	
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

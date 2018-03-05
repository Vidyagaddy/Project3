<h2>Hilton Head Island</h2>
<div class="body">

12 miles of beaches, 24 golf courses, 350 tennis courts, horseback through a forest preserve, bike on the beach, over 250 restaurants, guided tours, art galleries, spas, etc.<br>
<a href="https://www.hiltonheadisland.org/"> Source </a><br>
Who doesn’t love a vacation out to an island? Surrounded by the ocean air and a calming atmosphere, Hilton Head Island provides a resort style vacation ready to treat your every need. With 12 miles of beach there’s plenty to explore without having to deal with the crowds. Let’s see what this island has to offer:<br>
Like Sports? Hilton Head Island has you covered! Offering 24 world-class golf courses, over 350 tennis courts, horseback riding through a preserved forest, and biking trails near the beach, there’s plenty to do to keep you active!<br>
Feelin’ Hungry? Hilton Head Island has over 250 restaurants! That means you have plenty of options to choose from, and never have to worry about being stuck eating one kind of meal your whole stay.
<br>
Be careful Western Coastal areas tend to have high winds!
<br>
<a href="https://www.youtube.com/watch?v=eTMb2UkW4xY"> 
    <?php echo Asset::img("umbrella.jpg",array("width" => "200px"));?>
    </a><br>
</p>
	
</div>
<div class = "comments">
<?php
if(session_start()){
	if (isset($_POST['op'])) {
		$content  = $_POST['content'];
		$name  = $_POST['name'];
			echo "<h2 align=\"center\">Your Comment Has Been Posted</h2>\n";
			
			echo "<blockquote> \n $name : $content \n </blockquote>\n";
		
	
	}
	else {
	?>
        <h2 align="center">We'd Love to Hear From You</h2>
        <p>Enter your comment below </p>
        <form method="post" action="island.php">
        Name    <input type="text" name="name"    size="30"><br/>
        <textarea name="content" rows="5" cols="40"></textarea><br/>
        <input type="hidden" value="done" name="op">
        <input type="submit" value="Send">
        </form>
<?php
	}
	}
	?>

<br /><br />
</div>

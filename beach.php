<div class="body">
<h1>Myrtle Beach</h1>
<p>What better way to spend your time than to go out to the beach? Myrtle Beach has a lot to offer between its vast size (Over 60 miles of beach!) and its many attractions! In fact, there’s something for everyone! Check out some of the activities below:</p>
<p>Beach Fun! There’s plenty to do at the beach! If you’re feeling more active then get into some frisbee, volleyball, surfing, or swimming. Or if you’re feeling on the lazier side then lounging around on the beach is perfectly acceptable too.</p>

<p>Looking for a place to stay? Look no further than Myrtle Beach! Myrtle Beach offers many options whether you’re looking for a classier get away in a nice hotel or if you’re looking for more affordable options there’s plenty of places to check out with a view of the ocean or even a short walk to the ocean. Some of these options include:</p>
<ul>
<li>Hotels</li>
<li>Condos</li>
<li>Beach Homes</li>
<li>Rustic Cabins</li>
<li>Campgrounds</li>
<li>And more!</li>
</ul>

<b>Entertainment</b>
Myrtle Beach is a very popular place, and taking a look at the entertainment offered there sure does explain it. Checkout these fun activities to stop by and check out near the beach:<br>
WonderWorks (upside-down house)
Ripley’s Aquarium,
Pirate’s Voyage,
Medieval Times,
Carolina Opry,
Alabama Theatre,
Legends in Concert,
GTS Theatre,
Over 600 fine art events in a year,
Murrells Inlet Marsh Walk (Seafood capital of SC),
Other food variety,
Myrtle Beach SkyWheel,
Boardwalk,
Bars,
Broadway at the Beach,
Barefoot landing,
Coastal Grand Mall,
The Market Common,
Myrtle Beach Sports Center,
Brookgreen Gardens,
Conway Riverwalk,
Murrells Inlet MarshWalk</p>
<a href="https://www.visitmyrtlebeach.com/articles/post/top-10-reasons-to-visit-myrtle-beach/">Source</a>
<br>
<br>
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
        <form method="post" action="beach.php">
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

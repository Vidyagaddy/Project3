<h2>
	<a href="<?=Uri::create('index.php/sc/index'); ?>">Home</a>
</h2>
<div class="h2Content">
<?php
    session_start();
    if(!isset($_SESSION['count'])) { // first time opening the page
        $_SESSION['count'] = 0; // initializing the counter
    } else { // counter already have a value
        if(isset($_GET['inc'])) { // increasing
            ++$_SESSION['count']; // no need for extra variable (preincrement to echo immediately)
        }
        if(isset($_GET['dec'])) { // decreasing
            --$_SESSION['count']; // no need for extra variable (predecrement to echo immediately)
        }
    } 
    echo "You have " . $_SESSION['count'] . " item/s in your cart.";
?>
<br />
<br />
<a href="brochure.php?inc=TRUE">Add brochure to cart</a>
<a href="brochure.php?dec=TRUE">Remove brochure from cart</a>
<br />
<br />
<form method="post" name="emailform">
Enter Email Address: <input type="text" name="email">
<button type="submit" formmethod="post" name="submit">Submit Order</button>
</form>
<br />

<?php
  if(isset($_POST['submit'])){
    $to = $_POST['email']; 
    $from = "zach.rule24@gmail.com"; 
    $subject = "Brochure Order";
    $subject2 = "Copy of your order form";
    $message = "This is a copy of your order you placed for" . $_SESSION['count']  . " brochures. Thank you for your order. ";
    $message2 = "Here is a copy of an order made by | " . $to .  " | This is what the order contained: " .$message;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: brochure.php');
    echo "Thanks taking a brochure";
    } 
?>
</div>
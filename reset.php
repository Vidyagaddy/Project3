 <html>
 <h2 align="center">Recover Your Password</h2>
 <?php
if (isset($_POST['op'])) {
	$username     = $_POST['username'];
	$email  = $_POST['email'];
	
	error_reporting(0);
	if($username == 'gaddvi' || $username == 'zach' || $username == 'CT310' || $username == 'Bob'){
        // need to get decrypted password somehow
        
        if(mail($email, 'Password Recovery For '.$username, 'Here is your password: '.$password)) {
            echo "<p>$name, your password has been sent to your email.</p>\n";
        }
        else {
        echo "<p>$name, there was an error trying to send your comment.</p>\n";
        }
    }
}
?>
 <p> Enter your username and email. Select send, and check your email. If your password has not been sent please retry. </p>
   <form method="post" action="reset.php">
      <input type="text" name="username" placeholder="Please enter username"/>
      <input type="text" name="email" placeholder="Please enter email"/> 
      <input type="hidden" value="done" name="op">
     <input type="submit" value="Send">
   </form>
</html>

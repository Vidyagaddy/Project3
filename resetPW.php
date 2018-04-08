  <?php 
  if(!isset($_POST['op'])){
  ?>
  <form method="post" action="resetPW.php">
    <input type="text" name="user" placeholder="Please enter username"/> <br>
      <input type="password" name="newPass" placeholder="Please enter new password"/> <br>
      <input type="password" name="newPass2" placeholder="Reenter new password"/> <br>
      <input type="hidden" value="done" name="op">
     <input type="submit" value="Send">
   </form>
   <?php }
   else{
    if($_POST['newPass'] == $_POST['newPass2']){
        $query = \DB::update('logins');
        $query -> set(array('password'=> md5($_POST['newPass'])));
        $query -> where('username', '=',$_POST['user']);
       
        $query -> execute();
        Response::redirect('/index.php/sc/login');
    }
    else{
        echo 'Invalid entry';
    }
   } ?>

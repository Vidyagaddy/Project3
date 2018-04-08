
  <h2>
	<h3> Create a new attraction </h3>
 <form method="post" action="admin.php">
      <input type="text" name="name" placeholder="Attraction Name"/>
      <br><br>
       <textarea name="description" rows="5" cols="40" placeholder = 'Your description goes here'></textarea><br/>
       <input type="file" name = "image" accept="image/*">
     <input type="hidden" value="done" name="op">
     <input type="submit" value="Send">
   </form>
   <?php if(isset($_POST['op'])){
        echo 'Attraction Successfully Added to Database';
	}?>
   
    <h3> Remove Attraction from Site </h3>
        <span class="floatRight">
        <form method="post" action="admin.php">
      <input type="text" name="name" placeholder="Attraction Name"/>
     <br>
     <input type="hidden" value="done" name="op2">
     <input type="submit" value="Remove Attraction">
   </form>
	</span>
	<?php if(isset($_POST['op2'])){
        echo 'Attraction Successfully Removed';
	}?>

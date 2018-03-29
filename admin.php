<h3> Create a new attraction </h3>
 <form method="post" action="admin.php">
      <input type="text" name="name" placeholder="Attraction Name"/>
      <br><br>
       <textarea name="description" rows="5" cols="40" placeholder = 'Your description goes here'></textarea><br/>
       <input type="file" name = "image" accept="image/*">
     <input type="hidden" value="done" name="op">
     <input type="submit" value="Send">
   </form>
   <?php 
    if(isset($_POST['op'])){
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $img = $_POST['image'];
        // what is DOCROOT?
        if (!File::exists(DOCROOT.'/attractions.txt')){
            File::create(DOCROOT, 'attractions.txt', $name.$desc.$img);
        }
        else{
            File::update(DOCROOT, 'attractions.txt',$name.$desc.$img);
        }
   }
   ?>
   <h3> Add Attraction to Site </h3>
        ????
    <h3> Remove Attraction from Site </h3>
        ????

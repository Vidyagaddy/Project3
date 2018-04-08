
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
   
   <h3> Add Attraction to Site </h3>

            <span class="floatRight">
            <?php 
            foreach($attrs as $attr){
            	?><a href="<?=Uri::create('index.php/sc/view'); ?>"><?php $attr -> title ?></a>
        	<?php } ?>
        </h2>


      
    <h3> Remove Attraction from Site </h3>
        <span class="floatRight">
		<a href="<?=Uri::create('demo/delete/'.$attr->attrID); ?>"
		   onclick="return confirm('Are you sure you want to delete this?');">&#x1f5d1; Delete</a>
	</span>

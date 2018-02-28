
<h2> Welcome </h2>
<div class="body">
        <p>All important South Carolina attractions found here: </p>
        <div id=attractions>
		<a href="<?=Uri::create('index.php/sc/island'); ?>">
             <?php echo Asset::img("Hilton_Head_Island.jpg",array("width" => "200px"));?>
             
		</a>
    
         <span style ="margin-left: 100px">
			<a href="<?=Uri::create('index.php/sc/beach'); ?>">
             <?php echo Asset::img("Myrtle_Beach.jpg", array("width" => "200px"));?>
           
			</a>
        </span>
          <span style ="margin-left: 100px">
			<a href="<?=Uri::create('index.php/sc/ufo'); ?>">
             <?php echo Asset::img("UFO.jpg", array("width" => "200px"));?>
   
			</a>
        </span>
        <br>
        Hilton Head Island <span style="margin-left: 100px"> Myrtle Beach </span><span style="margin-left: 150px"> UFO Welcome Center </span>
        </div>
        
</div>


<h2> Welcome </h2>
<div class="body">
        <p>All important South Carolina attractions found here: </p>
        <div id=attractions>
        <span style ="margin-left: 50%">
		<a href="<?=Uri::create('index.php/sc/island'); ?>">
             <?php echo Asset::img("Hilton_Head_Island.jpg",array("width" => "500px"));?>
             <figcaption style="margin-left: 50%">Hilton Head Island</figcaption>
		</a>
		
			<figcaption style="font-size: 20px; margin-left:50%"><a href="https://www.viator.com/Hilton-Head-Island/d31480-ttd"> Hilton Head Source </a></figcaption>
        </span>
         <span style ="margin-left: 50%">
			<a href="<?=Uri::create('index.php/sc/beach'); ?>">
             <?php echo Asset::img("Myrtle_Beach.jpg", array("width" => "500px"));?>
             <figcaption style="margin-left: 50%">Myrtle Beach</figcaption>
           
			</a>
			
			<figcaption style="font-size: 20px; margin-left:50%"><a href="https://www.cabanashores.com/"> Myrtle Beach Source </a></figcaption>
        </span>
          <span style ="margin-left: 50%">
			<a href="<?=Uri::create('index.php/sc/ufo'); ?>">
             <?php echo Asset::img("UFO.jpg", array("width" => "500px"));?>
            <figcaption style="margin-left: 50%">UFO Welcome Center</figcaption>
			</a>
			<figcaption style="font-size: 20px; margin-left:50%"><a href="https://www.roadsideamerica.com/story/10911"> UFO Source </a></figcaption>
        </span>
        <br>
        </div>
        
</div>

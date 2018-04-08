
<h2> Welcome </h2>
<div class="body">

        <p>All important attractions found here: </p>
        <div id=attractions>
        <?php foreach($attrs as $attr){?>
        
        <span style ="margin-left: 50%">
        <?php $attr['title'];?>
		<a href="<?=Uri::create('index.php/sc/view/'.$attr['attrID']); ?>">
             <?php echo Asset::img($attr['image'],array("width" => "500px"));?>
             <figcaption style="margin-left: 50%"><?php $attr['title'];?></figcaption>
		</a>
        </span>
       
        <?php } ?>
        </div>
        
        </div>


<h2> Welcome </h2>
<div class="body">

        <p>All important attractions found here: </p>
        <?php 
        $adminCheck = false;
        foreach($logins as $login){
            if($login['username'] == $username && $login['id'] == 1){
                $adminCheck = true;
                ?> <a href='<?=Uri::create('index.php/sc/admin');?>'>Go to Admin Page </a> <?php
                break;
            }
        }
        if($adminCheck == false){?>
        <a href='<?=Uri::create('index.php/sc/brochure');?>'>+ Get Brochure </a>
        <?php } ?>
        <div id=attractions>
        <?php foreach($attrs as $attr){?>
    
        <span style ="margin-left: 50%">
		<a href="<?=Uri::create('index.php/sc/view/'.$attr['attrID']); ?>">
             <?php echo Asset::img($attr['image'],array("width" => "500px"));?>
             <figcaption style="margin-left: 50%"><?php echo $attr['title'];?></figcaption>
		</a>
        </span>
       
        <?php } ?>
        </div>
        
        </div>

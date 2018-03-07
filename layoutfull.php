<!DOCTYPE html>
<?php
//	session_start();
?>
<html>
        <head>
                <meta charset="utf-8">
                <title>South Carolina</title>
                <?php echo Asset::css('style.css'); ?>
                 
        </head>
        <div class="sidebar">
                <h1>
                        <ul><br><br><br>
                                <li><a href="<?=Uri::create('index.php/sc/index'); ?>">Home</a></li>

                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/ufo'); ?>">UFO Welcome Center</a></li>

                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/beach'); ?>">Myrtle Beach</a></li>

                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/island'); ?>">Hilton Head Island</a></li>
                                
                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/login'); ?>">Login</a></li>

                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/about'); ?>">About Us</a></li>
                        </ul>   
                        </h1>
                </div>
        <body>
                <div id="header">
					<h1>South Carolina
                        <div id="logo">
							<?php echo Asset::img("SC_Logo.png",array("width" => "60"));?>
				</div></h1>

                </div> 
               
                <!--$content is called by the controller located in fuel/app/classes/controller-->

                <div id="body">
                        <?=$content; ?>
                </div>
               <br>
                <div id="footer">
                        This site is part of a <a href="https://www.cs.colostate.edu/~ct310/">CT310</a> Course Project <a href="<?=Uri::create('index.php/sc/logout'); ?>">Logout</a></li>
			
                </div>
        </body>
</html>

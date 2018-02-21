<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>South Carolina</title>
                <?php echo Asset::css('style.css'); ?>
        </head>
        <body>
                <div id="header">
                        <h1>South Carolina</h1>
                </div> 
                <nav class="navigation">
                        <ul>
                                <li><a href="<?=Uri::create('index.php/sc/index'); ?>">S</a></li>
                                <li><a href="<?=Uri::create('index.php/sc/index'); ?>">U</a></li>
                                <li><a href="<?=Uri::create('index.php/sc/index'); ?>">C</a></li>
                                <li><a href="<?=Uri::create('index.php/sc/index'); ?>">K</a></li>
                                <li><a href="<?=Uri::create('index.php/sc/index'); ?>">S</a></li>
                        </ul>   
                </nav>
                <!--$content is called by the controller located in fuel/app/classes/controller-->
                <div id="body">
                        <?=$content; ?>
                </div>

                <div id="footer">
                        This site is part of a <a href="https://www.cs.colostate.edu/~ct310/">CT310</a> Course Project
                </div>
        </body>
</html>

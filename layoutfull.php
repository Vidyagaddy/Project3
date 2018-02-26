<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>South Carolina</title>
                <?php echo Asset::css('style.css'); ?>
        </head>
        <body>
                <div id="header">
                        <h1>South    <tab>     Carolina</h1>
                </div> 
                <nav class="navigation">
                <h1>
                        <ul><br>
                                <li><a href="<?=Uri::create('index.php/sc/island'); ?>">S</a></li>
                                <br>
                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/ufo'); ?>">U</a></li>
                                <br>
                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/beach'); ?>">C</a></li>
                                <br>
                                <br>
                                <li><a href="https://www.top13.net/cute-kitten-pictures/5">K</a></li>
                                <br>
                                <br>
                                <li><a href="<?=Uri::create('index.php/sc/about'); ?>">S</a></li>
                        </ul>   
                        </h1>
                </nav>
                <!--$content is called by the controller located in fuel/app/classes/controller-->
                <div id="body">
                        <?=$content; ?>
                </div>
                <div id=logo>
<?=echo Asset::img("SC_Logo.png"); ?>
                </div>
                <div id="footer">
                        This site is part of a <a href="https://www.cs.colostate.edu/~ct310/">CT310</a> Course Project
                </div>
        </body>
</html>

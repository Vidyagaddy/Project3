<h2>
        <a href="<?=Uri::create('index.php/sc/index'); ?>">Demos</a>
        &raquo; View Demo Object
        <span class="floatRight">
                <a href="<?=Uri::create('index.php/sc/delete/'.$sc->id); ?>">&#x1f5d1; Delete</a>
        </span>
        <span class="floatRight">&nbsp;&nbsp;&nbsp;</span>
        <span class="floatRight">
                <a href="<?=Uri::create('index.php/sc/addEdit/'.$sc->id); ?>">&#x270E; Edit</a>
        </span>
        <span class="floatClear"></span>
</h2>
<div class="h2Content">
        ID: <?=$sc->id; ?><br />
        Name: <?=$sc->name; ?>
</div>


<h2>
        Index of Demos
        <span class="floatRight">
                <a href="<?=Uri::create('index.php/sc/addEdit'); ?>">+ Add Demo</a>
        </span>
        <span class="floatClear"></span>
</h2>
<div class="h2Content">
        <?php foreach($scs as $sc): ?>
                <a href="<?=Uri::create('index.php/sc/view/'.$sc->id); ?>">
                        <?=$sc; ?>
                </a><br />
        <?php endforeach; ?>
</div>


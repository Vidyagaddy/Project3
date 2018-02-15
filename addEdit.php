<h2>
        <a href="<?=Uri::create('index.php/sc/index'); ?>">Demos</a>
        &raquo; Add/Edit
</h2>
<div class="h2Content">
        Add or Edit
        <form method="post">
                <label for="id">ID</label>
                <input type="text" name="id" value="<?=isset($sc->id)?$sc->id:''; ?>" />
                <br />
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?=isset($sc->name)?$sc->name:''; ?>" />
                <br />
                <input type="submit" value="Add/Edit" />
        </form>
</div>


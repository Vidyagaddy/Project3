<h2>
	<a href="<?=Uri::create('index.php/sc/index'); ?>">Home</a>
	
	<br>
	<br>
	<br>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$.ajax("http://www.cs.colostate.edu/~"+$eid+"/ct310/index.php/federation/attraction/"+$id, {
    success: function(attr){
    	document.getElementById('name').innerHTML = attr.name;
         document.getElementById('desc').innerHTML = attr.desc;       
    }
    });
    $.ajax("http://www.cs.colostate.edu/~"+$eid+"/ct310/index.php/federation/attrimage/"+$id, {
    success: function(image){
         document.getElementById('image').innerHTML = image;       
    }
    });
}
</script>	
</h2>
	<h6> Title </h6>
		<p  id = 'name'></p>
	<h5> Description </h5>
	<p id="desc"></p>
	<br>
	<br>
	<div id="image">
	</div>

	<br>
	
	
	

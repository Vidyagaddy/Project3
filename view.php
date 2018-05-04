<h2>
	<a href="<?=Uri::create('index.php/sc/index'); ?>">Home</a>
	
	<br>
	<br>
	<br>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$.ajax("http://www.cs.colostate.edu/~"+"<?=$eid?>"+"/ct310/index.php/federation/attraction/"+<?=$id?>, {
    success: function(attr){
    	 document.getElementById('title').innerHTML = attr.name; 
         document.getElementById('desc').innerHTML = attr.desc;       
    }
    });
    
});
</script>	
</h2>
	<p id="title"></p>
	<p id="desc"></p>
	<br>
	<br>
	<p id="image">
		<img src = "http://www.cs.colostate.edu/~<?=$eid?>/ct310/index.php/federation/attrimage/<?=$id?>"></img>
		
	</p>

	<br>
	
	
	

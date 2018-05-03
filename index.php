
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
		<a href="<?=Uri::create('index.php/sc/view/'.$attr['attrID']); ?>"><?php echo $attr['title'];?>
		</a>
        </span>
       
        <?php } ?>
        </div>
        
        </div>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $.ajax("/~ct310/yr2018sp/master.json", {
        success: function(data){
         
            $.each(data,function(e){
                $.ajax("http://www.cs.colostate.edu/~"+data[e].eid+"/ct310/index.php/federation/status", {
                    success: function(status,textStatus){
                       if(status.status == "open"){
                            $.ajax("http://www.cs.colostate.edu/~"+data[e].eid+"/ct310/index.php/federation/listing", {
                            success: function(lists){
                                $.each(lists,function(i){
                                    var li = "";
                                    var list = document.getElementById('allattrs');
                                    li = "<li>"+lists[i].name+"</li>";
                                    var rr = list.
                                })
                            }
                       }
                    }
                });
             
            });
        }
            
    }); 
});

</script>
</head>
<body>
<table id = "allattrs" style="border: 1px solid black;">
<tr>
<th>Short Name </th><th>Long Name </th><th>Status </th>
</tr>
</table>
<ul id = "allattrs">
</ul>
</body>
</html>

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
                    success: function(status){
                       if(status.status == "open"){
                            $.ajax("http://www.cs.colostate.edu/~"+data[e].eid+"/ct310/index.php/federation/listing", {
                           
                            
                            success: function(lists){
                            	
                                $.each(lists,function(i){
                                    var rt = "";
                                    var table = document.getElementById('allattrs');
                                    var j = table.rows.length;
                                    rt = "<tr>";
                                    rt += "<td>";
                                    var php = '<?=Uri::create('index.php/sc/view');?>';
                                    var str = lists[i].name;
                                    rt+= str.link(php+"/"+data[e].eid+"/"+lists[i].id);
                                    rt+="</td>";
                                    rt+="</tr>";
                                    var rr = table.insertRow(j);
                                    rr.innerHTML = rt;
                                });
                               
                            }
                       });
                    }
                }
                });
            });
        }
            
    }); 
});

</script>
<h2> Welcome </h2>
</head>
<body>
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
        <br>
        <div id=attractions>
        <br>
        <table id = "allattrs" style="border: 1px solid black;">
        <tr>
        <th>All Attractions</th>
        </tr>
        </table>
        </div>
</body>
</html>

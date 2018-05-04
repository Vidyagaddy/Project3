<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.ajax("/~ct310/yr2018sp/master.json", {
        success: function(data){
         
            $.each(data,function(e){
                $.ajax("/~"+data[e].eid+"/ct310/index.php/federation/status", {
                    success: function(status,textStatus,xhr){
                        var rt = "";
                        var table = document.getElementById('allstatus');
                        var j = table.rows.length;
                        rt = "<tr>";
                        rt += "<td>"+data[e].nameShort +"</td>";
                        rt += "<td>"+data[e].nameLong+"</td>";                        
                        if(xhr.status != 200){
                            rt += "<td style= 'color: yellow;'>"+unknown+"</td>";
                        }
                        if(typeof(status) == 'string'){
                            var jstat = JSON.parse(status);
                            if(jstat.status == 'open'){
                            rt += "<td style='color:green'>"+jstat.status+"</td>";
                            }
                            else{
                            rt += "<td style='color:red'>"+jstat.status+"</td>";
                            }
                        }
                        else if(typeof(status) == 'object'){
                            if(status.status == 'open'){
                            rt += "<td style='color:green'>"+status.status+"</td>";
                            }
                            else{
                            rt += "<td style='color:red'>"+status.status+"</td>"; 
                            }
                        }
                        else{
                            rt += "<td style= 'color: yellow;'>"+unknown+"</td>";
                        }
                        rt += "</tr>";
                        var rr = table.insertRow(j);
                        rr.innerHTML = rt; 
                    }
                ,
                error: function(){
                    var rt = "";
                        var table = document.getElementById('allstatus');
                        var j = table.rows.length;
                        rt = "<tr>";
                        rt += "<td>"+data[e].nameShort +"</td>";
                        rt += "<td>"+data[e].nameLong+"</td>";
                        rt += "<td style= 'color: yellow;'>unknown+</td>";
                        rt += "</tr>";
                        var rr = table.insertRow(j);
                        rr.innerHTML = rt;
                        
                }
                });
             
            });
        }
            
    }); 
});
    /*var statusArray = new Array();
    $.when($.ajax("/~ct310/yr2018sp/master.json",{
        success: function(data){
            var len = data.length;
            for(j=len-1; j >= 0; j--){
                $.Deferred.then($.ajax("http://www.cs.colostate.edu/~"+data[j].eid+"/ct310/index.php/federation/status",{
                success:function(d){
                    if(typeof(d) == 'string'){
                        var jd = JSON.parse(d);
                        statusArray.push(jd.status);
                    }
                    else{
                        statusArray.push(d.status);
                    }
                }
                }));
            }
        }
    }));
    $.ajax("/~ct310/yr2018sp/master.json",{
        success: function(data){
            var len = data.length;
            for(j=len-1; j >= 0; j--){
                var rt = "";
                var table = document.getElementById('allstatus');
                var i = table.rows.length;
                rt = "<tr>";
                rt += "<td>"+data[j].nameShort +"</td>";
                rt += "<td>"+data[j].nameLong+"</td>";
                rt += "<td>"+statusArray[j]+"</td>";
               rt += "</tr>";
                var rr = table.insertRow(i);
                rr.innerHTML = rt; 
        }
        }
    });
});
function addRow(data,status){
    var rt = "";
    var table = document.getElementById('allstatus');
    var i = table.rows.length;
    var len = data.length;
    rt = "<tr>";
    rt += "<td>"+data.nameShort +"</td>";
    rt += "<td>"+data.nameLong+"</td>";
    if(typeof(status) == 'object'){
        if(typeof(status) == 'string'){
            var jdata = json_encode(status);
            rt += "<td>"+jdata.status+"</td>";
        }
    }
    rt += "</tr>";
    var rr = table.insertRow(i);
    rr.innerHTML = rt;
}
*/
</script>
</head>
<body>
<table id = "allstatus" style="border: 1px solid black;">
<tr>
<th>Short Name </th><th>Long Name </th><th>Status </th>
</tr>
</table>
</body>
</html>


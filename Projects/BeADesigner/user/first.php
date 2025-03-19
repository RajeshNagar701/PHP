
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>First Page</title>
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

 function getSecond(val)
 {
	 //alert(val);
	 $.ajax({
		 type: "GET",
		 url: "second.php",
		 data: 'image='+val,
		 success: function(data)
		{
			//$("#state").html(data);
		}
	});
  }
  </script>
</head>
<body>
    <form id="form1">
    <div style="width:100%; height:300px; border:2px solid black;">
        
        <div id="div1" style="width:49%; height:280px; float:left;">
            <center>
           <a href="second.php?image=images/prv1.jpg"> <img ID="ImageButton1" Height="275px" src="images/prv1.jpg" Width="271px" /></a>
            </center>
        </div>

           <div id="div2" style="width:49%; height:280px; float:left;">
               <center>
<a href="second.php?image=images/prv2.jpg"> <img ID="ImageButton2" Height="275px" src="images/prv2.jpg" Width="271px" /></a>
                        
			 
</center>
        </div>
    
    </div>
    </form>
</body>
</html>

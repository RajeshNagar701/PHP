
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
  
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
    <script>
        $(document).ready(function () {

            $("#txt1").keydown(function () {

                $("#lbl1").html($("#txt1").val());
            });


            $("#txt2").keydown(function () {

                $("#lbl2").html($("#txt2").val());
            });
            $("#lbl1").draggable();
            $("#lbl2").draggable();
            $("#img1").resizable();
			$("#img1").draggable();
        });
    </script>
    <style>
        #lbl1 {
            position: absolute;
            margin-top: 17%;
            margin-left: -70px;
            background-color:transparent;
        }

         #img1 {
            position: absolute;
            margin-top: 19%;
            margin-left: -40px;
            width:100px;
            height:100px;
        }
          #lbl2 {
            position: absolute;
            margin-top: 28%;
            margin-left: -70px; background-color:transparent;
        }
		.xyz{
			background-color:#f00;
			
			
		}
		
    </style>
</head>
<body>
    <form id="form1">
        <div style="width: 99%; height: 640px; border: 2px solid black;">

            <div id="div1" style="width: 30%; height: 498px; float: left;">
                Enter Top Side Text :<br />
                <br />
                <input type="text" id="txt1"  />
                <br />
                <br />
                <br />
                Upload Image :<br />
                <br />
                <input type="file" ID="FileUpload1" name="FileUpload1" Height="28px" Width="237px" />
                <br />
                <br />
                <input type="button" ID="Button1" name="Button1" value="Button1"/>
                <br />
                <br />
                Enter bottom Side Text :<br />
                <br />
                <input type="text" id="txt2" />
                <br />
                <br />
				<?php 
				if(isset($_REQUEST['image']))
				{
						$i=$_REQUEST['image'];
				}					?>
                <img ID="Image1" Height="207px" Width="205px" src="<?php echo $i;?>"/>
            </div>

            <div id="div2" style="width: 49%; height: 280px; float: left;">
                <center style="height: 500px">
                    
                    
                    <div style="width:600px; height:600px; background-image:url('images/tshirt1.jpg'); background-repeat:no-repeat;">
                        
                        <span id="lbl1">

						</span>
						
                       <img ID="img1" class="xyz" src="<?php echo $i;?>"/>
					   <div style="background-color:pink; margin-top:200px;    overflow: hidden;
    position: absolute;">
					   </div>
					   
                        <span id="lbl2"/>
						</span>
						
						
                    </div>
                   
</center>
            </div>

        </div>
    </form>
</body>
</html>

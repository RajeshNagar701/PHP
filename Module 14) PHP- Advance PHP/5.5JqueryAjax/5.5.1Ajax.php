<!--Jquery Ajax for fetching City from State -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function GetState(e){
   $.ajax({
     type:'post',
     url:'ajaxrequest.php',
     data:{'mitesh':e},
     success:function(responsedata){
        // alert(responsedata);
        $("#state").html(responsedata);
     }
   }); 
}</script>
<table align="center" border="2">
    <tr>
        <td>Country</td>
        <td>
            <select onchange="GetState(this.value)" name="country" id="country">
                <option value="">--select country-- </option>
                <option value="1">India</option>
                <option value="2">USA</option>
            </select>
        </td>

    </tr>
    <tr>
        <td>State</td>
        <td>
            <select name="state" id="state">
                <option value="">--select state-- </option>
            </select>
        </td>
        
    </tr>
</table>

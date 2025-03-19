<?php 
// PHP program to describes header function 

// Redirect the browser 
header("Location: http://www.facebook.com"); 

header("refresh:2;http://www.facebook.com"); 


// The below code does not get executed 
// while redirecting 



// PHP program to describes header function 
  
// Set a past date 
header("Expires: Sun, 25 Jul 1997 06:02:34 GMT"); 
header("Cache-Control: no-cache"); 
header("Pragma: no-cache"); 
?> 
  
<html> 
    <body> 
        <p>Hello World!</p> 
      
        <!-- PHP program to display 
        header list --> 
        <?php 
            print_r(headers_list()); 
        ?> 
    </body> 
</html> 
?> 

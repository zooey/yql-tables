   1. <?php  
   2.   // Script: forma.php, called by forma.html.  
   3.   $count = 0;  
   4.   echo ("<p>Request method: ".$_SERVER['REQUEST_METHOD']."</p>" );  
   5.   echo "<p>The following data has been submitted by the form:</p>";  
   6.   if (count($_GET) != 0){  
   7.     echo "<p>Method: GET</p>";  
   8.     foreach ($_GET as $key=>$value)  {  
   9.       echo "<p>Data".$count." : "."Key=".$key.", "."Value=".$value."</p>";  
  10.       $count ++;  
  11.     }  
  12.   }  
  13.   else if (count($_POST) != 0){  
  14.     echo "<p>Method: POST</p>";  
  15.     foreach ($_POST as $key=>$value)  {  
  16.       echo "<p>Data".$count." : "."Key=".$key.", "."Value=".$value."</p>";  
  17.       $count ++;  
  18.     }  
  19.   }  
  20.   else if (count($_PUT) != 0){  
  21.     echo "<p>Method: PUT</p>";  
  22.     foreach ($_PUT as $key=>$value)  {  
  23.       echo "<p>Data".$count." : "."Key=".$key.", "."Value=".$value."</p>";  
  24.       $count ++;  
  25.     }  
  26.   }  
  27.   else {  
  28.     echo "<p>There is no data.</p>";  
  29.   }  
  30.   
  31.   echo "<p>End of program.</p>";  
  32.     
  33. ?>  

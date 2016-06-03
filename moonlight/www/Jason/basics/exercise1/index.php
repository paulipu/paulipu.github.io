<html>
 <head>
  <title>Jason's Work Bench</title>
 </head>
 <body bgcolor=white text=black>
  <h2>Exercise 1</h2>
  by Jason </a>
<?php
$time_offset ="0"; // Change this to your time zone
$time_a = ($time_offset * 120);
$time = date("h:i:s",time() + $time_a);
echo 'Current time is : '.$time;
//error_log("About to divide by zero",0);
//$divide=4;
//$error=divide/0;
?>
  <hr>
  <address>
    <a href="mailto:jasonporter@stanford.edu">jasonporter@stanford.edu</a>
  </address>
 </body>
</html>


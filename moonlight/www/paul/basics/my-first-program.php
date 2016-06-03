<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</meta>
<title>
Current Time
</title>

</head>

<body>

<?php
$time_offset =0; // Change this to your time zone
$time_a = ($time_offset * 120);
$time = date("h:i:s",time() + $time_a);
echo 'Current time is : '.$time;
//$zero = 0;
//error_log("About to divide by zero:", 0);
//$zero_error = 4/$zero;
?>

<hr>
<address>
<a href="mailto:paul@cuffdom.com">
Paul Cuff
</a>
</address>

</body>
</html>

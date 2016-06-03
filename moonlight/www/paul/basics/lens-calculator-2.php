<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</meta>
<title>
Lens Length
</title>

</head>

<body>

<h2>
<?php
$dist = $_REQUEST["dist"];
$height = $_REQUEST["height"];
$dist_in = $dist*12;
$height_in = $height*12;
$mag = 1.5/$height_in;
$focal_in = $dist_in/(1/$mag + 1);
$focal_mm = $focal_in*25.4;
echo 'You need ' . round($focal_mm) . ' mm.';
?>
</h2>

<a href="lens-calculator-3.php">
View source code for this page
</a>

<hr>
<address>
<a href="mailto:paul@cuffdom.com">
Paul Cuff
</a>
</address>

</body>
</html>

<html>
 <head>
  <title>Jason's Work Bench</title>
 </head>
 <body bgcolor=white text=black>
  <h2>Exercise 3</h2>
  by Jason </a>
<p>
<?php
$magnification =1.5/( $_REQUEST["subject_size_in_feet"]*12);
$lens_focal_length_in_feet = $_REQUEST["distance_in_feet"]/((1/$magnification)+1);
echo "the focal length is:".$lens_focal_length_in_feet. "[ft]";
?>
  <hr>
  <address>
    <a href="mailto:jasonporter@stanford.edu">jasonporter@stanford.edu</a>
  </address>
 </body>
</html>


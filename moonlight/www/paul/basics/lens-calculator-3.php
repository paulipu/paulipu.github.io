<?php
include("php_source_display.php");


echo  "<!DOCTYPE  html  PUBLIC  \"-//W3C//DTD  XHTML  1.0  Strict//EN\"  \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
echo  "<?xml  version=\"1.0\"  encoding=\"UTF-8\"  ?>\n";
echo  "<html  xmlns=\"http://www.w3.org/1999/xhtml\"  xml:lang=\"en\">\n";
echo  "<head>\n";
echo  "<meta  name=\"author\"  content=\"Alan  Dykes\"  />\n";
echo  "<meta  name=\"description\"  content=\"A  page  about  web  programming  -  First  released  project:  Display  php  source  code  formatted\"  />\n";
echo  "<meta  name=\"keywords\"  content=\"php,css,xhtml,programming,web  page,design,code,alan  dykes\"  />\n";
echo  "<meta  http-equiv=\"Content-Type\"  content=\"text/html;charset=utf-8\"  />\n";
echo  "<title>alandykes.com  -  Display  PHP  code  formatted  in  HTML</title>\n";
echo  "<style  type=\"text/css\"  media=\"all\">\n";
echo  "            @import  \"php_source_display.css\";\n";
echo  "</style>\n";
echo  "</head>\n";
echo  "<body>\n";
echo  "<div  class=\"container\">\n";
echo  "<p  style=\"font-size:  18pt;\">Source Code for lens-calculator-2.php</p>";
echo  displayHTMLphp("lens-calculator-2.php");
echo  "<p>\n";
echo  "<a  href=\"http://validator.w3.org/check/referer\"><img  src=\"http://www.w3.org/Icons/valid-xhtml10\"  alt=\"Valid  XHTML  1.0!\"  height=\"31\"  width=\"88\"  /></a>\n";
echo  "        </p>\n";
echo  "</div>\n";
echo  "</body>\n";
echo  "</html>\n";
?>
<?php

/*Display  PHP  source  code
//Written  by  Alan  Dykes:  alanweb@alandykes.com
//
//A  function  to  format  PHP  code  for  "pretty"  display
//Also  has  an  associated  CSS  file  for  display  properties
*/

function  displayHTMLphp($phpinputfile)  {
    //First  lets  open  up  the  file
    if  (!file_exists($phpinputfile))  {exit('PHP  source  display  not  a  valid  input  file');}
    $php_source  =  file_get_contents($phpinputfile);
//Now  lets  convert  the  string  to  an  array  line  by  line
$php_source_len  =  strlen($php_source);
$string_position  =  0;
$line_number  =  0;
$formatted_string  =  "";

//Some  initial  values
/*
$comments  =  "none";
for  ($string_position  =  )  {
//Check  for  comments  first

}	
*/
//Replace  greater  than,  less  than,  and  ampersands  (The  order  of  this  is  important.    If  the  ampersand  is  last,  it  will  overwrite  the  other  reserved  symbols)
$php_source  =  str_replace("&","&amp;",$php_source);
$php_source  =  str_replace("<","&lt;",$php_source);
$php_source  =  str_replace(">","&gt;",$php_source);
$php_source  =  str_replace("  ","&nbsp;  ",$php_source);
$php_source  =  str_replace(chr(09),  "&nbsp;  &nbsp;  &nbsp;  &nbsp;  ",$php_source);

$source_string_pos  =  0;
//Let's  search  for  a  starting  <?php  or  a  <?

do  {
    $source_string_pos  =  set_formatting($php_source,  $source_string_pos);
}  while  (strlen($php_source)  >  $source_string_pos);

$php_source_len  =  strlen($php_source);

array($php_source_lines);
$carriage_return_string  =  chr(13).chr(10);

/*  OLD  LINE  NUMBER  CODE:  Displayed  Line  Numbers  as  part  of  source  code.
do  {
    $carriage_return_position  =  strpos($php_source,  $carriage_return_string,  $string_position);
    if  ($carriage_return_position  ==  false)  {
        $php_source_lines[$line_number]  =  "<span  class  =\"line_number\">[".($line_number+1)."]  =>  </span>".substr($php_source,  $string_position,  $php_source_len  -  $string_position);
}  else  {
    $php_source_lines[$line_number]  =  "<span  class  =\"line_number\">[".($line_number+1)."]  =>  </span>".substr($php_source,  $string_position,  $carriage_return_position  -  $string_position)."<br  />";
    $string_position  =  $carriage_return_position  +  strlen($carriage_return_string);
}
$line_number++;
}  while  ($carriage_return_position  <>  false  or  $line_number  >  $php_source_len);



$php_source  =  "";

//Break  array  back  out  into  a  single  string

for  ($i=1;$i<=count($php_source_lines);$i++)  {
    $php_source  =  $php_source.$php_source_lines[$i-1]."\n";
}
*/	

//New  line  number  code:  should  make  seperate  divs  for  code  and  line  numbers,  so  its  easy  to  copy  the  code.
$number_lines  =  0;
$carriage_return_position  =  0;
do  {
    $carriage_return_position  =  strpos($php_source,  $carriage_return_string,  $carriage_return_position+1);
    $number_lines++;
}  while  ($carriage_return_position  <>  false);
$php_source  =  str_replace($carriage_return_string,"<br  />",  $php_source);

$line_numbers_html  =  "<div  class=\"line_numbers\">";
for  ($i=1;  $i<=$number_lines;  $i++)  {
    $line_numbers_html  =  $line_numbers_html."[$i]  =>  <br  />";
}
$line_numbers_html  =  $line_numbers_html."</div>\n";

$php_source_output  =  "<div  class=\"php_source_listing\"><table  class=\"php_source_display_table\"><tr><td  nowrap>".$line_numbers_html."</td><td  nowrap><div  class=\"php_source\">".$php_source."</div></td></tr></table></div>\n";

return  $php_source_output;	

}


function  set_formatting(&$php_source_string,  $string_pos)  {


//Let's  check  the  character  to  see  if  there  is  anything  to  do

$first_character  =  substr($php_source_string,$string_pos,1);

  if  ($first_character  ==  "/")  {
        if  (substr($php_source_string,  $string_pos+1,1)  ==  "*")  {
    //Block  quote
    $string_end  =  strpos($php_source_string,"*/",$string_pos);
    $string_pos  =  replace_text("block_quote",  substr($php_source_string,$string_pos,$string_end-$string_pos+2),  $string_pos,  $php_source_string);	                     
}  elseif  (substr($php_source_string,  $string_pos+1,1)  ==  "/")  {
    //Line  Comment
    $string_end  =  strpos($php_source_string,chr(13).chr(10),$string_pos);	
$string_pos  =  replace_text("line_quote",  substr($php_source_string,$string_pos,$string_end-$string_pos),  $string_pos,  $php_source_string);	                     
}
//Probably  a  better  way  to  do  this  next  set.    Should  look  into  it
}  elseif  ($first_character  ==  "."  or  $first_character  ==  ","  or  $first_character  ==  "("  or  $first_character  ==  ")"  or  $first_character  ==  "["  or  $first_character  ==  "]"  or  $first_character  ==  "?"  or  $first_character  ==  "!"  or  $first_character  ==  "+"  or  $first_character  ==  "-"  or  $first_character  ==  "*"  or  $first_character  ==  "/"  or  $first_character  ==  "\\"  or  $first_character  ==  "%"  or  $first_character  ==  "^"  or  $first_character  ==  "&"  or  $first_character  ==  "="  or  $first_character  ==  "{"  or  $first_character  ==  "}"  or  $first_character  ==  "|"  or  $first_character  ==  ":"  or  $first_character  ==  ";")  {
    //Check  for  our  special  HTML  characters
    if  (strtolower(substr($php_source_string,  $string_pos,4))  ==  "&lt;"  or  strtolower(substr($php_source_string,  $string_pos,4))  ==  "&gt;"  or  strtolower(substr($php_source_string,  $string_pos,5))  ==  "&amp;"  or  strtolower(substr($php_source_string,  $string_pos,6))  ==  "&nbsp;")  {
        
if  (strtolower(substr($php_source_string,  $string_pos,5))  ==  "&amp;")  {
$string_pos  =  replace_text("special_character",  substr($php_source_string,$string_pos,5),  $string_pos,  $php_source_string);	                       
}  elseif  (strtolower(substr($php_source_string,  $string_pos,6))  ==  "&nbsp;")  {
    $string_pos  =  $string_pos+5;	     
}  else  {
    $string_pos  =  replace_text("special_character",  substr($php_source_string,$string_pos,4),  $string_pos,  $php_source_string);	                 
}
//If  none,  then  do  color  it  black
}  else  {
$string_pos  =  replace_text("special_character",  $first_character,  $string_pos,  $php_source_string);	                 
}
}  elseif  ($first_character  ==  '"'){
    //Simple  strings.    Need  to  do  more  work  with  this
    //Look  for  next  quotation  mark,  skip  \"
    $final_quote  =  false;
$temp_string_pos  =  $string_pos+1;
    do  {
//Look  for  an  escape  sequence.  Need  to  look  up  all  sequences  at  some  point,  for  now  a  simple  skip  next  should  do.  .  .  hopefully
if  (substr($php_source_string,  $temp_string_pos,1)  ==  "\\")  {
    $temp_string_pos  =  $temp_string_pos+2;
}  elseif  (substr($php_source_string,  $temp_string_pos,1)  ==  '"')  {
    $final_quote  =  true;
}  else  {$temp_string_pos++;}
}  while  ($temp_string_pos  <  strlen($php_source_string)  and  $final_quote  ==  false);

$next_quotation_mark  =  $temp_string_pos;
    $source_string  =  substr($php_source_string,  $string_pos,  $next_quotation_mark-$string_pos+1);
$string_pos  =  replace_text("string",  $source_string,  $string_pos,  $php_source_string);	                         
}  elseif  ($first_character  ==  "'"){
    //Simple  strings.    Need  to  do  more  work  with  this
    $next_quotation_mark  =  strpos($php_source_string,"'",  $string_pos+1);
    $source_string  =  substr($php_source_string,  $string_pos,  $next_quotation_mark-$string_pos+1);
$string_pos  =  replace_text("string",  $source_string,  $string_pos,  $php_source_string);	                 
}else  {
    //Look  for  reserved  keywords.  .  .  Currently  looks  for  spaces.    Need  to  change  to  use  regex  and  look  for  next  non  alpha  character
    $next_space_pos  =  strpos($php_source_string,"&nbsp;",  $string_pos);
    $next_word  =  substr($php_source_string,  $string_pos,  ($next_space_pos-$string_pos));  
    
    if  ($next_word  ==  "or"  or  $next_word  ==  "and"  or  $next_word  ==  "for"  or  $next_word  ==  "if"  or  $next_word  ==  "else"  or  $next_word  ==  "elseif"  or  $next_word  ==  "do"  or  $next_word  ==  "while"  or  $next_word  ==  "true"  or  $next_word  ==  "flase"  or  $next_word  ==  "exit"  or  $next_word  ==  "array"  or  $next_word  ==  "function"  or  $next_word  ==  "global"  or  $next_word  ==  "echo"  or  $next_word  ==  "include"  or  $next_word  ==  "return"  or  $next_word  ==  "foreach")  {
        $string_pos  =  replace_text("reserved_word",  $next_word,  $string_pos,  $php_source_string);	         
}
}

return  $string_pos+1;	

}

function  replace_text($div_class,  $source_string,  $string_pos,  &$original_php_source_string)  {
//A  little  function  to  help  clean  up  some  of  the  code
    
$string_temp  =  "<div  class=\"".$div_class."\">";
$string_temp  =  $string_temp.$source_string."</div>";
$new_string  =  substr($original_php_source_string,0,$string_pos).$string_temp.substr($original_php_source_string,$string_pos+strlen($source_string));
$original_php_source_string  =  $new_string;
$string_pos  =  $string_pos+strlen($string_temp)-1;    

return  $string_pos;
}



?>
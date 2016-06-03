<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</meta>
<title>
Book Search Results
</title>

</head>

<body>

<?php
$isbn = $_REQUEST["isbn"];
$bn_url = "http://search.barnesandnoble.com/booksearch/isbninquiry.asp?ean=" . $isbn;
$powells_url = "http://www.powells.com/biblio?isbn=" . $isbn;
$amazon_url = "http://www.amazon.com/dp/" . $isbn;

if (! ($xmlparser = xml_parser_create()) )
{
	die ("Cannot create parser");
}
?>

<h2>
<a href="
<?php
echo $bn_url;
?>
">
<?php
echo $bn_url;
?>
</a>
</h2>

<h2>
<a href="
<?php
echo $powells_url;
?>
">
<?php
echo $powells_url;
?>
</a>
</h2>

<h2>
<a href="
<?php
echo $amazon_url;
?>
">
<?php
echo $amazon_url;
?>
</a>
</h2>

<a href="books-3.php">
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

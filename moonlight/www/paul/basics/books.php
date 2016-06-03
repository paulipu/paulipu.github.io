<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</meta>
<title>
Book Search
</title>

</head>

<body>

<h2>Book Search - title, price, availability</h2>

<form name="input" action="books-2.php" method="get">
ISBN:
<input type="text" name="isbn" value="<?php echo $_REQUEST["val"]; ?>">
<input type="submit">
</form>

<br>
<p>
May I suggest a few:  <a href="?val=0590353403">0590353403</a>, <a href="?val=0140260404">0140260404</a>, <a href="?val=0679762906">0679762906</a>, <a href="?val=1588750019">1588750019</a>.
</p>


<hr>
<address>
<a href="mailto:paul@cuffdom.com">
Paul Cuff
</a>
</address>

</body>
</html>

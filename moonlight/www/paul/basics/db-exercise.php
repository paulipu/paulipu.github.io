<html>

<body>


<?php
$dbhost = 'localhost';
$dbuser = 'moonlight';
$dbpassword = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpassword) or die('Error connecting to mysql');
echo "Connected to MySQL<br/>";

$dbname = 'paul_quotes';

mysql_select_db($dbname) or die('Error selecting database');
echo "Table selected<br/>";

if(isset($_REQUEST["author"]))
    $author = $_REQUEST["author"];
if(isset($_REQUEST["quote"]))
    $quote = $_REQUEST["quote"];
if(isset($quote)) {
    $insert_query = "insert into quotations ('author_name', 'quote') values ('$author', '$quote')";
    if(mysql_query($insert_query))
        echo "Successful entry.<br />";
    else
        echo "Entry not completed.<br />";
}

$result = mysql_query("select * from quotations") or die(mysql_error());
while ($row = mysql_fetch_array($result)){
  echo "Quote by " . $row['author_name'] . ":  " . $row['quote'] . "<br/>";
}
mysql_close($conn) or die('Error closing mysql connection');
echo "Connection closed<br/>";

?>

<h2>
Enter new quote below.
</h2>

<form action="db-exercise.php" method="get">
  <label for="author">Author name: </label>
  <input type="text" id="author" name="author"><br/>
  <label for="quote">Quotation: </label>
  <input type="text" id="quote" name="quote"><br/>
</form>

</body>

</html>

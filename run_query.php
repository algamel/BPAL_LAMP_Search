<?php 

mysql_connect('localhost', 'root', 'p')
or die("<p>Error connecting to database: " . mysql_error() . " </p>");

mysql_select_db('BPAL')
or die("<p>Error selecting the  BPAL database: " . mysql_error() . "</p>");

echo "<p>Connected to MySQL, and using the BPAL database</p>";

$query_text = $_REQUEST['query'];
$result = mysql_query($query_text);

if (!$result) {
die("<p> Error in executing the SQL Query " . $query_text . ": " .  mysql_error() . "</p>");
}

echo "<p>Results from your query: </p>";
echo "<ul>";
while ($row = mysql_fetch_row($result)) {
echo "<li><table>{$row[0]}</li>";
}
echo "</ul>";


?>



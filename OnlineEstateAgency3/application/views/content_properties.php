<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT property_id, name, place, description, images, added_by, price FROM properties';

mysql_select_db('estate');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "NAME: {$row['name']}  <br> ".
         "PLACE: {$row['place']} <br> ".
         "DESCRIPTION: {$row['description']} <br> ".
		 "PRICE: {$row['price']}  <br> ".
		 "ADDED BY AGENT: {$row['added_by']}  <br> ";
		echo '<img src="echo $row->images" height="250" width="250">';
		echo "<tr>"; 
		echo "<td><img src =\"" . $row['images']."\"></td>"; 
		echo "</tr>"; 
		"<br><br>";
		

		       
} 

mysql_close($conn);
?>
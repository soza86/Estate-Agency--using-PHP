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
		   echo "
		    <table border=1 cellpadding=5>
				<tr>
				<td>Property Name: </td>
				<td> {$row['name']} </td>
				</tr>
				<tr>
				<td>Property Location: </td>
				<td>{$row['place']} </td>
				</tr>
			</table>";
			
			echo "<br/><br/>";
		   
		    echo "
			<table border=1 cellpadding=5>
				<tr>
				<td>Description: </td>
				<td> {$row['description']} </td>
				</tr>
			</table>";
		    
			echo "<br/><br/>";
			
			echo "
		    <table border=1 cellpadding=5>
				<tr>
				<td>Sales Price (In Euros): </td>
				<td> {$row['price']} </td>
				</tr>
				<tr>
				<td>Added by agent: </td>
				<td>{$row['added_by']} </td>
				</tr>
			</table>";
			echo "<br/><br/>";
		
			$image=$row ['images'];
			echo '<img src="http://localhost/OnlineEstateAgency3/propertyimages/'.$image.'" width="400" height="200"';
			echo "<br/><br/><br/><br/>";
			echo "Ask the agency for more information".
			"<br/><br/>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
		       
} 

mysql_close($conn)
?>
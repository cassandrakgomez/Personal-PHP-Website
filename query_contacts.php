<?php
include("functions.php");
$dblink=db_connect("contact_data");
$sql="Select * from `contact_info`";
$result=$dblink->query($sql) or
	die("<h2>Something went wrong:$sql<br>".$dblink->error().'</h2>');
while($data=$result->fetch_array(MYSQLI_ASSOC)) //MYSQLI_NULL WOULD BE 1, 2, 3? why ASSOC?
{
	echo'<tr>';
	//echo'<td>'.$data['auto_id'].'</td>';
	echo'<td>'.$data['first_name'].'</td>';
	echo'<td>'.$data['last_name'].'</td>';
	echo'<td>'.$data['email'].'</td>';
	//echo'<td>'.$data['user_name'].'</td>';
	//echo'<td>'.$data['password'].'</td>';
	echo'<td>'.$data['phone'].'</td>';
	echo'<td>'.$data['comments'].'</td>';
	echo'</tr>';
}
?>
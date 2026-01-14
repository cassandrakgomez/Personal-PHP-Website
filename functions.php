<?php
function redirect($url)
{?>

	<script type="text/javascript">
		document.location.href="<?php echo $url;?>";
	</script>
<?php
 	die;
}

function db_connect($db){
	$hostname="localhost";
	$username="web_user";
	$password="!6r2W5@ZtE8bxr6O";
	$dblink= new mysqli($hostname, $username, $password, $db);
	if (mysqli_connect_error())
	{
		die("<h2>Something went wrong with our database connection!<br>".mysqli_connect_error()."</h2>");
	}
	return $dblink;
		
}
?>
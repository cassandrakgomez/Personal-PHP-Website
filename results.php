<script src="assets/js/jquery-3.5.1.js"></script>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include("functions.php");
echo '<div class="row pageintro">';
echo'<div class="column xl-6 lg-12">';
echo '<h3>Contact Form Results</h3>';
$dblink=db_connect("contact_data");
echo '<table class="table table-stripped">'; // change to your theme!! example code !!
echo '<thead>';
echo '<tr>';
//echo '<th>ID</th>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
//echo '<th>Username</th>';
//echo '<th>Password</th>';
echo '<th>Phone</th>';
echo '<th>Comments</th>';
echo'</tr>';
echo'</thead>';
echo'<tbody id="results">';
echo'</tbody>';
echo'</table>';
echo'</div>';
echo'</div>';
?>


<script type="text/javascript">
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-18-232-157-88.compute-1.amazonaws.com/hw19/query_contacts.php',
			success: function(data){
				$('#results').html(data); // equilevent to document.getElementById('results').innerHTML=data
			}	
		});
	}
	setInterval(function(){refresh_data();}, 500)
</script>

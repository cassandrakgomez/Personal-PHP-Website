<?php
session_start();
include("functions.php");
?>


<div class="row pageintro">
	<?php
		if (!isset($_POST['submit']))
		{
			echo '<form method="post" action="">';
			// FIRST NAME VERIFICATION HERE ////////
			if (isset($_GET['error']) && strstr($_GET['error'],"fn"))
			{
				echo '<div id = "fnGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="firstName">First Name:</label>';
				if (strstr($_GET['error'],"fnNull")) //check the error message for fnNull
				{
					echo '<input type="text" id="firstName" name="firstName">';
					echo '<span id="fnFeedback" class="help-block alert-box--error">First name cannot be blank!</span>';
				}
				if (strstr($_GET['error'], "fnInvalidChar"))
				{
					echo '<input type="text" id="firstName" name="firstName" value="'.$_SESSION['fnData'].'">';
					echo '<span id="fnFeedback" class="help-block alert-box--error">First name cannot contain invalid characters!</span>';
				}
				echo '</div>';
			}
			else //non error (default)
			{
				if ($_SESSION['fnData'] !="")
				{
					echo '<div id = "fnGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="firstName">First Name:</label>';
					echo '<input type="text" id="firstName" name="firstName" value="'.$_SESSION['fnData'].'">';
					echo '<span id="fnFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{
					echo '<div id = "fnGroup" class="contact-block">';
					echo '<label for="firstName">First Name:</label>';
					echo '<input type="text" id="firstName" name="firstName">';
					echo '<span id="fnFeedback" class="help-block"></span>';
					echo '</div>';
				}

			}
			//LAST NAME VERIFICATION HERE ///////////
			if (isset($_GET['error']) && strstr($_GET['error'],"ln"))
			{
				echo '<div id = "lnGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="lastName">Last Name:</label>';
				if (strstr($_GET['error'], "lnNull")) // check the error message for lnNull
				{
					echo '<input type="text" id="lastName" name="lastName">';
					echo '<span id="lnFeedback" class="help-block alert-box--error">Last name cannot be blank!</span>';
				}
				if (strstr($_GET['error'], "lnInvalidChar"))
				{
					echo '<input type="text" id="lastName" name="lastName" value="'.$_SESSION['lnData'].'">';
					echo '<span id="lnFeedback" class="help-block alert-box--error">Last name cannot contain invalid characters!</span>';
				}
				echo '</div>';
			}
			else //non error (default)
			{
				if ($_SESSION['lnData'] !="")
				{
					echo '<div id = "lnGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="lastName">Last Name:</label>';
					echo '<input type="text" id="lastName" name="lastName" value="'.$_SESSION['lnData'].'">';
					echo '<span id="lnFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{
					echo '<div id = "lnGroup" class="contact-block">';
					echo '<label for="lastName">Last Name:</label>';
					echo '<input type="text" id="lastName" name="lastName">';
					echo '<span id="lnFeedback" class="help-block"></span>';
					echo '</div>';
				}

			}

			// EMAIL VERIFICATION HERE ////////////////////
			if (isset($_GET['error']) && strstr($_GET['error'],"email"))
			{
				echo '<div id="emailGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="email">Email:</label>';
				if (strstr($_GET['error'], "emailNull")) // check the error message for emailNull
				{
					echo '<input type="email" id="email" name="email">';
					echo '<span id="emailFeedback" class="help-block alert-box--error">Email cannot be blank!</span>';
				}
				if (strstr($_GET['error'], "emInvalid"))
				{
					echo '<input type="email" id="email" name="email" value="'.$_SESSION['emData'].'">';
					echo '<span id="emailFeedback" class="help-block alert-box--error">Invalid Email!</span>';
				}
				echo '</div>';
			}
			else //non error (default)
			{
				if ($_SESSION['emData'] !="")
				{
					echo '<div id="emailGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="email">Email:</label>';
					echo '<input type="email" id="email" name="email" value="'.$_SESSION['emData'].'">';
					echo '<span id="emailFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{
					echo '<div id="emailGroup" class="contact-block">';
					echo '<label for="email">Email:</label>';
					echo '<input type="email" id="email" name="email">';
					echo '<span id="emailFeedback" class="help-block"></span>';
					echo '</div>';
				}
			}

			// PHONE VERIFICATION HERE ////////////////////
			if (isset($_GET['error']) && strstr($_GET['error'],"ph"))
			{
				echo '<div id="phoneGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="phone">Phone:</label>';
				if (strstr($_GET['error'], "phoneNull")) // check the error message for phoneNull
				{
					echo '<input type="tel" id="phone" name="phone">';
					echo '<span id="phoneFeedback" class="help-block alert-box--error">Phone number cannot be blank</span>';
				}
				if (strstr($_GET['error'], "phoneInvalidChar"))
				{
					echo '<input type="tel" id="phone" name="phone" value="'.$_SESSION['phoneData'].'">';
					echo '<span id="phoneFeedback" class="help-block alert-box--error">Invalid Phone Number!</span>';
				}
				echo '</div>';
			}
			else //non error (default)
			{
				if ($_SESSION['phoneData'] !="")
				{
					echo '<div id="phoneGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="phone">Phone:</label>';
					echo '<input type="tel" id="phone" name="phone" value="'.$_SESSION['phoneData'].'">';
					echo '<span id="phoneFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{
					echo '<div id="phoneGroup" class="contact-block">';
					echo '<label for="phone">Phone:</label>';
					echo '<input type="tel" id="phone" name="phone">';
					echo '<span id="phoneFeedback" class="help-block"></span>';
					echo '</div>';
				}
			}

			// USERNAME VERIFICATION HERE ////////////////////
			if (isset($_GET['error']) && strstr($_GET['error'],"user"))
			{
				echo '<div id="usernameGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="username">Username:</label>';
				if (strstr($_GET['error'], "userNull")) // check the error message for userNull
				{
					echo '<input type="text" id="username" name="username">';
					echo '<span id="usernameFeedback" class="help-block alert-box--error">Username cannot be blank</span>';
				}
				echo '</div>';
			}
			else //non error
			{
				if ($_SESSION['userData'] !="")
				{
					echo '<div id="usernameGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="username">Username:</label>';
					echo '<input type="text" id="username" name="username" value="'.$_SESSION['userData'].'">';
					echo '<span id="usernameFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{
					echo '<div id="usernameGroup" class="contact-block">';
					echo '<label for="username">Username:</label>';
					echo '<input type="text" id="username" name="username">';
					echo '<span id="usernameFeedback" class="help-block"></span>';
					echo '</div>';
				}
			}
			// PASSWORD VERIFICATION HERE ////////////////////
			if (isset($_GET['error']) && strstr($_GET['error'],"pass"))
			{
				echo '<div id="passwordGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="password">Password:</label>';
				if (strstr($_GET['error'], "passNull")) // check the error message for passNull
				{
					echo '<input type="password" id="password" name="password">';
					echo '<span id="passwordFeedback" class="help-block alert-box--error">Password cannot be blank</span>';
				}
				echo '</div>';
			}
			else //non error
			{
				if ($_SESSION['passData'] !="")
				{
					echo '<div id="passwordGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="password">Password:</label>';
					echo '<input type="password" id="password" name="password" value="'.$_SESSION['passData'].'">';
					echo '<span id="passwordFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{	
					echo '<div id="passwordGroup" class="contact-block">';
					echo '<label for="password">Password:</label>';
					echo '<input type="password" id="password" name="password">';
					echo '<span id="passwordFeedback" class="help-block"></span>';
					echo '</div>';
				}
			}
			// COMMENTS VERIFICATION HERE ////////////////////
			if (isset($_GET['error']) && strstr($_GET['error'],"comm"))
			{
				echo '<div id="commentsGroup" class="contact-block alert-box alert-box--error">';
				echo '<label for="comments">Comments:</label>';
				if (strstr($_GET['error'], "commNull")) // check the error message for commNull
				{
					echo '<input type="text" id="comments" name="comments">';
					echo '<span id="commentsFeedback" class="help-block alert-box--error">Comments cannot be blank</span>';
				}
				echo '</div>';
			}
			else //non error
			{
				if ($_SESSION['commData'] !="")
				{
					echo '<div id="commentsGroup" class="contact-block alert-box alert-box--success">';
					echo '<label for="comments">Comments:</label>';
					echo '<input type="text" id="comments" name="comments" value="'.$_SESSION['commData'].'">';
					echo '<span id="commentsFeedback" class="help-block"></span>';
					echo '</div>';
				}
				else 
				{	
					echo '<div id="commentsGroup" class="contact-block">';
					echo '<label for="comments">Comments:</label>';
					echo '<input type="text" id="comments" name="comments">';
					echo '<span id="commentsFeedback" class="help-block"></span>';
					echo '</div>';
				}
			}

			echo '<div class="contact-block">';
			echo '<button type="submit" name="submit" value="submit1" class="btn btn--primary">Submit</button>';
			echo '</div>';
			echo '</form>'; 
		}

		else
		{
			ini_set('display_errors',1);
			ini_set('display_startup_errors',1);
			error_reporting(E_ALL);
			$errors="";
			$firstName=addslashes($_POST['firstName']);
			$lastName=addslashes($_POST['lastName']);
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$comments=addslashes($_POST['comments']);
			$_SESSION['fnData']=$firstName;
			$_SESSION['lnData']=$lastName;
			$_SESSION['emData']=$email;
			$_SESSION['phoneData']=$phone;
			$_SESSION['userData']=$username;
			$_SESSION['passData']=$password;
			$_SESSION['commData']=$comments;
			if (empty($firstName))
			{
				$errors.='fnNull';
			}
			elseif (!preg_match("/^[a-zA-Z-'\\\\ ]*$/", $firstName))
			{
				$errors.="fnInvalidChar";
			}
			if (empty($lastName))
			{
				$errors.='lnNull';
			}
			elseif (!preg_match("/^[a-zA-Z-'\\\\ ]*$/", $lastName))
			{
				$errors.="lnInvalidChar";
			}
			if (empty($email))
			{
				$errors.='emailNull';
			}
			elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$errors.="emInvalid";
			}
			if (empty($phone))
			{
				$errors.="phoneNull";
			}
			elseif(!preg_match("/^[0-9]{10}$/", $phone))
			{
				$errors.="phoneInvalidChar";
			}
			if (empty($username))
			{
				$errors.="userNull";
			}
			if (empty($password))
			{
				$errors.="passNull";
			}
			if (empty($comments))
			{
				$errors.="commNull";
			}


			//this will work for any errors on any input (redirection)
			if($errors!="")
				redirect("index.php?page=contact&error=$errors");
			else
			{
				$dblink=db_connect("contact_data");
				$sql="Insert into `contact_info` (`first_name`, `last_name`,`email`,`phone`,`user_name`,`password`,`comments`) values ('$firstName','$lastName','$email','$phone','$username','$password','$comments')";
				$dblink->query($sql) or
					die("<h2>Something went wrong with: <br>".$dblink->error);
				
				echo("<h2>Data Entered Successfully!</h2>");
				//redirect("index.php?page=contact&success=1");
			}
			
			
		}		
	?>
	</div>
</div> <!-- pageintro -->   


              

 
<?php    
    include 'connect.php';
    //include 'readrecords.php';   
    require_once 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Styles-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!--Styles-->
    <title>Register</title>
</head>
<body id="register_body">
    <a href="index.php" class="back-button" style="margin: 0px;">Back</a>
    <form id="register_form" method = "POST">
		<h2 id="lblregister">Register</h2>
		<input type = "text" name = "new_fname" placeholder="Enter first name" required></input>
        <br>
		<input type = "text" name = "new_lname" placeholder="Enter last name" required></input>
        <br>
        <input type = "text" name = "new_username" placeholder="Enter username" required></input>
		<br>
		<input type = "text" name = "new_email" placeholder="Enter email" required></input>
		<br>
		<input type = "text" name = "new_gender" placeholder="[Male/Female]" required></input>
		<br>
		<label for="new_bdate">Birthdate: </label>
		<input type="date" name = "new_bdate" required>
        <br>
		<br>
        <input type="password" name = "new_password" placeholder = "Enter password" required></input>
        <br>
        <input type = "submit" name="btnRegister" value = "Register"></input>
    </form>
</body>
</html>

<?php	
	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$fname=$_POST['new_fname'];		
		$lname=$_POST['new_lname'];
		$gender=$_POST['new_gender'];
		$bdate=$_POST['new_bdate'];
		
		
		//for tbluseraccount
		$email=$_POST['new_email'];		
		$uname=$_POST['new_username'];
		$pword=$_POST['new_password'];
		$utype=0;

		$hashed_pword = password_hash($pword, PASSWORD_DEFAULT);
	
		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($connection,$sql2);
		$row = mysqli_num_rows($result);


		if($row == 0){
			//save data to tbluserprofile			
			$sql1 ="Insert into tbluserprofile(firstname,lastname,gender,birthdate) values('".$fname."','".$lname."','".$gender."','".$bdate."')";
			mysqli_query($connection,$sql1);
			//save data to tbluseraccount
			$sql ="Insert into tbluseraccount(emailadd,username,password,usertype) values('".$email."','".$uname."','".$hashed_pword."','".$utype."')";
			mysqli_query($connection,$sql);
			echo "<script language='javascript'>
					alert('New record saved.');
				</script>";
		} 
		else{
			echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
		}
	}
?>

<?php require_once 'includes/footer_ejares.php'; ?>
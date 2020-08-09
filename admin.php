<?php 
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'newcosahodb');

	// variable declaration
	$username = "";
	$errors   = array(); 

	// call the login() function if register_btn is clicked
	if (isset($_POST['Login'])) {
		Login();
    }
    
    function Login(){
		global $db, $username, $errors;

		// grap form values
		$username = $_POST['username'];
		$password = $_POST['password'];

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = ($password);

			$query = "SELECT * FROM admintd WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
		
					header('location: adminhome.php');
				
			}else {
				array_push($errors, "Wrong username/password combination");
			}
        }
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <title>Cosaho</title>
        <link rel="stylesheet" type="text/css" href="cosaho LoginIn.css" >

    </head>
    <body>
        <div class="a">
            
            <div class="form-box">
                <div class="button-box">
                   
               
                 <button type="button" class="toggle-btn" align="center" style="color:#ff105f;text-align:center;" >&nbsp&nbsp&nbsp&nbsp&nbsp    ADMIN LOG IN</button>
                </div>
                <div class="social-icons">
                <img src="co.png">
                <img src="sa.JFIF">
                <img src="ho.png">
            </div><br>
            <form id="Login" class="input-group" method="POST" action="admin.php">
                <input type="text" name="username" class="input-field" placeholder="Admin Id " required>
                <input type="password" name="password" class="input-field" placeholder="Enter password " required><br><br><br><br>
                
                <button type="submit"  class="submit-btn" name="Login" >Login </button>
                <!-- <a href="adminhome.php" >Login </a> -->
            </form>
            
            </div>
        </div>
       
       
    </body>
</html> 
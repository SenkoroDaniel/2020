<?php 
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'newcosahodb');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['Register'])) {
		Register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['Login'])) {
		Login();
    }
    function Register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  $_POST['username'];
		$email       =  $_POST['email'];
		$password_1  =  $_POST['password'];
		$password_2  =  $_POST['cpassword'];

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if ($db){
				
				$query = "INSERT INTO newcosahotd (username, email, password,agree) 
						  VALUES('$username', '$email','$password' , '0')";
				mysqli_query($db, $query);
				

				
				header('location: login1.php');				
			}

		}

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
			$password = md5($password);

			$query = "SELECT * FROM newcosahotd WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
		
					header('location: Newhomepage.php');
				
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
                   
               <div id="btn"></div>
                 <button type="button" class="toggle-btn" onclick="Login()">Log In</button>
                 <button type="button" class="toggle-btn" onclick="Register()">"Register</button>    
                </div>
                <div class="social-icons">
                <img src="co.png">
                <img src="sa.JFIF">
                <img src="ho.png">
            </div>
            <form id="Login" class="input-group" method="POST" action="login1.php">
                <input type="text" name="username" class="input-field" placeholder="User Id " required>
                <input type="password" name="password" class="input-field" placeholder="Enter password " required><br><br><br><br>
                <!-- <p align="right"><a href="#" >Forgot Password? </a></p><br>
                <input type="checkbox" class="check-box"><span>Remember Password</span> -->
                
                <button type="submit"  class="submit-btn" name="Login"> Log In</button> 
            </form>
            <form id="Register" class="input-group" autocomplete="on" method="POST" onsubmit ="return newcosahotd()" action="login1.php" >
                <input type="text"name="username" class="input-field" placeholder="Username" required>
                <input type="email" name="email" class="input-field" placeholder="Email Id " required>
                <input type="password" name="password" class="input-field" placeholder="Enter password " required>
                <input type="password" name="cpassword" class="input-field" placeholder="Confirm password " required>
                <input type="checkbox" name="agree" class="check-box" required><span>I agree to the <a href="termsandconditions.php">terms & condition</a></span>
                <button type="submit" class="submit-btn" name="Register">Register</button>
            </form>
            </div>
        </div>
        <script type="text/javascript">
            var x = document.getElementById("Login");
            var y = document.getElementById("Register");
            var z = document.getElementById("btn");

            function Register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function Login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>

       // Confirm password 
            <script type="text/javascript">
            function newcosahotd(){ 
                  var password= document.getElementById("password").value; 
                  var cpassword= document.getElementById("cpassword").value;

                    if(password != cpassword){
                        alert("password and confirm password are not the same");
                        return false;
                        }
                        else{alert("Account is successfully created");
                        return true;
                        }
                        
                        
                    }
            </script>
    </body>
</html> 
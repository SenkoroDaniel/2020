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
	function BookNow(){
		global $db, $errors;

		// receive all input values from the form
        $Surname    =  $_POST['Surname'];
        $Othername    =  $_POST['Othername'];
        $Genderchoice    =  $_POST['Genderchoice'];
        $Phonenumber    =  $_POST['Phonenumber'];
        $email    =  $_POST['email'];
        $City    =  $_POST['City'];
        $Residence    =  $_POST['Residence'];
        $Streetname    =  $_POST['Streetname'];
        $Country    =  $_POST['Country'];
        $cardnumber    =  $_POST['cardnumber'];
        $Patientchoice    =  $_POST['Patientchoice'];
        $PatientHistory    =  $_POST['PatientHistory'];
        $DrPaul    =  $_POST['DrPaul'];
        $DrJames    =  $_POST['DrJames'];
        $DrDaniel    =  $_POST['DrDaniel'];
        $DrBetrice    =  $_POST['DrBetrice'];
        $Anyother    =  $_POST['Anyother'];
        $dateofappointment    =  $_POST['dateofappointment'];
        $timeofappointment    =  $_POST['timeofappointment'];

		// form validation: ensure that the form is correctly filled
		if (empty($Surname)) { 
			array_push($errors, "Surname is required"); 
		}
		if (empty($Othername)) { 
			array_push($errors, "Othername is required"); 
        }
        if (empty($Genderchoice)) { 
			array_push($errors, "Genderchoice is required"); 
        }
        if (empty($Phonenumber)) { 
			array_push($errors, "Phonenumber is required"); 
        }
        if (empty($email)) { 
			array_push($errors, "email is required"); 
        }
        if (empty($City)) { 
			array_push($errors, "City is required"); 
        }
        if (empty($Residence)) { 
			array_push($errors, "Residence is required"); 
        }
        if (empty( $Streetname)) { 
			array_push($errors, " Streetname is required"); 
        }
        if (empty($Country)) { 
			array_push($errors, "Country is required"); 
        }
        if (empty($cardnumber)) { 
			array_push($errors, "cardnumber is required"); 
        }
        if (empty($Patientchoice)) { 
			array_push($errors, "Patientchoice is required"); 
        }
        if (empty($PatientHistory)) { 
			array_push($errors, "PatientHistory is required"); 
        }
        if (empty($DrPaul)) { 
			array_push($errors, "DrPaul is required"); 
        }
        if (empty($DrJames)) { 
			array_push($errors, " DrJames is required"); 
        }
        if (empty($DrDaniel)) { 
			array_push($errors, "DrDaniel is required"); 
        }
        if (empty($DrBetrice)) { 
			array_push($errors, "DrBetrice is required"); 
        }
        if (empty($Anyother)) { 
			array_push($errors, "Anyother is required"); 
        }
        if (empty($dateofappointment)) { 
			array_push($errors, "dateofappointment is required"); 
        }
        if (empty($timeofappointment)) { 
			array_push($errors, "timeofappointment is required"); 
		}


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if ($db){
				
				$query = "INSERT INTO newcosahotd (Surname,Othername,Genderchoice,Phonenumber,email,
                City,Residence,Streetname,Country,cardnumber,Patientchoice,PatientHistory,DrPaul,DrJames,DrDaniel,DrBetrice,Anyother,dateofappointment,timeofappointment) 
						  VALUES('$Surname','$Othername', '$Genderchoice','$Phonenumber','$email','$City','$Residence','$SCountry','$cardnumber','$Patientchoice',
                                    '$PatientHistory','1','2','3','4','5','$dateofappointment','$timeofappointment')";
				mysqli_query($db, $query);
				
				
				header('location: login1.php');				
			}

		}

    }
    
    
    ?>
    <!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM </title>
	<link rel="stylesheet" type="text/css" href="senkoro1.css">
</head>
<body><FORM action="action_page.php">
	<div class="a" align="right-middle">
		<h1>DOCTOR'S  APPOINTMENT</h1>
		<p>Please fill in this form to make an appointement with A Doctor .</p><hr>
		<label for="surname"> <b>Surname </b></label><input type="text" placeholder="Enter Surname" name="Surname" id="Surname" requred >
		<label for="Othername "> <b>Other names </b></label><input type="text" placeholder="Enter Other names" name="Other names" id="Other names" requred ><br><br>
		<div>
			<label for"Gender"><b>Gender: </b></label> 
			  <label for="Gender-male"> Male</label>
			  <input type="radio" name="Gender-choice" value="choice-1"> 
 
			  <label for="Gender-female"> Female</label>
			  <input type="radio" name="Gender-choice" value="choice-2"> 
			  
			  <label for="Gender-other"> Other</label>
			  <input type="radio" name="Gender-choice" value="choice-3"> <br><br>
 
		</div>

		<label for="PhoneNumber"> <b>Phone Number: </b></label>
					<select>
									<option></option>
						<option>+255 </option>
						<option>+256 </option>
						<option>+257 </option>
				 </select>
                    <input type="text" name="PhoneNumber" id="PhoneNumber" requred ><br><br>

		<label for="dateofbirth"> <b>Date of Birth </b></label><input type="date" name="dateofbirth" id="dateofbirth" requred ><br><br>

		<label for="Email"> <b>Email <hr></b></label><input type="text" placeholder="Enter Email" name="email" id="email" requred ><br><br>
		<label for="Address"> <b>Address<hr></b></label>
		       	<input type="Text" placeholder="City" name="City" id="City" requred >
				<input type="Text" placeholder="Residence" name="Residence" id="Residence" requred >  
				<input type="Text" placeholder="Street Name" name="Street Name" id="Street Name" requred ><br><br>
				
				<input type="Text" placeholder="State/Province" name="State/Province" id="State/Province" requred ><br><br>
				<input type="Text" placeholder="Postal/Zip code" name="Postal/Zip code" id="Postal/Zip code" requred >
				<input type="Text" placeholder="Country" name="Country" id="Country" requred ><br><br><br>


		<div>
		  <hr><label for="PatientHistory"><b>Have you ever being Treated to our Hospital? : </b></label> 
				<label for="Patient-choice">Yes</label>
					<input type="radio" name="Patient-choice" value="choice-1"> 
		 
			<label for="Patient-choice"> No</label>
					<input type="radio" name="Patient-choice" value="choice-2"><br><br> 
		 
		</div>	
		<div>
			<label for="cardnumber"> <b>If Yes, Then write your Card Number:</b></label>
				<input type="text" name="cardnumber" id="cardnumber" requred ><br><br><br>
		</div>
		<div class="PatientHistory">
			<label for="PatientHistory"> <b>Reasons for your last Appointment</b></label><br>
 <textarea type="text" name="PatientHistory" id="PatientHistory" rows="5" style="height:200px;font-size:12pt;"requred > </textarea><br><br><br>
		</div>

		
		<p><b>Appointment Details <hr> </b></p>
		<div>
			<label for="Choice"> <b>Choose a Doctor</b></label><br>

					<input type="radio" name="Dr.Paul" ><label for="Dr.Paul"> <b>Dr.Paul</b></label><br>
					<input type="radio" name="Dr.James" ><label for="Dr.James"> <b>Dr.James</b></label><br>
					<input type="radio" name="Dr.Daniel" ><label for="Dr.Daniel"> <b>Dr.Daniel</b></label><br>
					<input type="radio" name="Dr.Betrice" ><label for="Dr.Betrice"> <b>Dr.Betrice</b></label><br>
					<input type="radio" name="Anyother" ><label for="AnyOther"> <b>Any Other</b></label><br><br><br>
					
		</div>
		<div>
			<label for="Appointmentform"> <b>Please select An appointment Date and time <hr></b></label><br>
			<label for="date"> <b>Date: </b></label><input type="date" name="dateofappointment" id="dateofappointment" requred ><br><br>
			<label for="time"> <b>Time: </b></label><input type="time" name="timeofappointment" id="timeofappointment" requred ><br><br><br><br>
		</div>

		<p><b>When Done you can click below to submit Your information</b></p>
		<button type="submitt" class="BookNow">Book An Appointment Now </button>
	</div> 

   <div class="container signin"><p> Have ever filled this form before? If Yes,</p> <a href="#"> Just Book Only </a></div><br><br>
</FORM>

</body>
</html>
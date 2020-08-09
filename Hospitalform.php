<?php 
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'newcosahodb');

	// variable declaration
    $Surname = "";
    $Othernames = "";
    $Genderchoice = "";
    $Phonenumber= "";
    $email    = "";
    $City = "";
    $Residence = "";
    $Streetname = "";
    $Country = "";
    $cardnumber = "";
    $Patientchoice = "";
    $PatientHistory = "";
    $DrPaul = "";
    $DrJames = "";
    $DrDaniel = "";
    $DrBetrice = "";
    $Anyother = "";
    $dateofappointment = "";
    $timeofappointment = "";
  

	// call the BookNow() function if BookNow_btn is clicked
	if (isset($_POST['BookNow'])) {
		BookNow();
	}
	
	function BookNow(){
		global $db;

		// receive all input values from the form
        $Surname    =  $_POST['Surname'];
        $Othernames    =  $_POST['Othernames'];
        $Genderchoice    =  $_POST['Genderchoice'];
        $Phonenumber    =  $_POST['PhoneNumber'];
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
		
		// register user if there are no errors in the form
	
		

			if ($db){
				$query = "INSERT INTO `hospitaltd` (`id`, `Surname`, `Othername`, `Genderchoice`, `Phonenumber`, `email`, `City`, `Residence`, `Streetname`, `Country`, `cardnumber`, `Patientchoice`, `PatientHistory`, `DrPaul`, `DrJames`, `DrDaniel`, `DrBetrice`, `Anyother`, `dateofappointment`, `timeofappointment`) 
				VALUES (NULL, '$Surname', '$Othernames', '$Genderchoice', '$Phonenumber', '$email', '$City', '$Residence', '$Streetname', '$Country', '$cardnumber', '$Patientchoice',
				 '$PatientHistory', '1', '2', '3', '4', '5', '$dateofappointment', '$timeofappointment')";
						  mysqli_query($db, $query);		
				
				
				
						  header('location: Thankyou.php');	
				/*$query = "INSERT INTO hospitaltd (Surname,Othername,Genderchoice,Phonenumber,email,
                City,Residence,Streetname,Country,cardnumber,Patientchoice,PatientHistory,
				DrPaul,DrJames,DrDaniel,DrBetrice,Anyother,dateofappointment,timeofappointment) 
						  VALUES('$Surname','$Othernames', '$Genderchoice','$Phonenumber','$email','$City','$Residence','$Country','$cardnumber','$Patientchoice',
									'$PatientHistory','1','2','3','4','5','$dateofappointment','$timeofappointment')";
						*/
									
							
			}

		}

 
    
    
    ?>
    <!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM </title>
	<link rel="stylesheet" type="text/css" href="senkoro1.css">
</head>
<body><form action="Hospitalform.php" method="POST">
	<div class="a" align="right-middle">
		<h1>DOCTOR'S  APPOINTMENT</h1>
		<p>Please fill in this form to make an appointement with A Doctor .</p><hr>
		<label for="surname"> <b>Surname </b></label>
		<input type="text" placeholder="Enter Surname" name="Surname" id="Surname" requred >
		<label for="Othernames"> <b>Other names </b></label>
		<input type="text" placeholder="Enter Other names" name="Othernames"  requred ><br><br>
		<div>
			<label for"Gender"><b>Gender: </b></label> 
			  <label for="Gender-male"> Male</label>
			  <input type="radio" name="Genderchoice" value="m"> 
 
			  <label for="Gender-female"> Female</label>
			  <input type="radio" name="Genderchoice" value="f"><br><br> 
			  
		
 
		</div>

		<label for="PhoneNumber"> <b>Phone Number: </b></label>
					
                    <input type="text" name="PhoneNumber" id="PhoneNumber" requred ><br><br>

		<label for="dateofbirth"> <b>Date of Birth </b></label><input type="date" name="dateofbirth" id="dateofbirth" requred ><br><br>

		<label for="Email"> <b>Email <hr></b></label><input type="text" placeholder="Enter Email" name="email" id="email" requred ><br><br>
		<label for="Address"> <b>Address<hr></b></label>
		       	<input type="Text" placeholder="City" name="City" id="City" requred ><br><br>
				<input type="Text" placeholder="Residence" name="Residence" id="Residence" requred ><br><br>  
				<input type="Text" placeholder="Street Name" name="Streetname" id="Street Name" requred ><br><br>
				<input type="Text" placeholder="Country" name="Country" id="Country" requred ><br><br><br>


		<div>
		  <hr><label for="PatientHistory"><b>Have you ever being Treated to our Hospital? : </b></label> 
				<label for="Patientchoice">Yes</label>
					<input type="radio" name="Patientchoice" value="y"> 
		 
			<label for="Patientchoice"> No</label>
					<input type="radio" name="Patientchoice" value="n"><br><br> 
		 
		</div>	
		<div>
			<label for="cardnumber"> <b>If Yes, Then write your Card Number:</b></label>
				<input type="text" name="cardnumber" id="cardnumber" requred ><br><br><br>
		</div>
		<div class="PatientHistory">
			<label for="PatientHistory"> <b>Reasons for your last Appointment</b></label><br>
 <textarea type="text" name="PatientHistory" id="PatientHistory" rows="5" style="height:180px;width:450px;font-size:12pt;"requred > </textarea><br><br><br>
		</div>

		
		<p><b>Appointment Details <hr> </b></p>
		<div>
			<label for="Choice"> <b>Choose a Doctor</b></label><br>

					<input type="radio" name="DrPaul" ><label for="Dr.Paul"> <b>Dr.Paul</b></label><br>
					<input type="radio" name="DrJames" ><label for="Dr.James"> <b>Dr.James</b></label><br>
					<input type="radio" name="DrDaniel" ><label for="Dr.Daniel"> <b>Dr.Daniel</b></label><br>
					<input type="radio" name="DrBetrice" ><label for="Dr.Betrice"> <b>Dr.Betrice</b></label><br>
					<input type="radio" name="Anyother" ><label for="AnyOther"> <b>Any Other</b></label><br><br><br>
					
		</div>
		<div>
			<label for="Appointmentform"> <b>Please select An appointment Date and time <hr></b></label><br>
			<label for="date"> <b>Date: </b></label><input type="date" name="dateofappointment" id="dateofappointment" requred ><br><br>
			<label for="time"> <b>Time: </b></label><input type="time" name="timeofappointment" id="timeofappointment" requred ><br><br><br><br>
		</div>

		<p><b>When Done you can click below to submit Your information</b></p>
		<button type="submit" name="BookNow" class="BookNow">Book An Appointment Now </button>
	</div> 

   <div class="container signin"><p> Have ever filled this form before? If Yes,</p> <a href="#"> Just Book Only </a></div><br><br>
</FORM>

</body>
</html>
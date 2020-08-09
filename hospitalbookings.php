<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title></title>
</head>
<body style="background-color:#ebcfd3;"> <!-- <body bgcolor="lightgrey"> -->
	<br><h1>HOSPITAL BOOKINGUPDATES</h1>
	<div class="rectangle">
	</div> <br>
	
   
       <table class=" table table-striped table-hover table-bordered" border="1">
        
        <tr class="bg-dark text-white text-center">
        
          <th>Surname</th>
          <th>Othernames</th>
          <th>Genderchoice</th>
          <th>Phonenumber</th>
          <th>email</th>
          <th>City</th>
          <th>Residence</th>
          <th>Streetname</th>
          <th>Country</th>
          <th>cardnumber</th>
          <th>Patientchoice</th>
          <th>PatientHistory</th>
          <th>DrPaul </th>
          <th>DrJames</th>
          <th>DrDaniel</th>
          <th>DrBetrice</th>
          <th>Anyother</th>
          <th>dateofappointment</th>
          <th>timeofappointment</th>
        </tr>
 <?php

          $db= mysqli_connect('localhost','root','','newcosahodb');
          $query = "SELECT * FROM `hospitaltd";
          $result =mysqli_query($db, $query);

  

         while($row = mysqli_fetch_assoc($result)){
          ?>

        <tr class="text-center">
        
        
          <td><?php echo $row['Surname'];  ?></td>
          <td><?php echo $row['Othername'];  ?></td>
          <td><?php echo $row['Genderchoice'];  ?></td>
          <td><?php echo $row['Phonenumber'];  ?></td>
          <td><?php echo $row['email'];  ?></td>
          <td><?php echo $row['City'];  ?></td>
          <td><?php echo $row['Residence'];  ?></td>
          <td><?php echo $row['Streetname'];  ?></td>
          <td><?php echo $row['Country'];  ?></td>
          <td><?php echo $row['cardnumber'];  ?></td>
          <td><?php echo $row['Patientchoice'];  ?></td>
          <td><?php echo $row['PatientHistory'];  ?></td>
          <td><?php echo $row['DrPaul'];  ?></td>
          <td><?php echo $row['DrJames'];  ?></td>
          <td><?php echo $row['DrDaniel'];  ?></td>
          <td><?php echo $row['DrBetrice'];  ?></td>
          <td><?php echo $row['Anyother'];  ?></td>
          <td><?php echo $row['dateofappointment'];  ?></td>
          <td><?php echo $row['timeofappointment'];  ?></td>
          
          </tr> 
          <?php
          }


        ?>
       
       </table>


</body>
</html>
<html>
    <head>
        <title>WELCOME TO COSAHO</title> 
        <link rel="stylesheet" type="text/css" href="Welcome Cosaho.css">
    <body>
       <div class="head">
        <div class="title">
        <script type="text/javascript">
     
     var now = new Date(); //current date and time 
     var hour = now.getHours(); //current hour (0-23)
     //determine whether it's Morning 
     if(hour<12)
        document.write("<h1>Good Morning, ");
     //determine whether the time is PM
     if (hour>=12)
     {
         //convert to a 12-hour clock 
         hour = hour -12;
         //determine whether it is before 6PM
         if (hour<6)
         document.write("<h1>Good Afternoon, ");
         
         //determine whether it is after 6PM
         if (hour>=6)
         document.write("<h1>Good Evening, ");
     }//end if
     document.writeln(" Welcome Cosaho!</h1>");
   
     </script>
           
            <h4>Bookings for Conference hall, Saloon and Doctor Appointment</h4>
        </div>
        <div class="button">
            <a href="login1.php" class="btn">Online Booking</a>
            
        </div>
       </div>
    </body>
</html>
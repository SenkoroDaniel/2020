
<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>bus available</title>
</head>
<body bgcolor="lightgrey">
<a href="adminhome.php"><button>back</button><a/>
<form name="my form" style=";" onsubmit="return validateForm()"  action="bus.php" method="post">
<br><br>
<label for="bus">bus available:</label><br>
<input type="text" id="bus" name="bus" required><br><br>

<label for="bus_number">bus number:</label><br>
<input type="text" id="bus_number" name="bus_number" required><br><br>

<input type="submit" value="Submit" name="submit" >
</form>
<script type="text/javascript">

function validateForm(){
var bus = document.getElementById("bus").value;
var bus_number = document.getElementById("bus_number").value;

}
</script>
</body>
</html>
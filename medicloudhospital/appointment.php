<?php 
include_once('db.php');
$sql = "SELECT * FROM appoinment";
$result = $conn->query($sql); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Appointment Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<center><h2>Welcome to Appointment Page </h2> </center>`
<div class="text-center"><a href="logout.php">Logout</a></div>

<div>
    
        <br>
        <table align="center" border="1px" style="width:600px; line-height:40px;"> 
	    <tr> 
		<th colspan="4"><h2>Patient Appoinments</h2></th> 
		</tr> 
			   
			  <th> Name </th> 
			  <th> Aadhar </th> 
			  <th> Date </th> 
			  
		</tr> 
		
		<?php while($row = $result->fetch_assoc()) 
		{ 
		?> 
		<tr>  
		<td><?php echo $row['name']; ?></td> 
		<td><?php echo $row['aadhar']; ?></td> 
		<td><?php echo $row['date']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 
            
       
        
	
</div>

</body>
</html>
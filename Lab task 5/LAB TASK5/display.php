<!DOCTYPE html>
<html>
<head>
	<title>Dispaly Registration Info</title>
</head>
<body>

	<table border="2" cellspacing="7">
<tr>
		<th>Name</th>
		<th>Email</th>
		
		<th colspan="2" align="center">Operation</th>

		

</tr>



<?php
include("connection.php");
error_reporting(0);
$query = "select * from registration_db";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);





//echo $total;

if($total!=0){
	
	while($result= mysqli_fetch_assoc($data))
	{ echo "
		<tr>
	     <td>".$result['name']."</td>
	       <td>".$result['email']."</td>
	        
	             <td><a href= 'edit.php?name=$result[name]& email=$result[email] '>Edit</td>
	             <td><a href= 'delete.php?name=$result[name]'onclick='return checkdelete()'>Delete</td>

	             ";
	         }

}
else
{
	echo "No records found";
}

?>
</table>
<script> function checkdelete(){
	return confirm('Are you sure you want to delete this record ');
}


</script>
</body>
</html>
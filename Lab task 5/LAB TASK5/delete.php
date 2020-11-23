<?php
include("connection.php");
error_reporting(0);

$name =$_GET['name'];
$query = " delete from registration_db where name='$name'";




$data=mysqli_query($conn,$query);

if($data)
{echo $name;
echo "<br>";


	echo"<font color='green'>Record Deleted from Database";
}

else
{
	echo"<font color='red'>Failed to Delete Record from Database";
}

?>
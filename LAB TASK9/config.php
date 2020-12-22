<?php
error_reporting(0);
class db{
	var $con;
	function __construct(){
		$this->$con=mysqli_connect("localhost","root","") or die(mysqli_error());
		mysqli_select_db($this->$con,"project_db") or die(mysqli_error());
	}
	public function getRecords(){
		$query="SELECT * from product";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function getRecordsWhere($price){
		$query="SELECT * from product where prod_price < ".$price."";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function closeCon(){
		mysqli_close($this->$con);
	}
}
?>
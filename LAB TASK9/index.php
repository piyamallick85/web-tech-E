<!DOCTYPE html>
<html>
<head>
	<title>Product Filter and Search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#ajaxdata").load("allrecords.php");
			$("#price_dropdown").change(function(){
				var selected=$(this).val();
				$("#ajaxdata").load("search.php",{selected_price: selected});
			});
			$("#refresh").click(function(){
				$("#ajaxdata").load("allrecords.php");
			});
		});
	</script>

</head>
<body>
<div class="container">
	<br><br>
	<center><h1><strong>Product Filter and Search</strong></h1></center>
	<br>
	<div class="row">
		
			
		<form method="post" class="form-horizontal">
			<label for="price" class="control-label col-sm-3 col-sm-offset-2" >Price Less then: </label>
			<div class="col-sm-2" >
				<select name="price" class="form-control" id="price_dropdown">
					<option>---Select---</option>
					<option val="500">500</option>
					<option val="750">750</option>
					<option val="850">850</option>
					<option val="1250">1250</option>
					<option val="5500">5550</option>
					
				</select>
			</div>
			<button type="button" name="refresh" id="refresh" class="btn btn-primary">Refresh</button>
		</form>

	</div>
	<br><br>
	<div id="ajaxdata">
		
	</div>
</div>

</body>
</html>
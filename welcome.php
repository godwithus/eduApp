<?php
	
	$err = '';
	if(isset($_POST['submit'])){
		$sel_class = $_POST['class'];
		
		if($sel_class == ""){
			$err = "<div class='alert alert-warning' style='font-size: 20px;'> You have to Specify a Class you whnt to work in </div>";
		}else{
			Header("Location: index.html");
		}
	}
	
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title> Content Page </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
  
  </head>
  <body>
	  <div class="container-fluid">
	  <center style="margin-top: 50px;">
		<h1>Hello Choose a Class</h1>
		<h3> Your Selection will be set as default you can restore the settings any time</h3>
		<form action="" method="post"> 
			<div class="custom-select" style="width:300px; height: 60px; font-size: 20px;">
				<select name="class">
					<option value=""> -- Choose a class -- </option>
					<option value="1"> Kindergarten 1 </option>
					<option value="2"> Kindergarten 2 </option>
					<option value=""> ----------------</option>
					<option value="1"> Nusery 1 </option>
					<option value="2"> Nusery 2 </option>
					<option value=""> ----------------</option>
					<option value="3"> Primary 1 </option>
					<option value="4"> Primary 2 </option>
					<option value="5"> Primary 3 </option>
					<option value="6"> Primary 4 </option>
					<option value="7"> Primary 5</option>
				</select>
			</div>
			<button type="submit" name="submit" class="btn btn-default" style="width: 150px; height: 50px; font-size: 20px;">Let me in</button>
		</form> <br/>
		<?php echo $err; ?>
		</center>
	</div>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
<?php
 include('nav.php');
 include('dbconn.php');
 $msg = array();

 if(isset($_POST['submit'])){
 	$item = $_POST['item'];
 	$objClass = $_POST['objectclass'];
 	$scp = $conn->real_escape_string($_POST['scp']);
 	$desc = $conn->real_escape_string($_POST['desc']);

 	$sql = "INSERT INTO scpSubject(item, objectClass, SCP, description) Values('$item','$objClass','$scp', '$desc')";
 	if($conn->query($sql) === true){
 		$msg[] = "<div class='alert alert-success'>SCP Subject added successfully</div>";
 	} else{
 		$msg[] = "<div class='alert alert-danger'>Failed to add data</div>" . $conn->error;
 	}
 }
?>

<div class="container">
	<div class="col-md-8 mr-auto">
		<?php foreach ($msg as $value){
			echo $value;
		} 
			
		  ?>
		<form method="post">
			<div class="form-group">
				<label>Item:</label>
				<input type="text" name="item" class="form-control">
			</div>
			<div class="form-group">
				<label>Object Class:</label>
				<input type="text" name="objectclass" class="form-control">
			</div>
			<div class="form-group">
				<label>SCP:</label>
				<textarea class="form-control" name="scp"></textarea>
			</div>
			<div class="form-group">
				<label>Description:</label>
				<textarea class="form-control" name="desc"></textarea>
			</div>
			<input type="submit" name="submit" class="btn btn-primary">
		</form>
	</div>
</div>
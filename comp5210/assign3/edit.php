<?php
 include('nav.php');
 include('dbconn.php');
 $msg = array();
 $id = $_GET['edit'];

 $sql =  "SELECT * FROM scpSubject WHERE item = '$id'";
 $res = $conn->query($sql);

 $row = $res->fetch_assoc();

 if(isset($_POST['submit'])){
 	$item = $_POST['item'];
 	$objClass = $_POST['objectclass'];
 	$scp = $conn->real_escape_string($_POST['scp']);
 	$desc = $conn->real_escape_string($_POST['desc']);

 	$sql = "UPDATE scpSubject set

 			item = '$item',
 			objectClass = '$objClass',
 			SCP = ' $scp',
 			description = '$desc'

 			WHERE item = '$id'
 	";
 	if($conn->query($sql) === true){
 		$msg[] = "<div class='alert alert-success'>SCP Subject Edite successfully</div>";
 	} else{
 		$msg[] = "<div class='alert alert-danger'>Failed to Edit data</div>" . $conn->error;
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
				<input type="text" name="item" class="form-control" value="<?php echo $row['item']?>">
			</div>
			<div class="form-group">
				<label>Object Class:</label>
				<input type="text" name="objectclass" class="form-control" value="<?php echo $row['objectClass']?>">
			</div>
			<div class="form-group">
				<label>SCP:</label>
				<textarea class="form-control" name="scp" placeholder="<?php echo $row['SCP']?>"></textarea>
			</div>
			<div class="form-group">
				<label>Description:</label>
				<textarea class="form-control" name="desc" placeholder="<?php echo $row['description']?>"></textarea>
			</div>
			<input type="submit" name="submit" class="btn btn-primary" value="Edit subject">
		</form>
	</div>
</div>
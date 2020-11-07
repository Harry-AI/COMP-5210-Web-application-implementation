	<?php include('nav.php') ?>

	<div class="container">


		<?php  
			include('dbconn.php');
			if(isset($_GET['msg'])){
				echo "<div class='alert alert-danger'>The subject was deleted </div>";
			}
		?>

		<div class="row mt-2">
			<?php 
				$query = $conn->query("SELECT * FROM scpsubject");

				if($query->num_rows > 0){
					while($rows = $query->fetch_assoc()){
						?>
						<div class="col-md-8 offset-md-2 col-sm-12 mt-2">
							<div class="card">
								<div class="card-header">
								    <?php echo $rows['item']?>
								</div>
								<div class="card-body p-3">
									<p><b>ObjectsClass: </b><?php echo $rows['objectClass']?></p>
									<p><b>SCP: </b><?php echo $rows['SCP']?></p>
									<p><b>Description</b>: <?php echo $rows['description']?></p>
								</div>

							</div>
							<div class="mt-1 mb-2">
								<a href="edit.php?edit=<?php echo $rows['item']?>"><button class="btn btn-secondary">Edit</button></a>
								<a href="Delete.php?id=<?php echo $rows['item']?>"><button class="btn btn-danger">Delete</button></a>
							</div>
						</div>
						<?php
					}
				}else{
					echo "<h1 class='text-center'>No result Found</h1>";
				}
			?>
		</div>
	
	</div>
</body>
</html>
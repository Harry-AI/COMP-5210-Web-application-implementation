
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">SCP Subject</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item">
	        <a class="nav-link" href="../assign3/index.php">Assignment 3</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<button class="btn btn-success" onclick="voice()">Subject</button>
		<?php



			// Read JSON file
			$json = file_get_contents('./jsonData.json');

			//Decode JSON
			$json_data = json_decode($json,true);

			// tranverse data and display data in  html template
			foreach ($json_data as $key1 => $value1) {
				
			?>
			    <div class="card p-3 mb-1">
			    	<p><b>Item: </b><?php print_r($json_data[$key1]["item"]);?></p>
			    	<p><b>Object Class: </b><?php print_r($json_data[$key1]["objectClass"]);?></p>
			    	<p><b>Special Containment Procedure: </b><?php print_r($json_data[$key1]["scp"]);?></p>
			    	<p><b>Description: </b><?php print_r($json_data[$key1]["scp"]);?></p>
			    </div>
			        
			    
		<?php	}
		?>
		
	</div>

<script type="text/javascript" src="main.js"></script>
</body>
</html>

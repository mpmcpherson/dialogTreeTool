
<html>
	<head>
		<link rel="stylesheet" href="css\style.css">
		<link rel="stylesheet" href="css\bootstrap.css">

	</head>
	<body style="background-color: gray;">
		<div class="" style="width: 100%; height: 100%;">
		<?php

		$cols=3;
		$rows=3;
		
		$maxCol=12;
		$colSum=$maxCol/$cols;

		$percentheight = 100;
		$maxRow=round($percentheight/$rows,2);

		for($i=0;$i<$cols;$i++){
			echo "<div id='row".$i."' style='width: 100%; overflow-x: scroll;'>";
			for($j=0;$j<$rows;$j++){
				echo "<div id='".$i."By".$j."' style='height: ".$maxRow."%; margin: 5px;' class='col-lg-$colSum'></div>";
			}	
			echo "</div>";
		}
		?>
		</div>
	</body>
</html>
<script type="text/javascript" src="js\bootstrap.bundle.js"></script>
<script type="text/javascript" src="js\app.js"></script>

<html>
	<head>
		<link rel="stylesheet" href="css\style.css">
		

	</head>
	<body style="background-color: gray;">
		<div class="" style="width: 100%; height: 100%;">
		<?php

		$cols=3;
		$rows=3;
		
		$maxCol=100;
		$colSum=round($maxCol/$cols,0);

		$percentheight = 100;
		$maxRow=round($percentheight/$rows,0);

		for($i=0;$i<$cols;$i++){
			echo "<div id='row".$i."' style='width: 100%; overflow-x: scroll;'>";
			for($j=0;$j<$rows;$j++){
				echo "<div id='GridElement".$i."By".$j."' style='height: ".$maxRow."%; width: ".$colSum."%; display: inline-block;' class=''>element</div>";
			}	
			echo "</div>";
		}
		?>
		</div>
	</body>
</html>

<script type="text/javascript" src="js\app.js"></script>
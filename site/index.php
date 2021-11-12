
<html>
	<head>
		<link rel="stylesheet" href="css\style.css">

<style>
.droptarget {
  float: left; 
  width: 100px; 
  height: 35px;
  margin: 15px;
  padding: 10px;
  border: 1px solid #aaaaaa;
}
</style>

	</head>
	<body style="background-color: gray;">
		<div id="GridElement_container" style="width: 100%; height: 100%;">
		<?php
		/*
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
		*/
		?>
<!--
		<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
		  <p ondragstart="dragStart(event)" ondrag="dragging(event)" draggable="true" id="dragtarget">Drag me!</p>
		</div>

		<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

		<p id="demo"></p>

		</div>
-->


	</body>
</html>

<script type="text/javascript" src="js\bootstrap.bundle.js"></script>
<script type="text/javascript" src="js\jquery-3.6.0.js"></script>
<script type="text/javascript" src="app.js"></script>


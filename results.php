<?php
	// get the name and age from the textfields
	$name = $_POST['name'];
  $age = $_POST['age'];

	// calculate the volume and surface area of an octahedron
	$mars = $age / 1.88;
  $venus = $age /0.615;
  $marsRounded = number_format ($mars, 0);
  $venusRounded = number_format ($venus, 0);
?>
<!-- Answers -->
  <?php echo "$name"; ?> is <?php echo "$marsRounded"; ?> years old on Mars, and <?php echo "$venusRounded"; ?> years old on Venus.
<?php 
$sql = @mysqli_connect("localhost", "root", "", "test") or die("lolripserver"); //koppla upp elle
		mysqli_query($sql, "UPDATE counter SET counter = counter + 1");
$count = mysqli_fetch_row(mysqli_query($sql, "SELECT counter FROM counter"));
		print "$count[0]"; 
		?>
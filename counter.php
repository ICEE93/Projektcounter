<?php 
$sql = @mysqli_connect("localhost", "root", "", "test") or die("lolripserver"); //koppla upp eller dö och kasta felmeddelande
		mysqli_query($sql, "UPDATE visitors SET visitors = visitors + 1"); //
$count = mysqli_fetch_row(mysqli_query($sql, "SELECT visitors FROM visitors"));
		print "Visitors: $count[0]"; 
		?>
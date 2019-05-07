<?php 
	$sql = @mysqli_connect("localhost", "root", "", "test") or die("lolripserver"); 
		/* Koppla upp eller dö och kasta felmeddelande */
		mysqli_query($sql, "UPDATE visitors SET visitors = visitors + 1"); 
		/* Uppdatera tables i sql databasen för att öka antal besökare med + 1 */	
	$count = mysqli_fetch_row(mysqli_query($sql, "SELECT visitors FROM visitors"));
		/* Hämta information från databasfältet visitors */
		print "Visitors: $count[0]"; 
		/* Printa i webbläsaren */
		?>
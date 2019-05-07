<?php 
	$host = "localhost";               // Värd
	$user = "root";                    // User@mysql
	$pass = "";                        // Pw
	$name = "test"; 				   // Db
	$conn = @mysqli_connect($host, $user, $pass, $name) or die("lolripserver"); 
		/* Koppla upp eller dö och kasta felmeddelande */
		mysqli_query($conn, "UPDATE visitors SET visitors = visitors + 1"); 
		/* Uppdatera tables i sql databasen för att öka antal besökare med + 1 */	
	$count = mysqli_fetch_row(mysqli_query($conn, "SELECT visitors FROM visitors"));
		/* Hämta information från databasfältet visitors */
		print "Visitors: $count[0]"; 
		/* Printa i webbläsaren */
		?>
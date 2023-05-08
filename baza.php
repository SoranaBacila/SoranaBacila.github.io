			<?php

			$x=mysql_connect("localhost", "DMocan", "Bobi270900");
			if(!$x)
			die ('Nu s-a realizat conectarea'.mysql_error());

			$y=mysql_select_db("DMocan", $x);
			if(!$y)
			die('Baza de date nu poate fi accesata'. mysql_error());

			$nume=$_POST['nume'];
			$adresa=$_POST['adresa'];
			$telefon=$_POST['telefon'];
			$data=$_POST['data'];
			$numarpers=$_POST['numarpers'];


			$z=mysql_query("INSERT INTO DMocan.REZERVARE(nume,adresa,telefon,data,numarpers)
			VALUES ('$nume','$adresa', '$telefon', '$data', '$numarpers')",$x);
			if(!$z)
			     die('Inserarea nu a putut fi realizata'.mysql_error());
			echo 'Inserarea s-a realizat!';
			mysql_close($x);
			?>
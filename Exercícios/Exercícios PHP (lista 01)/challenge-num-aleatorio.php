<?php
	echo "Sorteio: ";
	for ($i = 0; $i < 6 ; $i++) { 
		$cartela[$i] = rand(0, 60);
		echo "$cartela[$i] ";
	}

	echo "<hr><br>";

	for ($j = 0; $j < 10; $j++) { 
		echo "<strong>Cartela $j: </strong>";
		for ($k = 0; $k < 6; $k++) { 
			$sorteio[$k] = rand(0, 60);	
			echo "$sorteio[$k]";

			for ($i = 0; $i < 6; $i++) { 
				if ($cartela[$i] === $sorteio[$k]) {
					echo "*";
				}
			}
			echo " ";		
		}
		echo "<br>";
	}
?>
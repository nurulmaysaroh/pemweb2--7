<?php 
		
		require_once 'class_balok.php';
		
		$balok1 = new Balok(24, 13, 2);
		$balok2 = new Balok(8, 13, 24);
	 
		echo "<br>Luas Permukaan Balok 1 = " . $balok1->getLuasPermukaanBalok();
		echo "<br>Luas Permukaan Balok 2 = " . $balok2->getLuasPermukaanBalok();
		echo "<br>";
		echo "<br>Volume Balok 1 = " . $balok1->getVolume();
		echo "<br>Volume Balok 2 = " . $balok2->getVolume();
		
?>
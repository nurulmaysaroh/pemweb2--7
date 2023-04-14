<?php

   require_once 'class_bola.php';
   echo 'Nilai PHI = ' . Bola::PHI;

   $bola1 = new Bola(4);
   $bola2 = new Bola(13);

   echo "<br>Luas Permukaan Bola 1 = " . $bola1->getLuasPermukaanBola();
   echo "<br>Luas Permukaan Bola 2 = " . $bola2->getLuasPermukaanBola();
   echo "<br>";
   echo "<br>Volume Bola 1 = " . $bola1->getVolBola();
   echo "<br>Volume Bola 2 = " . $bola2->getVolBola();

?>
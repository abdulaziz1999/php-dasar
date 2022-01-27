<?php
require 'Gempa.php';

//ciptakan object
echo '<h2 align="center">'.Gempa::bmkg.'</h2>';
$n1 = new Gempa('Tokyo',4.8);
$n2 = new Gempa('Texas',5.6);
$n3 = new Gempa('Banten',1.6);
$n4 = new Gempa('Tel Aviv',9.2);
echo "<div align='center'>";
$n1->dampak(); 
$n2->dampak(); 
$n3->dampak();
$n4->dampak();
echo "</div>";
// echo '<h3 align="center">'.Bank::BANK.'</h3>';
// $n1->cetak(); $n2->cetak(); $n3->cetak(); $n4->cetak();

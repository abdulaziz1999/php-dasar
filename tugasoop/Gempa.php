<?php
require 'style.php';
class Gempa{
//member1 variabel
public $tempat;
public $skala;
public const bmkg = 'Badan Meteorologi, Klimatologi dan Geofisika';
//member2 konstruktor
public function __construct($tempat,$skala){
    $this->tempat = $tempat;
    $this->skala = $skala;
}

//member3 method
public function dampak(){
    //variable
    $skala = $this->skala;
    $tempat = $this->tempat;
    echo "<br><b><u>Info BMKG</u></b><br>";
    
    if($skala < 2):
        echo "<div class='alert'>Telah terjadi Gempa di <b>".$tempat.
        "</b> <br>dengan skala ".$skala.
        " Berdampak <u>Tidak Terasa</u> </div>";
    elseif($skala >= 2 && $skala <= 4):
        echo "<div class='alert'>Telah terjadi Gempa di <b>".$tempat.
        "</b> <br>dengan skala ".$skala.
        " Berdampak <u>Bergoncang</u> </div>";
    elseif($skala > 4 && $skala <= 6):
        echo "<div class='alert'>Telah terjadi Gempa di <b>".$tempat.
        "</b> <br>dengan skala ".$skala.
        " Berdampak <u>Bangunan Roboh</u> </div>";
    elseif($skala > 6):
        echo "<div class='alert'>Telah terjadi Gempa di <b>".$tempat.
        "</b> <br>dengan skala ".$skala.
        " Berdampak <u>Bangunan Roboh dan Berpotensi Tsunami</u> </div>";
    endif;
}


}
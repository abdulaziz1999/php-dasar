<?php
//membuat fungsi void
function salam(){
    echo 'Assalamu\'alaikum Bro...';
}
//memanggil fungsi
salam();
function say($arg1){
    echo '<br/>Hallo Apa Kabar '.$arg1.' ?';
}
$siswa = 'Fawwaz';
say($siswa); say('Hisyam');
//say();
function tanya($arg1 = 'Inaya'){
    echo '<br/>Sudah sarapan '.$arg1.' ?';
}
tanya(); tanya('Kamila');
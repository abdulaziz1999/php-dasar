
<form action="buah.php" method="GET">
    <input type="text" name="buah">
    <button type="submit">simpan</button>
</form>
 <?php
//  $_GET['buah'] = false;


echo "<br>";

$ar_buah = ["Pepaya", "Mangga","Pisang","Jambu"];

if(isset($_GET['buah'])){
    echo $buah = $_GET['buah'];
    $ar_buah[]= $buah;
}

// cetak buah ke index ke 2
// echo $ar_buah[2];

// cetak jumlah buah
echo '<br/>Jumlah Buah ' . count($ar_buah);


// cetak seluruh buah
echo '<ol>';
foreach($ar_buah as $buah){
echo '<li>'. $buah .'</li>';
}
echo '</ol>';

// hapus buah index ke 1
?>
 <form method="GET" action="form_nilai.php">
 Nama : <input type="text" name="nama" value="" size="30"/><br/>
 Mata Kuliah : Web Programming 02| STT-NFPraktikum 01: PHP Dasar
<select name="matkul">

<option value="DDP">Dasar-Dasar Pemrograman</option>

<option value="BDI">Basis Data I</option>

<option value="WEB1">Pemrograman Web</option>
 </select><br/>
 Nilai UTS : <input type="text" name="nilai_uts" value=""
size="6"/><br/>
 Nilai UAS : <input type="text" name="nilai_uas" value=""
size="6"/><br/>
 Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas"
value="" size="6"/><br/>
 <input type="submit" value="Simpan" name="proses"/>
 </form>

 <?php
    //data boolean = true or false
    //nilai default
    // $_GET['proses']= false;

    //kondisi
    if(isset($_GET['proses'])){
        $proses= $_GET['proses'];
        $nama_siswa = $_GET['nama'];
        $mata_kuliah = $_GET['matkul'];
        $nilai_uts = $_GET['nilai_uts'];
        $nilai_uas = $_GET['nilai_uas'];
        $nilai_tugas = $_GET['nilai_tugas'];
        echo 'Proses : '.$proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas; 
        // $b = [
        //     'id' => 5,
        //     'nim' => $nim,
        //     'uts' => $nilai_uts,
        // ];

        // array_push($b);

        
    }
    // $array = ['id' => 4,'nim' => '0110219010','nama' => "Abdul Aziz"];
    // print_r($array['id']);
 ?>
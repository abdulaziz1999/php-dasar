<style>
#t_form {
    background-color: #00BFFF;
    border: 2px solid blue;
    padding: 20px;
    border-radius: 25px;
}

#t_hasil {
    background-color: #00BFFF;
    margin-top: 50px;
    border: 2px solid blue;
    padding: 20px;
    border-radius: 25px;
}

#header {
    text-align: center;
    margin-bottom: 5px;
}

#container {
    margin-left: 1000px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.buttonstyle {
    border-radius: 12px;
}
</style>

<div id="container">
<h1><strong>Belanja Online</strong></h1>
    <table id="t_form">
        <form action="form_belanja.php" method="post">
            <tr>
                <td colspan="3" id="header">Form Pembelian Produk</td>
            </tr>
            <tr>
                <td colspan="3" id="header">======================</td>
            </tr>
            <tr>
                <td><label for="pilih">Pilihan Produk </label></td>
                <td>:</td>
                <td>
                    <ul>
                        <li>Harga satuan produk TV : Rp. 1.250.000</i>
                        <li>Harga satuan produk Kulkas : Rp. 1.800.000</i>
                        <li>Harga satuan produk Mesin Cuci : Rp. 3.400.000</i>
                        <li>Harga satuan produk AC : Rp. 3.100.000</i>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><label for="customer"> Customer</label></td>
                <td>:</td>
                <td><input type="text" name="customer" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="produk">Pilih Produk</label></td>
                <td>:</td>
                <td>
                    <select name="produk" id="" required>
                        <option value="" disable seleted> ------ Pilihan Produk ------- </option>
                        <option value="TV">TV</option>
                        <option value="Kulkas">Kulkas</option>
                        <option value="Mesin Cuci">Mesin Cuci</option>
                        <option value="AC">AC</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah</label></td>
                <td>:</td>
                <td>
                    <input type="number" name="jumlah" required>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="button buttonstyle" type="submit">Simpan</button>
                </td>
            </tr>
        </form>
    </table>

<?php
//kondisi
if(isset($_POST['customer'])){
    //Post data
    $nama = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    //swicth case harga satuan
    switch ($produk) {
        case 'TV': $harga = 1250000; break;
        case 'Kulkas': $harga = 1800000; break;
        case 'Mesin Cuci': $harga = 3400000; break;
        case 'AC': $harga = 3100000; break;
        default: $harga = ''; break;
    }
    //total belanja
    $total_belanja = $harga*$jumlah;

    // harga diskon 15%
    $diskon = 15/100 * $total_belanja;

    //harga setetah di diskon
    $harga_diskon = $total_belanja - $diskon;

    //pajak 10%
    $pajak = 10/100 * $harga_diskon;

    //harga setelah di pajak
    $harga_total = $harga_diskon + $pajak;
}


?>
    <?php if(isset($_POST['customer'])){?>
    <table id="t_hasil">
        <tr>
            <td colspan="3" id="header">Struk Pembayaran</td>
        </tr>
        <tr>
            <td colspan="3" id="header">======================</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama?></td>
        </tr>
        <tr>
            <td>Produk Pilihan</td>
            <td>:</td>
            <td><?= $produk?></td>
        </tr>
        <tr>
            <td>Jumlah Belanja</td>
            <td>:</td>
            <td><?= $jumlah?> Unit</td>
        </tr>
        <tr>
            <td>Harga Satuan</td>
            <td>:</td>
            <td><?= "Rp. ".number_format($harga,0,"",".")?></td>
        </tr>
        <tr>
            <td>Total Belanja</td>
            <td>:</td>
            <td><?= "Rp. ".number_format($total_belanja,0,"",".")?></td>
        </tr>
        <tr>
            <td>Potongan Diskon(15%)</td>
            <td>:</td>
            <td><?= "Rp. ".number_format($diskon,0,"",".")?></td>
        </tr>
        <tr>
            <td>Pajak(10%)</td>
            <td>:</td>
            <td> <?= "Rp. ".number_format($pajak,0,"",".")?></td>
        </tr>
        <tr>
            <td>Harus dibayar</td>
            <td>:</td>
            <td><?= "Rp. ".number_format($harga_total,0,"",".")?></td>
        </tr>
    </table>
    <?php }?>
</div>
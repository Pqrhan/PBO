<?php
require('../Class/class_perhitungan.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Area</title>
</head>
<body>
    <form method="post">
        <label for="sisi">Sisi Persegi :</label>
        <input type="number" name="sisi" id="sisi" required><br>

        <label for="panjang">Panjang Persegi :</label>
        <input type="number" name="panjang" id="panjang" required><br>

        <label for="lebar">Lebar Persegi Panjang :</label>
        <input type="number" name="lebar" id="lebar" required><br>

        <label for="alas">Alas Segitiga :</label>
        <input type="number" name="alas" id="alas" required><br>

        <label for="tinggi">Tinggi Segitiga :</label>
        <input type="number" name="tinggi" id="tinggi" required><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $aritmatika = new aritmatika();

        $sisi = $_POST['sisi'];
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $luasPersegi = $aritmatika->luas($sisi);
        $luasPersegiPanjang = $aritmatika->persegi($panjang, $lebar);
        $luasSegitiga = $aritmatika->luas_segitiga($alas, $tinggi);

        echo $luasPersegi;
        echo $luasPersegiPanjang;
        echo $luasSegitiga;
    }

    ?>


</body>
</html>





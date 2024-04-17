<html>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    if(isset($_POST["submit"])) :
        $nilai = $_POST['nilai'];
        if($nilai == 0) {
            $hasil = "Nol";
        } elseif($nilai > 0 && $nilai <= 9) {
            $hasil = "Satuan";
        } elseif($nilai >= 10 && $nilai < 20) {
            $hasil = "Belasan";
        } elseif($nilai >= 20 && $nilai < 100) {
            $hasil = "Puluhan";
        } elseif($nilai >= 100 && $nilai < 1000) {
            $hasil = "Ratusan";
        } else {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "<h2>Hasil: $hasil</h2>";
    endif;
    ?>
</html>
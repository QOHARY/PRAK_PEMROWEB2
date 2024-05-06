<html>
    <style>
        .pertama{
            color: green;
        }
        .kedua{
            color: red;
        }
    </style>
    <form action="" method="post">
        Jumlah Peserta : <input type="text" name="jumlah"> <br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if(isset($_POST["submit"])) :
        $nilai = $_POST["jumlah"];
        $awal = 1;
        while ($awal <= $nilai) {
            if ($awal % 2 == 0){
            echo "<h1 class='pertama'> Jumlah Peserta $awal</h1>";
            }else {
                echo "<h1 class='kedua'> Jumlah Peserta $awal</h1>";
            }
            $awal++;
        }
    endif;
    ?>
</html>
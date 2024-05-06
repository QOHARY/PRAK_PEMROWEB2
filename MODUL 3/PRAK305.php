<html>
    <form action="" method="post">
        <input type="text" name="masukan">
        <input type="submit" name="kalimat" value="submit">
    </form>
    <?php
    if(isset($_POST['kalimat'])):
        $panjang = $_POST["masukan"];
        $pemisah = str_split($panjang);
        for ($i = 1 ; $i<= count($pemisah); $i++) {
            for ($j = 1; $j <= count($pemisah); $j++){
        if ($j == 1){
            echo strtoupper($pemisah[$i-1]);
        }else {
            echo strtolower($pemisah[$i-1]);
        }
    }
}
    endif;
    ?>
</html>
<html>
    <style>
        td{
            border: 1px solid;
            padding: 10px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
    <form action="" method="post">
        Panjang :<input type="text" name="panjang"> <br>
        Lebar : <input type="text" name="lebar"> <br>
        Nilai : <input type="text" name="nilai"> <br>
        <input type="submit" name="submit" value="cetak">
    </form>
    <?php
    if(isset($_POST["submit"])) :
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
        $input = explode(" ", $nilai);
        $x =0;
    
        if ($panjang*$lebar == count($input)){
        for ($i = 0; $i < $panjang; $i++){
            echo "<table>";
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++ ){
                echo "<td>".$input[$x]."</td>";
                $x++;
            }
            echo "</tr>";
            echo "</table";
        }
    }
    else{
        echo "Panjang nilai tidak sesuai";
    }
    endif;
    ?>
</html>
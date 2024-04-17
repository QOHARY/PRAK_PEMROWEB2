<!DOCTYPE html>
<html>
    <form action="" method="post">
        Nilai : <input type="nilai" name="nilai"><br>
        Dari : <br>
        <?php
        if(isset($_POST['submit'])){
            $nilai=$_POST['nilai'];
            $dari=$konversi="";
        }
        ?>
        <input type="radio" name="dari" value="Celcius">Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur">Rheamur<br>
        <input type="radio" name="dari" value="Kelvin">Kelvin<br>
        Ke : <br>
        <input type="radio" name="konversi" value="Celcius">Celcius<br>
        <input type="radio" name="konversi" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="konversi" value="Rheamur">Rheamur<br>
        <input type="radio" name="konversi" value="Kelvin">Kelvin<br>
        <button type="submit" name="submit">Konversi</button><br>
        <?php
        if(isset($_POST['submit'])){
            $dari=$_POST['dari'];
            $konversi=$_POST['konversi'];
            if($dari == "Celcius" && $konversi == "Fahrenheit"){
                echo "<h2>Hasil Konversi: ",(9/5*$nilai)+32," &degF";
            }
            else if($dari == "Celcius" && $konversi == "Rheamur"){
                echo "<h2>Hasil Konversi: ",(4/5*$nilai)," &degR";
            }
            else if($dari == "Celcius" && $konversi == "Kelvin"){
                echo "<h2>Hasil Konversi: ",(273.15+$nilai)," K";
            }
            else if($dari == "Fahrenheit" && $konversi == "Celcius"){
                echo "<h2>Hasil Konversi: ",($nilai-32)*5/9," &degC";
            }
            else if($dari == "Fahrenheit" && $konversi == "Rheamur"){
                echo "<h2>Hasil Konversi: ",($nilai-32)*4/9," &degR";
            }
            else if($dari == "Fahrenheit" && $konversi == "Kelvin"){
                echo "<h2>Hasil Konversi: ",($nilai-32)*5/9+273.15," K";
            }
            else if($dari == "Rheamur" and $konversi == "Celcius"){
                echo "<h2>Hasil Konversi: ",$nilai*5/4," &degC";
            }
            else if($dari == "Rheamur" && $konversi == "Fahrenheit"){
                echo "<h2>Hasil Konversi: ",(9/4*$nilai)+32," &degF";
            }
            else if($dari == "Rheamur" && $konversi == "Kelvin"){
                echo "<h2>Hasil Konversi: ",(5/4*$nilai)+273.15," K";
            }
            else if($dari == "Kelvin" && $konversi == "Celcius"){
                echo "<h2>Hasil Konversi: ",$nilai-273.15," &degC";
            }
            else if($dari == "Kelvin" && $konversi == "Fahrenheit"){
                echo "<h2>Hasil Konversi: ",($nilai-273.15)*9/5+32," &degF";
            }
            else if($dari == "Kelvin" && $konversi == "Rheamur"){
                echo "<h2>Hasil Konversi: ",($nilai-273.15)*4/5," &degR";
            }
        }
        ?>
    </form>
</html>
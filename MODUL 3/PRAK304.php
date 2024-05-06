<html>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
    </style>
<?php
        $bintang = 0;
        if(isset($_POST['bintang'])) 
            {
                $bintang = $_POST['bintang'];
            }

        if(isset($_POST['tambah']))
            {
                $bintang++;
            }
        elseif(isset($_POST['kurang']))
            {
                $bintang--;
            }
        ?>  
        <?php if($bintang == 0) :?>
        <form action = "" method = "post">
            <div>
                Jumlah Bintang <input type ="text" name="bintang">
            </div>
            <button type ="submit" name="submit">Submit</button><br><br>
        </form>
        <?php endif; ?>
        <?php if($bintang!=0) :
            echo "Jumlah bintang $bintang <br><br>";
            for ($i=0; $i<$bintang; $i++)
            {
                 echo "<img src='Bintang.png'>";
            }
            ?>
            <form action ="" method ="post">
                <input type ="hidden" name="bintang" value = "<?= $bintang; ?>">
                <button type ="submit" name="tambah">Tambah</button>
                <button type = "submit" name="kurang">Kurang</button>
            </form>
        <?php endif; ?>
</html>
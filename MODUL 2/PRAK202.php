<html>
<style>
    .error {color: #FF0000;}
 </style>
<?php
$nama = $nim = $gender = "";
$nama_salah = $nim_salah = $gender_salah = "";

if (isset($_POST['submit'])) :
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
  }
  if (empty($nama)) {
    $nama_salah = "Nama tidak boleh kosong";
  }
  if (empty($nim)) {
    $nim_salah = "NIM tidak boleh kosong";
  } 
  if (empty($gender)) {
    $gender_salah = "Jenis kelamin tidak boleh kosong";
  }
endif;
?>
<form action="" method="post" >  
  Nama: <input type="text" name="nama" value="<?php echo $nama;?>">
  <span class="error">* <?php echo $nama_salah;?></span><br>
  Nim: <input type="text" name="nim" value="<?php echo $nim;?>">
  <span class="error">* <?php echo $nim_salah;?></span><br>
  Jenis Kelamin: 
  <span class="error">* <?php echo $gender_salah;?></span><br>
  <input type="radio" name="gender" value="Laki-laki" >Laki-laki<br>
  <input type="radio" name="gender" value="Perempuan">Perempuan<br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
if (isset($_POST['submit'])) :
    if (!empty($nama) && !empty($nim) && !empty($gender)) {
        echo "<h2>Output:</h2>";
        echo "$nama<br>";
        echo "$nim <br>";
        echo "$gender";
    }
  endif;
?>
</body>
</html>
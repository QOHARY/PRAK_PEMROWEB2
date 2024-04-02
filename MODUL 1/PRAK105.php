<?php
$listhp = ["22" => "Samsung Galaxy S22", "22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "5" => "Samsung Galaxy Xcover 5"]
?>
<style>
table, th, td {
  border: 1px solid;
}
.head{
background-color: red;
font-size: 25px;
}
</style>
<html>
<table>
       <tr>
        <td class="head"><b>Daftar Smartphone Samsung</b></td>
       </tr> 
       <tr>
        <td><?=$listhp['22']?></td>
       </tr> 
       <tr>
        <td><?=$listhp['22+']?></td>
       </tr> 
       <tr>
        <td><?=$listhp['A03']?></td>
       </tr>
       <tr>
        <td><?=$listhp['5']?></td>
       </tr> 
    </table>
</html>
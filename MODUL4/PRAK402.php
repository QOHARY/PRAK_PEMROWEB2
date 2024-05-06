<html>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid;
            padding: 5px;
        }
        th{
            border: 1px solid;
            background-color: #D3D3D3;
            padding: 10px;
        }
    </style>
<?php
$data= [
    ["Nama" => "Andi", "NIM" => 2101001, "UTS" => 87, "UAS" => 65],
    ["Nama" => "Budi", "NIM" => 2101002, "UTS" => 76, "UAS" => 79],
    ["Nama" => "Tono", "NIM" => 2101003, "UTS" => 50, "UAS" => 41],
    ["Nama" => "Jessica", "NIM" => 2101004, "UTS" => 60, "UAS" => 75],
];
for ($i = 0; $i < count($data); $i++) {
    $data[$i]["Akhir"] = $data[$i]["UTS"] * 0.4 + $data[$i]["UAS"] * 0.6;
    if ($data[$i]["Akhir"] >= 80) {
        $data[$i]["Huruf"] = "A";
    } elseif ($data[$i]["Akhir"] > 70) {
        $data[$i]["Huruf"] = "B";
    } elseif ($data[$i]["Akhir"] > 60) {
        $data[$i]["Huruf"] = "C";
    } elseif ($data[$i]["Akhir"] > 50) {
        $data[$i]["Huruf"] = "D";
    } else {
        $data[$i]["Huruf"] = "E";
    }
}
?>
<table>
    <tr>
        <th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Huruf</th>
    </tr>
    <?php
    for ($i = 0; $i < count($data); $i++) {
        echo "<tr>";
        echo "<td>".$data[$i]["Nama"]."</td>";
        echo "<td>".$data[$i]["NIM"]."</td>";
        echo "<td>".$data[$i]["UTS"]."</td>";
        echo "<td>".$data[$i]["UAS"]."</td>";
        echo "<td>".$data[$i]["Akhir"]."</td>";
        echo "<td>".$data[$i]["Huruf"]."</td>";
        echo "</tr>";
    }
    ?>
</table>
</html>
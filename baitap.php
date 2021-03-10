<?php
$link= mysqli_connect("localhost","root","", 'qlbh');
$sql = "select * from `LoaiSanPham`";

$result = mysqli_query($link,$sql);


echo "<table border =0";
echo "<tr><td>MA LOAI SAN PHAM</td><td>TEN LOAI SAN PHAM</td><td>DIEN GIAI</td></tr>";
while($row2 = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
            echo "<tr>";
                PRINT_R ("<td>".$row2["MaLSP"]."</td><td>".$row2["TenLSP"]."</td><td>".$row2["DienGiai"]."</td>");

                echo "</tr>";

        
} 
echo "</table>";

mysqli_close($link);
?>
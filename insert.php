<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,'QLBH');
if(!$conn) {
    die('Không thể kết nối: '.mysqli_error());
    }
    $sql = "INSERT INTO `LoaiSanPham` (`MaLSP`, `TenLSP`, `DienGiai`) 
    VALUES ('LSP06', 'Máy in', 'Các sản phẩm máy in')";
     mysqli_select_db($conn,'QLBH');
     if (mysqli_query($conn, $sql))
     {
         echo "Tạo cơ sở dữ liệu thành công";
    } else {
        echo"Taọ cơ sở dữ liệu thất bại". mysqli_error($conn);
    }
    echo "<table border = 1";
echo "<tr><td>Ma Loai San Pham</td><td>Ten Loai San Pham</td><td>Dien Giai</td></tr>";
while($row = mysqli_fetch_array($result,MYSQLI_NUM))
{
    print_r("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><tr>");
}
        mysqli_close($conn);
?>





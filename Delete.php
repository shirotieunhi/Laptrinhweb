<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,'QLBH');
if(!$conn) {
    die('Không thể kết nối: '.mysqli_error());
    }
    $sql = "DELETE FROM `LoaiSanPham` WHERE `LoaiSanPham`.`MaLSP` = 'LSP06'";
     mysqli_select_db($conn,'QLBH');
     if (mysqli_query($conn, $sql))
     {
         echo "Xoá dữ liệu thành công";
    } else {
        echo"Taọ cơ sở dữ liệu thất bại". mysqli_error($conn);
    }
    
?>





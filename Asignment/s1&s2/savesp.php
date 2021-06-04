
<?php
$ten = $_POST["ten"];
$gia = $_POST["gia"];
$mota = $_POST["mota"];
$tenncc = $_POST["tenncc"];
$servername = "localhost";
$username = "root";
$password = "";
$db = "t2008m_php";

$conn = new mysqli($servername,$username,$password,$db);

if ($conn->connect_errno){
    die("Connect error..");
}
$sql_txt = "insert into sanpham(ten,gia,mota,tenncc) value ('$ten','$gia','$mota','$tenncc')";
if ($conn->query($sql_txt)==true){
    header("location: listproduct.php");
}else{
    echo "ERRORS:".$conn->error;
}
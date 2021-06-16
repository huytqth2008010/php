<?php

include_once "database.php";
Class Controller{

    public function listSP(){
        $sql_txt = "select * from sanpham";
        $dssanpham = queryDB($sql_txt);
        include "views/listproduct.php";
    }
    public function themSP(){
        include "views/newproduct.php";
    }
    public function luuSP(){
        $ten = $_POST["ten"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];
        $tenncc = $_POST["tenncc"];
        $sql_txt = "insert into sanpham(ten,gia,mota,tenncc) value ('$ten','$gia','$mota','$tenncc')";

        if(insertOrUpdateDB($sql_txt)){
            header("Location: ?route=listsp");
        }else{
            echo "Error";
        }
    }
    public function suaSP(){
        $ten = $_POST["ten"];
        $gia = $_POST["gia"];
        $mota = $_POST["mota"];
        $tenncc = $_POST["tenncc"];
        $id = $_POST["id"];

        $sql_txt = "update sanpham set ten='$ten',gia = '$gia', mota='$mota',tenncc='$tenncc' where id= $id";
        if(insertOrUpdateDB($sql_txt)){
            header("Location: ?route=suasp");
        }else{
            echo "Error";
        }

    }
}
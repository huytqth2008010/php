<?php
$x = 10; //khai bao bien $x; -> bắt buộc phải có $ đầu tiên
$y = "Hello";
$x = "xin chao";
$z = $x.$y;//xin chao hello;-> noi chuoi
echo $z."<br/>";
echo (4+5)."<br/>";
echo "aa"."5"."<br/>";
$n = 10;
if($n>=10){
    echo"gia tri qua lon <br/>";
}else{
    echo"gia tri qua nho <br/>";
}
for($i=0;$i<10;$i++){
    echo "i = ".$i."<br/>";
}
$arr = [];
$arr[0] = 12;
$arr[1] = "xin chao";
$arr[] = 101;//tu dong them vao cuoi mang phan tu nay
for($i = 0;$i<3;$i++){
    echo"arr[".$i."] = ".$arr[$i]."<br/>";
}
// array php thuc chat chia phan tu thanh key => value
$arr["name"] = "Nguyen Van A"; //key = name va vakye = nguyen van a
$arr['age'] = 10;
$arr["tel"] = "0987654321";
//$arr["ds_monhoc"] =  ["LBEP","BNGW","ADF1"];
echo "Name:".$arr["name"]."<br/>";
foreach($arr as $item){//$item la  bien dai dien cho tung phan tu $arr ->
    echo $item."<br/>";
}
foreach($arr as $key=>$value){
    echo $key."=".$value."<br/>";
}
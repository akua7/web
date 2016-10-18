<?php
error_reporting(0);
include("baglan.php");

// array for JSON response
$response = array();

    $isim	 =$_POST['isim'];
    $soyisim =$_POST['soyisim'];
    $yas	 =$_POST['yas'];

    $result = mysql_query("INSERT INTO uyeler(isim,soyisim,yas) VALUES('$isim','$soyisim','$yas')");   

    if($result>0){
           $response["success"] = 1;
         }   
     else{
           $response["success"] = 0;
         }
     // echoing JSON response
     echo json_encode($response);

?> 
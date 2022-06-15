<?php
    $conn=mysqli_connect('localhost','root','','UPRAKXI',3308);

    function CekKoneksi($conn){
        if(!$conn){
            die;
        }else{
            echo "Connection succes";
        }
    }

    function SeeError(){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);    
    }
?>
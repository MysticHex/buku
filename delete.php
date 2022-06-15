<?php
    include 'function.php';

    $id=$_GET['id'];

    $sql="DELETE FROM buku WHERE `no`='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
       header('location:index.php?sm=Delete Berhasil');
    }
?>
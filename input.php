<?php
    include 'function.php';

    SeeError();

    if(isset($_POST['btn'])){
        $judul = (isset($_POST['judul'])) ? $_POST['judul'] :"";
        $penulis = (isset($_POST['penulis'])) ? $_POST['penulis'] :"";
        $jenis = (isset($_POST['jenis'])) ? $_POST['jenis'] :"";
        $isbn = (isset($_POST['isbn'])) ? $_POST['isbn'] :"";

        $sql="INSERT INTO buku(judul_buku,penulis,jenis_buku,no_isbn) VALUES ('$judul','$penulis','$jenis','$isbn')";
        $run=mysqli_query($conn,$sql);

        if($run){
            header('location:index.php?sm=Input berhasil');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Input</title>
    <style>
        .card{
            width:320px;
        }
        .input{
            width: 100%;
            margin-bottom: 10px;
            font-size: large;
        }
    </style>
</head>
<body>
    <div class="card text-dark bg-light mb-3 mt-5 mx-auto">
        <div class="card-header">
            <h2 class="text-center">Input</h2>
            <a href="index.php">List data</a>
        </div>

        <div class="card-body">
            <form action="" method="post">
                <input class="input" type="text" name="judul" id="judul" placeholder="Masukan Judul buku">
                
                <input class="input" type="text" name="penulis" id="penulis" placeholder="Masukan Nama Pengarang">
                
                <select class="input" name="jenis" id="">
                    <option selected disabled hidden>Pilih Jenis Buku</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Biografi">Biografi</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="Politik">Politik</option>
                    <option value="Agama">Agama</option>
                    <option value="Novel">Novel</option>
                    <option value="Ensiklopedia">Ensiklopedia</option>
                </select>

                <input class="input" type="number" name="isbn" id="" placeholder="Masukan nomor ISBN">

                <input type="submit" value="Submit" name="btn" class="input btn btn-primary" role="button">
            </form>
        </div>
    </div>
</body>
</html>
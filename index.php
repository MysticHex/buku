<?php
include 'function.php';

$sql = "SELECT * FROM buku";
$run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        .head {
            width: fit-content;
            margin-bottom: 20px;
        }

        .head>a {
            margin-bottom: 5px;
            text-decoration: none;
            color: #000;
            transition: 0.3s;
        }

        .head>h1 {
            font-weight: bold;
        }

        table {
            margin: 0 auto;
        }

        th{
            padding: 0 15px;
        }

        th#one {
            width: 10px;
        }

        th#two {
            width: fit-content;
            text-align: center;
        }

        th#three {
            text-align: center;
            width: fit-content;
        }

        th#four {
            text-align: center;
            width: 100px;
        }
        th#six {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="head mx-auto mt-4">
        <a href="index.php">
            <h1>Data Buku</h1>
        </a>
        
        <?php if(isset($_GET['sm']) || isset($_GET['em'])) {?>
        <?php if (isset($_GET['sm'])) { ?>
            <div class="alert alert-success text-center" role="alert">
                <?= $_GET['sm']; ?>
            </div>
        <?php } ?>

        <?php if (isset($_GET['em'])) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $_GET['em']; ?>
            </div>
        <?php } ?>

        <?php if (isset($_GET['em']) != null || isset($_GET['sm']) != null) { ?>
            <script>
                if (performance.navigation.type === 1) {
                    window.location.href = 'index.php';
                }
            </script>
        <?php } ?>

        <?php }else {?>
            <div class="" style="margin-top:82px;"></div>
        <?php } ?>
        <a href="input.php">+ Tambahkan data</a>
    </div>

    <div class="body">
        <table cellspacing="100">
            <thead>
                <th id="one">No</th>
                <th id="two">Judul Buku</th>
                <th id="three">Pengarang</th>
                <th id="four">Jenis Buku</th>
                <th id="five">No. ISBN</th>
                <th id="six" colspan="2">Operasi</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                    <tr>
                        <td><?= $row['no']; ?></td>
                        <td><?= $row['judul_buku']; ?></td>
                        <td><?= $row['penulis']; ?></td>
                        <td><?= $row['jenis_buku']; ?></td>
                        <td><?= $row['no_isbn']; ?></td>
                        <td><a href="update.php?id=<?= $row['no'] ?>"><button class="btn btn-primary" type="button">Update</button></a></td>
                        <td><a href="delete.php?id=<?= $row['no'] ?>" onclick="return confirm('Yakin untuk delete?');"><button class="btn btn-danger" type="button">Delete</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>
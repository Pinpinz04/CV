<?php

include_once('connect.php');

$fix = mysqli_query($connection, "SELECT * FROM cv_data");
$data = mysqli_fetch_array($fix);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiculum Vitae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="main">
        <div class="top-section">
            <img src="foto path.jpg" alt="Fina Febrianti" class="profile">
            <p class="p"><?php echo $data['nama']?></p>
        </div>

        <div class="clearfix">

        <div class="col-div-4">
            <div class="content-box">
                <a href="update.php">
                <button>UPDATE</button>
                </a>
            </div>
        </div>

        <div class="line"></div>

        <div class="col-div-8">
            <div class="content-box">
                <p class="head">ALAMAT</p>
                <p class="p1"><?php echo $data['alamat']?></p>
                <p class="head">TELEPON</p>
                <p class="p1"><?php echo $data['telepon']?></p>
                <p class="head">EMAIL</p>
                <p class="p1"><?php echo $data['email']?></p>
                <p class="head">WEB</p>
                <p class="p1"><?php echo $data['web']?></p>
                <p class="head">PENDIDIKAN</p>
                <p class="p1"><?php echo $data['pendidikan']?></p>
                <p class="head">PENGALAMAN KERJA</p>
                <p class="p1"><?php echo $data['pengalaman_kerja']?></p>
                <p class="head">KETERAMPILAN</p>
                <p class="p1"><?php echo $data['keterampilan']?></p>
            </div>
        </div>

        </div>
    </div>

</body>
</html>
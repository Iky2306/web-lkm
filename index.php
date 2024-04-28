<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Author : diki alfarabi hadi Site : www.smarttechacademy.com-->
    <div class="content">
        <header>
        <h1 class="judul">WWW.smarttechacademy.COM</h1>
        <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3></header>
    <div class="menu">
        <ul>
        <li><a href="index.php?page=Home">HOME</a></li>
        <li><a href="index.php?page=About">TENTANG</a></li>
        <li><a href="index.php?page=Tutorial">TUTORIAL</a></li>
        <li><a href="index.php?page=Kontak">KONTAK</a></li>
        <li><a href="index.php?page=Form">FORM</a></li>
    </div>
    <div class="badan">
    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
            case 'Home':
            include "halaman/Home.php";
            break;
            case 'About':
            include "halaman/About.php";
            break;
            case 'Tutorial':
            include "halaman/Tutorial.php";
            break;
            case 'Kontak':
            include "halaman/Kontak.php";
            break;
            case 'Form':
            include "halaman/Form.php";
            break;
            default:
            echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
            break;
            }
        }else{
            include "halaman/home.php";
        }
    ?>
    </div>
</body>
</html>
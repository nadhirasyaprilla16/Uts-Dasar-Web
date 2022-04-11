<?php// Nadhira Syaprilla Brina 
// MI-1F?>
<html>
    <head>
        <title> ORDER </title>
        <link rel="stylesheet" type="text/css" href="pemesanan.css"> 
        <body>
            <div class="pemesanan">
                <div class="box">
            <h1> ORDER </h1>
        <form class="form" action="pembayaran.php" method="POST">
            <label class="teks" > Nama Pembeli</label>
            <input class="inputan" type="text" name="nama" placeholder="Nama"><br><br>
            <label class="teks" > Jenis Menu</label>
            <input class="inputan" type="text" name="menu" placeholder="Menu"><br><br>
            <label class="teks" > Jumlah</label>
            <input class="inputan" type="text" name="jumlah" placeholder="Jumlah"><br><br>
            <p>Status Pembeli: 
                <input type="radio" name="status" value="member"> Member
                <input type="radio" name="status" value="non member"> Non Member</p>
        <form action="pembayaran.php"  method="POST">
        <input type="submit"  value="Hitung">
        </form>
        </form>
            </div>
        </div>
        <li><a href="home.php"> HOME </a></li>
        </body>
    </head>
</html>
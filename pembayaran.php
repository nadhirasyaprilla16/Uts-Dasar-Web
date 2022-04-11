<?php// Nadhira Syaprilla Brina 
// MI-1F?>
<html>
    <head>
        <title> PEMBAYARAN </title>
        <link rel="stylesheet" type="text/css" href="pembayaran.css"> 
        <body>
        <div class="pembayaran">
            <div class="box">
        <?php
                        if(isset($_POST['nama']) AND isset($_POST['status']) AND isset($_POST['menu']) AND isset($_POST['jumlah'])){
                            $nama=$_POST['nama'];
                            $status=$_POST['status'];
                            $menu=$_POST['menu'];
                            $jumlah=$_POST['jumlah']; 
                            $jumlahTransaksi="";
                            $JmlDiskon="";
                            $total="";
                        }

                        if($status == "Member") {
                            if($menu == "Menu1") {
                                if($jumlah == 1) {
                                    $diskon = 0.05 * 8000;
                                    $harga = 8000 - $diskon; 
                                    $jumlahTransaksi = 8000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else if($jumlah == 2 || $jumlah == 3) {
                                    $diskon = 0.07 * 8000;
                                    $harga = 8000 - $diskon; 
                                    $jumlahTransaksi = 8000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }else if($jumlah > 3) {
                                    $diskon = 0.1 * 8000;
                                    $harga = 8000 - $diskon; 
                                    $jumlahTransaksi = 8000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }
                            }else if($menu == "Menu2") {
                                if($jumlah == 1) {
                                    $diskon = 0.05 * 10000;
                                    $harga = 10000 - $diskon; 
                                    $jumlahTransaksi = 10000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else if($jumlah == 2 || $jumlah == 3) {
                                    $diskon = 0.07 * 10000;
                                    $harga = 10000 - $diskon; 
                                    $jumlahTransaksi = 10000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }else if($jumlah > 3) {
                                    $diskon = 0.1 * 10000;
                                    $harga = 10000 - $diskon; 
                                    $jumlahTransaksi = 10000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }
                            }else if($menu == "Menu3") {
                                if($jumlah == 1) {
                                    $diskon = 0.05 * 12000;
                                    $harga = 12000 - $diskon; 
                                    $jumlahTransaksi = 12000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else if($jumlah == 2 || $jumlah == 3) {
                                    $diskon = 0.07 * 12000;
                                    $harga = 12000 - $diskon; 
                                    $jumlahTransaksi = 12000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }else if($jumlah > 3) {
                                    $diskon = 0.1 * 12000;
                                    $harga = 12000 - $diskon; 
                                    $jumlahTransaksi = 12000 * $jumlah;
                                    $JmlDiskon = $diskon * $jumlah; 
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }
                            }
                        }else {
                            if($menu == "Menu1") {
                                if($jumlah > 6 && $jumlah < 10) {
                                    $jumlahTransaksi = 8000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0.05;
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else if($jumlah > 10) {
                                    $jumlahTransaksi = 8000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0.07;
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else {
                                    $jumlahTransaksi = 8000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0;
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }
                            }else if($menu == "Menu2") {
                                if($jumlah > 6 && $jumlah < 10) {
                                    $jumlahTransaksi = 10000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0.05;
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else if($jumlah > 10) {
                                    $jumlahTransaksi = 10000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0.07;
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else {
                                    $jumlahTransaksi = 10000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0;
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }
                            }else if($menu == "Menu3") {
                                if($jumlah > 6 && $jumlah < 10) {
                                    $jumlahTransaksi = 12000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0.05;
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else if($jumlah > 10) {
                                    $jumlahTransaksi = 12000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0.07;
                                    $total = $jumlahTransaksi - $JmlDiskon; 
                                }else {
                                    $jumlahTransaksi = 12000 * $jumlah; 
                                    $JmlDiskon = $jumlahTransaksi * 0;
                                    $total = $jumlahTransaksi - $JmlDiskon;
                                }
                            }
                        }
                        echo "TOTAL PEMBAYARAN";
                        echo "<br><br>";
                        echo "Nama Pembeli        : " .$nama;
                        echo "<br>";
                        echo "Status Pembeli      : " .$status;
                        echo "<br>";
                        echo "Total Harga         : " .$jumlahTransaksi;
                        echo "<br>";
                        echo "<br><br>";
                        echo "Yang harus Anda bayarkan " .$total;
                    ?>
                    </div>
            </div>
            <li><a href="home.php"> HOME </a></li>
        </body>
    </head>
</html>
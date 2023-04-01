<?php
include 'server/connection.php';


    $no_ktm = $_POST['no_ktm'];
    $no_plat = ($_POST['no_plat']);
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $tanggal = date('Y-m-d', strtotime('+1 month'));
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT into membership values('',$no_ktm,'$jenis_kendaraan','$tanggal','$no_plat','$email','$alamat')";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header("location: Login.php");
    } else {
        header("location: register.php?error=Registrasi+gagal");
    }

    header("location: Login.php");
?>
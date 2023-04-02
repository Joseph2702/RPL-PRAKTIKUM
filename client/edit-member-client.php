<?php

if(count($_POST) > 0){
    mysqli_query($conn,"UPDATE membership set email ='". $_POST['email']."', jenis_kendaraan='".
    $_POST['jenis_kendaraan']."',no_plat='".
    $_POST['no_plat']."', alamat='".
    $_POST['alamat']."' WHERE no_ktm='". $_POST['no_ktm']."'");
    $result = mysqli_query($conn,"SELECT * FROM membership WHERE no_ktm='". $_POST['no_ktm']. "'");
    header('location: daashboard-member.php?message=Success Updated');
    $row = mysqli_fetch_array($result);
}


?>

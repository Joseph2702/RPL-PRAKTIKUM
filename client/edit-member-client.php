<?php
// jo
if (isset($_SESSION['logged_in']) && isset($_SESSION['no_ktm']) && isset($_SESSION['id_membership'])) {
    $no_ktm = $_SESSION['no_ktm'];
    $query = "SELECT * FROM membership WHERE no_ktm = '$no_ktm'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if (isset($_POST['submit'])) {
        mysqli_query($conn, "UPDATE membership set email ='" . $_POST['email'] . "', jenis_kendaraan='" .
            $_POST['jenis_kendaraan'] . "',no_plat='" .
            $_POST['no_plat'] . "', alamat='" .
            $_POST['alamat'] . "' WHERE no_ktm='" . $_POST['no_ktm'] . "'");
        $result = mysqli_query($conn, "SELECT * FROM membership WHERE no_ktm='" . $_POST['no_ktm'] . "'");
        header('location: daashboard-member.php?message=Success Updated');
    }
}
//dete
if (isset($_SESSION['logged_in']) && isset($_GET['no_ktm']) && isset($_SESSION['id_admin'])) {
    $no_ktm = $_GET['no_ktm'];
    $query = "SELECT * FROM membership WHERE no_ktm = '$no_ktm'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if (isset($_POST['submit'])) {
        mysqli_query($conn, "UPDATE membership set email ='" . $_POST['email'] . "', jenis_kendaraan='" .
            $_POST['jenis_kendaraan'] . "',no_plat='" .
            $_POST['no_plat'] . "', alamat='" .
            $_POST['alamat'] . "' WHERE no_ktm='" . $_POST['no_ktm'] . "'");
        $result = mysqli_query($conn, "SELECT * FROM membership WHERE no_ktm='" . $_POST['no_ktm'] . "'");
        header('location: dashboard-admin.php?message=Success Updated');
    }
}
?>
<?php

session_start();
include('server/connection.php');

if (isset($_SESSION['logged_in'])) {
    header('location: daasboard-member.php');
    exit;
}

if (isset($_POST['login_btn'])) {
    $no_ktm = $_POST['no_ktm'];
    $no_plat = ($_POST['no_plat']);

    $query = "SELECT * FROM membership
        WHERE no_ktm = ? AND no_plat = ? LIMIT 1";

    $stmt_login = $conn->prepare($query);
    $stmt_login->bind_param('ss', $no_ktm, $no_plat);

    if ($stmt_login->execute()) {
        $stmt_login->bind_result(
            $id_member,
            $no_ktm,
            $jenis_kendaraan,
            $masa_berlaku,
            $no_plat,
            $email,
            $alamat
        );
        $stmt_login->store_result();

        if ($stmt_login->num_rows() == 1) {
            $stmt_login->fetch();

            $_SESSION['id_membership'] = $id_member;
            $_SESSION['no_ktm'] = $no_ktm;
            $_SESSION['jenis_kendaraan'] = $jenis_kendaraan;
            $_SESSION['masa_berlaku'] = $masa_berlaku;
            $_SESSION['no_plat'] = $no_plat;
            $_SESSION['email'] = $email;
            $_SESSION['alamat'] = $alamat;
            $_SESSION['logged_in'] = true;

            header('location:daashboard-member.php?message=Logged in successfully');
        } else {
            header('location:login.php?error=Could not verify your account');
        }
    } else {
        // Error
        header('location: login.php?error=Something went wrong!');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body class="vh-100 d-flex justify-content-center align-items-center" style="font-family: Lato, Arial, sans-serif;">
    <div class="row shadow" style="min-width: 780px;">
        <div class="col-6 p-5 " style="background-color: #fcfcfc;  ">
            <form method="POST" action="Login.php">
                <div class="mb-3">
                    <h3 class="mb-4 " style=" margin-bottom: 24px; ">Sign in</h3>
                    <label for="exampleInputEmail1" class="form-label" style="font-size: 14px ">NO.KTM</label>
                    <input type="text" name="no_ktm" class="form-control  rounded-pill " id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-size: 14px">NO.PLAT</label>
                    <input type="text" name="no_plat" class="form-control  rounded-pill " id="exampleInputPassword1 ">
                </div>
                <div class="mb-3">
                    <input type="submit" class="site-btn  rounded-pill" id="login-btn" name="login_btn" value="Sign In" style="width: 290px; height: 40px; 
                    background-color: #FD841F; border: none; font-size: 14px; ">
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                        <input type="checkbox" checked>
                        <label class="checkbox-wrap checkbox-primary mb-0" style="font-size: 14px">Remember Me
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right" style="margin-left: 73px; font-size: 14px;">
                        <a href="#" style="color: grey;">Login as Admin?</a>
                    </div>
                </div>
                <!-- <button type="button mx-5" class="btn btn-primary "
                    style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; width: 300px; ">
                    Sign In
                </button> -->

            </form>
        </div>
        <div class="col-6  d-flex flex-column justify-content-center" style="background-color: #FD841F;">
            <h3 class="text-center" style="font-weight: bold; color: white; ">Welcome to Login</h3>
            <p class="text-center fs-7" style="color: white; margin-top: 6px; font-size: 15px; ">Dont have Account?</p>
            <button type="button mx-5" class="btn btn-primary rounded-pill bg-transparent"  style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; width: 70px; 
            margin-left: 152px; border-color: white;">
               <a href="register.php" style="color: white;"> Sign Up </a> </button>
        </div>
    </div>
</body>

</html>

<style>



</style>
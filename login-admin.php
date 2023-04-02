<?php
include('server/connection.php');
include('client/login-admin-client.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Parkeer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body class="vh-100 d-flex justify-content-center align-items-center" style="font-family: Lato, Arial, sans-serif;">
    <div class="row shadow" style="min-width: 780px;">
        <div class="col-6 p-5 " style="background-color: #fcfcfc;  ">
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <h3 class="mb-4 " style=" margin-bottom: 24px; ">Sign in</h3>
                    <label for="exampleInputEmail1" class="form-label" style="font-size: 14px ">Admin ID</label>
                    <input type="text" name="id_admin" class="form-control  rounded-pill " id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-size: 14px">PIN</label>
                    <input type="text" name="pin" class="form-control  rounded-pill " id="exampleInputPassword1 ">
                </div>
                <div class="mb-3">
                    <input type="submit" class="site-btn  rounded-pill" id="login-btn" name="login_btn" value="Sign In"
                        style="width: 290px; height: 40px; 
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
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center" style="background-color: #FD841F;">
            <h3 class="text-center" style="font-weight: bold; color: white; ">Login As Admin</h3>
        </div>
    </div>
</body>

</html>

<style>
    body {
        background-image: url('bg.png');
        background-size: 800px;
    }
</style>
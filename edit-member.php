<?php
include('server/connection.php');
include('client/edit-member-client.php');


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member | Parkeer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/our.css">
    <style>
        .dt-avatar {
            background: none;
            border: none;
        }

        body {
            background: #fff;
            background-image: url('img/doodle3.jpg');
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.97) 0%, rgba(255, 255, 255, 0.97) 100%), url('img/doodle3.jpg');
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <!-- Nav -->
    <h1></h1>
    <nav class="navbar sticky-top">
        <div class="container-fluid row g-5 px-5 mx-5 py-5">
            <div class="col col-lg-2">
                <img src="img/logo.png" alt="" width="100px">
            </div>
            <!-- <div class="col col-lg-2 d-flex justify-content-end">
            </div> -->
        </div>
    </nav>
    <div class="row g-5 px-5 mx-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-4">EDIT PROFILE</h2>
        </div>
        <form action="" method="post" name="formMember">
            <input type="hidden" name="no_ktm" value="<?= $_SESSION['no_ktm'] ?>">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">Profile Member</h5>
                            <h4 class="text-muted mb-1"><?php echo $_SESSION['no_ktm'] ?></h4> <br>
                            <input type="submit" name="submit" value="Save" class="btn btn-success">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">STUDENT ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $_SESSION['no_ktm'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input type="text" name="email" class="form-control  rounded-pill " id="exampleEmail ">
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Vehicle Type</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <select name="jenis_kendaraan" class="rounded-pill" style="width: 100%; padding: 5px;">
                                            <option value="Mobil">Mobil</option>
                                            <option value="Motor">Motor</option>
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Vehicle Register</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input type="text" name="no_plat" class="form-control  rounded-pill " id="exampleNoPlat ">
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        <input type="text" name="alamat" class="form-control  rounded-pill " id="exampleAlamat">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<?php

include('server/connection.php');


if (isset($_SESSION['logged_in'])) {
    $no_ktm = $_SESSION['no_ktm'];
    $query = "SELECT * FROM membership WHERE no_ktm = '$no_ktm'";
}
$result = mysqli_query($conn, $query);

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}

// if (!isset($_SESSION['logged_in'])) {
//     header('location: actionEdit.php');
//     exit;
// }

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['no_ktm']);
        header('location: login.php');
        exit;
    } else {
        echo "Session logged_in tidak ditemukan.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Dashboard | Parkeer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                <img src="img/logo-dashboard.png" alt="" width="70px">
            </div>
            <div class="col col-lg-2 d-flex justify-content-end">
                <div class="btn-group">
                    <button type="button" class="dropdown-toggle dt-avatar" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg"
                            class="object-fit-cover border rounded-circle" width="31px" alt="Profile Picture">
                        <span>Profile</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <!-- </li> -->
                        <li><a class="dropdown-item text-danger" href="daashboard-member.php?logout=1">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Body -->
    <!-- Sidebar -->
    <div class="row g-5 px-5 mx-5">
        <div class="col col-lg-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list"
                    href="#list-home" role="tab" aria-controls="list-home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                    href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
            </div>
        </div>
        <!-- Content -->
        <div class="col col-lg-10">
            <div class="tab-content" id="nav-tabContent">
                <!-- Membership Content -->
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-4">MEMBERSHIP INFO</h2>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">CARD Member</h4>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <div class="d-flex justify-content-between">
                                            <h6><img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg"
                                                    class="object-fit-cover border rounded-circle " width="225px"
                                                    alt="Profile Picture"></h6>
                                            <div class="col-7"> <br>
                                                <h6>ID MEMBERSHIP :
                                                    <?php echo $row['id_membership'] ?>
                                                </h6>
                                                <h6>NO KTM :
                                                    <?php echo $row['no_ktm'] ?>
                                                </h6>
                                                <h6>NO PLAT :
                                                    <?php echo $row['no_plat'] ?>
                                                </h6>
                                                <h6>JENIS KENDARAAN :
                                                    <?php echo $row['jenis_kendaraan'] ?>
                                                </h6>
                                                <h6>EMAIL :
                                                    <?php echo $row['email'] ?>
                                                </h6>
                                                <h6>ALAMAT :
                                                    <?php echo $row['alamat'] ?>
                                                </h6>
                                                <h6>MASA BERLAKU :
                                                    <?php echo $row['masa_berlaku'] ?>
                                                </h6>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Content -->
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-4">Profile Account</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">Profile Member</h5>
                                    <h4 class="text-muted mb-1">
                                        <?php echo $_SESSION['no_ktm'] ?>
                                    </h4> <br>
                                    <button type="button" class="btn btn-secondary">
                                        <a style="color : white"
                                            href="edit-member.php?no_ktm=<?php echo $_SESSION['no_ktm']; ?> ">Edit</a>
                                    </button>
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
                                            <p class="text-muted mb-0">
                                                <?php echo $_SESSION['no_ktm'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">
                                                <?php echo $_SESSION['email'] ?>
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
                                                <?php echo $_SESSION['jenis_kendaraan'] ?>
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
                                                <?php echo $_SESSION['no_plat'] ?>
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
                                                <?php echo $_SESSION['alamat'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>
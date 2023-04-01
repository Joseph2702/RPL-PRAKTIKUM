

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
    </style>
</head>

<body class="bg-body-tertiary">
    <!-- Nav -->
    <nav class="navbar sticky-top">
        <div class="container-fluid row g-5 px-5 mx-5 py-5">
            <div class="col col-lg-2">
                <img src="img/logo.png" alt="" width="70px">
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
                        <li><a class="dropdown-item text-danger" href="#">Log out</a></li>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">CARD Member</h4>
                                    <h6>ID MEMBERSHIP : <?php echo $_SESSION['id_membership'] ?></h6>
                                    <h6>NO KTM : <?php echo $_SESSION['no_ktm'] ?> </h6>
                                    <h6>JENIS KENDARAAN : <?php echo $_SESSION['jenis_kendaraan'] ?></h6>
                                    <h6>NO PLAT : <?php echo $_SESSION['no_plat'] ?> </h6>
                                    <h6>MASA BERLAKU : <?php echo $_SESSION['masa_berlaku'] ?></h6>
                                    <h6>EMAIL : <?php echo $_SESSION['email'] ?></h6>
                                    <h6>ALAMAT : <?php echo $_SESSION['alamat'] ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Content -->
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <h2 class="mb-4">Profile</h2>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
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
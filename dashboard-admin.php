<?php
include('server/connection.php');
include('client/dashboard-admin-client.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | Parkeer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/our.css">
</head>

<body class="our-body-admin">
    <!-- Spinner Event On Document Ready -->
    <div id="our-wait" class="our-loading-wait">
        <div class="spinner-border" role="status">
        </div>
    </div>

    <!-- Nav -->
    <nav class="navbar">
        <div class="container-fluid row px-5 py-5">
            <div class="col col-lg-6 d-flex justify-content-start">
                <img src="img/logo.png" alt="Parkeer Logo" width="70px">
            </div>
            <div class="col col-lg-6 d-flex justify-content-end">

                <div class="btn-group">
                    <button type="button" class="dropdown-toggle our-avatar" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg"
                            class="object-fit-cover border rounded-circle" width="31px" alt="Profile Picture">
                        <span>
                            <?= $result1['nama_admin'] ?>
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-danger" href="<?= $_SERVER['PHP_SELF'] . "?logout=1"; ?>">Log
                                out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col col-lg-2">
                <div class="list-group sticky-top pt-4" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-membership-list"
                        data-bs-toggle="list" href="#list-membership" role="tab"
                        aria-controls="list-membership">Membership</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                        href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                </div>
            </div>
            <!-- Content -->
            <div class="col col-lg-10">
                <!-- Tab -->
                <div class="tab-content py-4" id="nav-tabContent">
                    <!-- Membership Content -->
                    <div class="tab-pane fade show active" id="list-membership" role="tabpanel"
                        aria-labelledby="list-membership-list">

                        <!-- Finder -->
                        <div class="sticky-top py-4">
                            <?php include('components/dashboard-admin-finder.php'); ?>
                        </div>

                        <div class="card">
                            <!-- Table -->
                            <div class="table-responsive my-2">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student Code</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Vehicle Type</th>
                                            <th scope="col">Vehicle Register</th>
                                            <th scope="col">Member ID</th>
                                            <th scope="col">Due Date</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        while ($row = mysqli_fetch_assoc($result2)) {
                                            $i++; ?>
                                            <tr>
                                                <td class="align-middle">
                                                    <p class="fw-semibold m-0">
                                                        <?= $i ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['no_ktm'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['email'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['alamat'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['jenis_kendaraan'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['no_plat'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['id_membership'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-light m-0">
                                                        <?= $row['masa_berlaku'] ?>
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-outline-primary dropdown-toggle" href="#"
                                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Action
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer">
                                <small class="text-body-tertiary">&copy; 2023 Parkeer.</small>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Content -->
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card">
                            <div class="card-body">
                                <img style="border-radius: 100%;" src="img/" alt="">
                                <h5 class="card-title">Haii!! Mr/Mrs.
                                    <?= $result1['nama_admin'] ?>
                                </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <?= $result1['no_telepon'] ?>
                                </li>
                                <li class="list-group-item">
                                    <?= $result1['email'] ?>
                                </li>
                                <li class="list-group-item">
                                    <?= $result1['alamat'] ?>
                                </li>
                            </ul>
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
    <script src="js/our.js"></script>
</body>

</html>
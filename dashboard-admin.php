<?php
session_start();
include('server/connection.php');
include('server/admin-features.php');


// if (!isset($_SESSION['logged_in'])) {
//     header('location: login.php');
//     exit;
// }


// if (isset($_GET['logout'])) {
//     if (isset($_SESSION['logged_in'])) {
//         unset($_SESSION['logged_in']);
//         unset($_SESSION['nama_admin']);
//         header('location: login.php');
//         exit;
//     }
// }

$member = mysqli_query($conn, "SELECT * FROM membership");
$jumlah_member = mysqli_num_rows($member);

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
        <div class="container-fluid row g-5 px-5 mx-5 py-5">
            <div class="col col-lg-2">
                <img src="img/logo.png" alt="" width="70px">
            </div>
            <div class="col col-lg-2 d-flex justify-content-end">
                <div class="btn-group">
                    <button type="button" class="dropdown-toggle our-avatar" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://sm.ign.com/ign_ap/cover/a/avatar-gen/avatar-generations_hugw.jpg"
                            class="object-fit-cover border rounded-circle" width="31px" alt="Profile Picture">
                        <span>Admin</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">
                            <?= $_SESSION['nama_admin'] ?>
                        </h6>
                        </li>
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
                    <div class="row">
                        <!-- Progress -->
                        <div class="col col-12 col-lg-4 mb-2">
                            <div class="card border-primary">
                                <div class="card-body d-flex justify-content-between align-items-end">
                                    <h6 class="card-title m-0">Total Mahasiswa</h6>
                                    <?= $jumlah_member; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mb-2">
                            <div class="card border-primary">
                                <div class="card-body d-flex justify-content-between align-items-end">
                                    <h6 class="card-title m-0">Total Membership</h6>
                                    <?= $jumlah_member; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4 mb-2">
                            <div class="card border-primary">
                                <div class="card-body d-flex justify-content-between align-items-end">
                                    <h6 class="card-title m-0">Total Progress</h6>
                                    <?= $jumlah_member; ?>
                                </div>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="col-12 my-4">
                            <div class="card">
                                <!-- Search, Filter, Input -->
                                <div class="card-body pb-0">
                                    <form class="row sticky-top" action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
                                        <div class="col-12 col-lg-3 my-2">
                                            <div class="input-group input-group-sm">
                                                <input name="searchData" type="text"
                                                    class="form-control form-control-sm"
                                                    placeholder="Cari di semua kriteria..." value="<?php if (isset($_GET['searchData'])) {
                                                        echo $_GET['searchData'];
                                                    } ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 my-2">
                                            <select name="sortBy" class="form-select form-select-sm"
                                                aria-label=".form-select-sm example">
                                                <option <?php if (!isset($_GET['sortBy'])) {
                                                    echo "selected";
                                                } ?>   selected disabled>Sort</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "studentAsc") {
                                                    echo "selected";
                                                } ?>   value="studentAsc">Sort by Student Code A-Z</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "studentDesc") {
                                                    echo "selected";
                                                } ?>   value="studentDesc">Sort by Student Code Z-A</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "vehicleAsc") {
                                                    echo "selected";
                                                } ?>   value="vehicleAsc">Sort by Vehicle Type A-Z</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "vehicleDesc") {
                                                    echo "selected";
                                                } ?>   value="vehicleDesc">Sort by Vehicle Type Z-A</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "registerAsc") {
                                                    echo "selected";
                                                } ?>   value="registerAsc">Sort by Vehicle Register A-Z</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "registerDesc") {
                                                    echo "selected";
                                                } ?>   value="registerDesc">Sort by Vehicle Register Z-A</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "memberAsc") {
                                                    echo "selected";
                                                } ?>   value="memberAsc">Sort by Member ID A-Z</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "memberDesc") {
                                                    echo "selected";
                                                } ?>   value="memberDesc">Sort by Member ID Z-A</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "dueAsc") {
                                                    echo "selected";
                                                } ?>   value="dueAsc">Sort by Due Date A-Z</option>
                                                <option <?php if (isset($_GET['sortBy']) && $_GET['sortBy'] == "dueDesc") {
                                                    echo "selected";
                                                } ?>   value="dueDesc">Sort by Due Date Z-A</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-3 my-2">
                                            <select name="filterVehicleBy" class="form-select form-select-sm"
                                                aria-label=".form-select-sm example">
                                                <option <?php if (!isset($_GET['filterVehicleBy'])) {
                                                    echo "selected";
                                                } ?> disabled>Filter Kendaraan</option>
                                                <option <?php if (isset($_GET['filterVehicleBy']) && $_GET['filterVehicleBy'] == "Mobil") {
                                                    echo "selected";
                                                } ?>   value="Mobil">Mobil</option>
                                                <option <?php if (isset($_GET['filterVehicleBy']) && $_GET['filterVehicleBy'] == "Motor") {
                                                    echo "selected";
                                                } ?> value="Motor">Motor</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-3 my-2">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button class="btn btn-sm btn-outline-primary w-100" type="button"
                                                        onclick="document.forms[0].submit()">Cari</button>
                                                </div>
                                                <div class="col-6">
                                                    <a class="btn btn-outline-secondary btn-sm w-100"
                                                        href="<?= $_SERVER['PHP_SELF']; ?>">Reset</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Table -->
                                <div class="row">
                                    <div class="col-12">
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
                                                    while ($row = mysqli_fetch_assoc($dataMembership)) {
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
                                                                    <a class="btn btn-sm btn-outline-primary dropdown-toggle"
                                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        Action
                                                                    </a>

                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item text-danger"
                                                                                href="#">Remove</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination -->
                                <div class="col-12 d-flex justify-content-center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-tertiary">&copy; 2023 Parkeer.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Content -->
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h2 class="mb-4">Profile Account</h2>
                <div class="card">
                    <div class="card-body">
                        <img style="border-radius: 100%;" src="img/<?= $_SESSION['photo_admin'] ?>" alt="">
                        <h5 class="card-title">Haii!! Mr/Mrs.
                            <?= $_SESSION['nama_admin'] ?>
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <?= $_SESSION['no_telepon'] ?>
                        </li>
                        <li class="list-group-item">
                            <?= $_SESSION['email'] ?>
                        </li>
                        <li class="list-group-item">
                            <?= $_SESSION['alamat'] ?>
                        </li>
                    </ul>
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
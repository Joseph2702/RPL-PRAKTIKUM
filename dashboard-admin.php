<?php
session_start();
include('server/connection.php');
if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $q = "SELECT * FROM membership WHERE id_membership LIKE '%$keyword%' or no_ktm
     LIKE '%$keyword%' or no_plat LIKE '%$keyword%' ";
} else {
    $q = 'SELECT * FROM membership';
}
$result = mysqli_query($conn, $q);


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

//  Sorting
$query1 = "SELECT * FROM membership order by id_membership";
$path = 'asc';
$newpath = 'asc';

if (isset($_GET['orderby'])) {
    $orderby = $_GET['orderby'];
    $path = $_GET['path'];

    $query1 = "SELECT * FROM  membership order by $orderby $path ";
    if ($path == 'asc') {
        $newpath = 'desc';

    } else {
        $newpath = 'asc';
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | Parkeer</title>
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
    <nav class="navbar">
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
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-9">
                                            <select class="form-select form-select-sm"
                                                aria-label=".form-select-sm example">
                                                <option selected disabled>Sort</option>
                                                <option value="1">Sort by Student Code A-Z</option>
                                                <option value="1">Sort by Student Code Z-A</option>
                                                <option value="2">Sort by Vehicle Type A-Z</option>
                                                <option value="2">Sort by Vehicle Type Z-A</option>
                                                <option value="2">Sort by Vehicle Register A-Z</option>
                                                <option value="2">Sort by Vehicle Register Z-A</option>
                                                <option value="2">Sort by Due Date A-Z</option>
                                                <option value="2">Sort by Due Date Z-A</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="text" class="form-control form-control-sm" id="searchInput"
                                                    placeholder="Search...">
                                                <button class="btn btn-outline-primary" type="button"
                                                    id="button-addon2">Search</button>
                                            </div>
                                        </div>
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
                                                        while ($row = mysqli_fetch_assoc($result)) {
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
</body>

</html>
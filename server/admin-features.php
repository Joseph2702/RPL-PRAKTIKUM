<?php
$db = 'membership';
if (isset($_GET['searchData']) || isset($_GET['sortBy']) || isset($_GET['filterVehicleBy'])) {

    $select = "SELECT * FROM `$db`";

    if (isset($_GET['searchData'])) {
        $target = $_GET['searchData'];
    }
    if (isset($_GET['sortBy'])) {
        if ($_GET['sortBy'] == "studentAsc") {
            header("Location: http://www.google.com/");
        }
    }

    if (isset($_GET['filterVehicleBy'])) {
        $filter = $_GET['filterVehicleBy'];
        $filterQuery = "WHERE `jenis_kendaraan` = '$filter'";
    }

$query =
    // -- AND
    // -- (`id_membership` LIKE '%$target%'
    // -- OR
    // -- `no_plat` LIKE '%$target%'
    // -- OR
    // -- `email` LIKE '%$target%'
    // -- OR
    // -- `no_ktm` LIKE '%$target%')
    // -- ";
} else {
    $query = 'SELECT * FROM `$db`';
}

$dataMembership = mysqli_query($conn, $query);
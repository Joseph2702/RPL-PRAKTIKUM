<?php
$db = 'membership';
if (isset($_GET['searchData']) || isset($_GET['sortBy']) || isset($_GET['filterVehicleBy'])) {
    if (isset($_GET['searchData'])) {
        $target = $_GET['searchData'];
    }
    if (isset($_GET['sortBy'])) {
        $sort = $_GET['sortBy'];
    }

    if (isset($_GET['filterVehicleBy'])) {
        $filter = $_GET['filterVehicleBy'];
    }

    $query = "SELECT * FROM `$db`
    WHERE
    `jenis_kendaraan` = '$filter'
    AND
    (`id_membership` LIKE '%$target%'
    OR
    `no_plat` LIKE '%$target%'
    OR
    `email` LIKE '%$target%'
    OR
    `no_ktm` LIKE '%$target%')
    ";
} else {
    $query = 'SELECT * FROM membership';
}

$dataMembership = mysqli_query($conn, $query);
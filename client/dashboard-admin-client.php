<?php

if (!isset($_SESSION['logged_in'])) {
    header('location: login-admin.php');
    exit;
}

if (isset($_GET['logout']) && isset($_GET['logout']) == 1) {
    session_destroy();
    header('location: login-admin.php');
    exit;
}

// admin
$db1 = 'admin';
$logged_id = $_SESSION['id_admin'];
$query = "SELECT * FROM $db1 WHERE id_admin = $logged_id";
$result1 = mysqli_fetch_assoc(mysqli_query($conn, $query));
$queryTotalAdmin = "SELECT * FROM $db1 WHERE id_admin = $logged_id";
$countAdmin = mysqli_num_rows(mysqli_query($conn, $queryTotalAdmin));

// membership
$db2 = 'membership';

if (isset($_GET['searchData']) || isset($_GET['sortBy']) || isset($_GET['filterVehicleBy']) || isset($_GET['page'])) {

    if (isset($_GET['searchData'])) {
        $searchData = $_GET['searchData'];
        $searchDataQuery = "
        (`id_membership` LIKE '%$searchData%'
        OR
        `no_plat` LIKE '%$searchData%'
        OR
        `email` LIKE '%$searchData%'
        OR
        `no_ktm` LIKE '%$searchData%')
        ";
    }

    if (isset($_GET['sortBy'])) {
        $sortBy = $_GET['sortBy'];
        if ($sortBy == "studentAsc") {
            $sortByQuery = "ORDER BY `no_ktm` ASC";
        } else if ($sortBy == "studentDesc") {
            $sortByQuery = "ORDER BY `no_ktm` DESC";
        } else if ($sortBy == "vehicleAsc") {
            $sortByQuery = "ORDER BY `jenis_kendaraan` ASC";
        } else if ($sortBy == "vehicleDesc") {
            $sortByQuery = "ORDER BY `jenis_kendaraan` DESC";
        } else if ($sortBy == "registerAsc") {
            $sortByQuery = "ORDER BY `no_plat` ASC";
        } else if ($sortBy == "registerDesc") {
            $sortByQuery = "ORDER BY `no_plat` DESC";
        } else if ($sortBy == "memberAsc") {
            $sortByQuery = "ORDER BY `id_membership` ASC";
        } else if ($sortBy == "memberDesc") {
            $sortByQuery = "ORDER BY `id_membership` DESC";
        } else if ($sortBy == "dueAsc") {
            $sortByQuery = "ORDER BY `masa_berlaku` ASC";
        } else if ($sortBy == "dueDesc") {
            $sortByQuery = "ORDER BY `masa_berlaku` DESC";
        }
    } else {
        $sortByQuery = "ORDER BY `no_ktm` ASC"; //decoy sort
    }

    if (isset($_GET['filterVehicleBy'])) {
        $filterVehicleBy = $_GET['filterVehicleBy'];
        $filterVehicleByQuery = "(`jenis_kendaraan` LIKE '%$filterVehicleBy%')";
    } else {
        $filterVehicleByQuery = "(`id_membership` IS NOT NULL)"; //decoy filter
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    if (isset($_GET['limitData'])) {
        $limitData = $_GET['limitData'];
        $startRow = ($limitData * $page) - $limitData;
        $endRow = $limitData;
        $limitDataQuery = " LIMIT $startRow, $endRow";
    }

    $max = "SELECT * FROM $db2 WHERE" . $searchDataQuery . "AND" . $filterVehicleByQuery . $sortByQuery;
    $query = "SELECT * FROM $db2 WHERE" . $searchDataQuery . "AND" . $filterVehicleByQuery . $sortByQuery . $limitDataQuery;
    $result2 = mysqli_query($conn, $query);
    $maxResult = mysqli_query($conn, $max);
    $countResult2 = mysqli_num_rows($result2);
    $countMaxResult = mysqli_num_rows($maxResult);
    $totalPages = ceil($countMaxResult / $limitData);
} else {
    header("Location: " . $_SERVER['PHP_SELF'] . "?searchData=&page=1&limitData=50");
}
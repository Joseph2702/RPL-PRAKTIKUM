<?php
if (isset($_SESSION['logged_in'])) {
    header('location:dashboard-admin.php');
    exit;
}

if (isset($_POST['login_btn'])) {
    $id_admin = ($_POST['id_admin']);
    $pin = ($_POST['pin']);
    $query = "SELECT * FROM admin WHERE id_admin = ? AND pin = ? LIMIT 1";

    $stmt = $conn->prepare($query);
    $stmt->bind_param('ii', $id_admin, $pin);
    $stmt->execute();
    $stmt->bind_result(
        $id_admin,
        $nama_admin,
        $pin,
        $no_telepon,
        $email,
        $alamat,
        $photo_admin
    );

    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        if ($stmt->fetch()) {
            $_SESSION['logged_in'] = true;
            $_SESSION['id_admin'] = $id_admin;
            header('location:dashboard-admin.php?message=Logged in successfully');
            exit();
        }
    } else {
        header('location:login-admin.php?error=Could not verify your account');
    }

    $stmt->close();
}
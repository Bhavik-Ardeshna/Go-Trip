<?php
$title = "Agency";
require_once '../db/config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $psd = $_POST['psd'];

    $query = "SELECT * FROM agency";

    if ($result = mysqli_query($conn, $query)) {
        $flag = 0;
        while ($data = mysqli_fetch_assoc($result)) {
            echo $data['org_name'];
            if ($data['org_name'] == $name and $data['password'] == $psd) {
                $flag = 1;
                break;
            }
        }

        if ($flag == 1) {
            $_SESSION['AUTH_AGENCY_NAME'] = $name;
            header("Location: home.php");
            exit();
        } else {
            $_SESSION['ERROR_LOGIN_AGENCY'] = 'Invalid Login Details';
            header("Location: index.php");
            exit();
        }
    }
}

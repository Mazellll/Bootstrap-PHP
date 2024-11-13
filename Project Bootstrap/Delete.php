<?php
include 'connect.php';

$id = $_GET['id'];
$sql = $connect->query("SELECT * FROM data WHERE id='$id'");
$data = $sql->fetch_assoc();
$query = $connect->query("DELETE FROM data WHERE id='$id'");

if ($query) {
    // Redirect ke Message.php dengan status_delete=success
    header("Location: Message.php?status_delete=success");
} else {
    // Redirect ke Message.php dengan status_delete=error
    header("Location: Message.php?status_delete=error");
}
exit(); // Hentikan skrip agar header berfungsi
?>
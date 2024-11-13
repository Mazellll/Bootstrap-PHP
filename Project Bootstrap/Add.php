<?php

include "connect.php";

$Username = $_POST["Username"];
$Pesan = $_POST["Pesan"];

$query = mysqli_query($connect, "INSERT INTO data (Username, Pesan) VALUES ('$Username', '$Pesan')");
if ($query) {
    // Redirect ke Message.php dengan status_add=success
    header("Location: Message.php?status_add=success");
} else {
    // Redirect ke Message.php dengan status_add=error
    header("Location: Message.php?status_add=error");
}
exit(); // Hentikan skrip agar header berfungsi
?>
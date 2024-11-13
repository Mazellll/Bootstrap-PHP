    <?php
include 'connect.php';

$id = $_POST['id'];
$Username = $_POST['Username'];
$Pesan = $_POST['Pesan'];

$query = mysqli_query ($connect, "UPDATE data SET Username='$Username', Pesan='$Pesan' WHERE id='$id'");
if($query) {
    echo "<div class='alert alert success' style='text-align:center;'><h1>Data Berhasil di Ubah</h1></div>";
    header("Refresh: 1; url=Message.php");
} else {
    echo "<div class='alert alert-danger'><h1>Upload Failed. Try Again</h1></div>";
    header("Refresh: 1; url=Message.php");
}
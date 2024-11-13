<?php
include 'connect.php';

// Ambil ID dari parameter GET
$id = $_GET['id'];

// Ambil data pesan berdasarkan ID
$sql = $connect->query("SELECT * FROM data WHERE id='$id'");
$data = $sql->fetch_assoc();

// Jika data tidak ditemukan
if (!$data) {
    echo "<div class='alert alert-danger' role='alert'>Data tidak ditemukan!</div>";
    exit;
}

// Proses update setelah form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['Username'];
    $Pesan = $_POST['Pesan'];

    $update_query = mysqli_query($connect, "UPDATE data SET Username='$Username', Pesan='$Pesan' WHERE id='$id'");
    if ($update_query) {
        // Redirect dengan status edit success
        header("Location: Edit.php?id=$id&status_edit=success");
        exit();
    } else {
        // Redirect dengan status edit error
        header("Location: Edit.php?id=$id&status_edit=error");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* CSS untuk animasi fade-out */
        .fade-out {
            animation: fadeOut 3s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                display: none;
            }
        }
    </style>
</head>
<body>
  <div class="row g-0">
    <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-secondary" style="height: 100vh;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <i class="bi bi-instagram me-2 fs-2"></i>
        <span class="fs-4">Instagram</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link active bg-light text-dark" aria-current="page">
            <i class="bi bi-houses me-2 fs-5"></i>
             Home
          </a>
        </li> 
        <li>
          <a href="notif.php" class="nav-link text-white">
          <i class="bi bi-bell me-2 fs-5"></i>
            Notification
          </a>
        </li>
        <li>
          <a href="Message.php" class="nav-link text-white">
          <i class="bi bi-chat-square-dots fs-5 me-2"></i>
            Message
          </a>
        </li>
        <li>
          <a href="Explore.php" class="nav-link text-white">
          <i class="bi bi-people fs-5 me-2"></i>
            Explore
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="foto.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>Jell</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Switch Account</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
    
    <div class="col-md-10 text-dark overflow-auto" style="height:100vh;">
      <div class="row g-0 mt-3 ps-5">
          <div class="col-md-8">
            <div class="card shadow">
              <div class="card-header text-center"><h1>Edit Pesan</h1></div>
              <div class="card-body">

                <!-- Pesan sukses atau gagal dari Edit -->
                <?php
                if (isset($_GET['status_edit']) && $_GET['status_edit'] == 'success') {
                    echo '<div class="alert alert-success text-center fade-out" role="alert">Pesan berhasil diedit.</div>';
                    header("Location: Message.php");
                    exit();
                } elseif (isset($_GET['status_edit']) && $_GET['status_edit'] == 'error') {
                    echo '<div class="alert alert-danger text-center fade-out" role="alert">Edit pesan gagal.</div>';
                    header("Location: Message.php");
                    exit();
                }
                ?>

                <!-- Form Edit Pesan -->
                <form action="Edit.php?id=<?php echo $id; ?>" method="POST" class="col-md-11">
                  <div class="mb-3 ms-3">
                    <div class="card shadow">
                      <div class="card-header"><h4>Edit Pesan</h4></div>
                      <div class="card-body">
                          <div class="form-group">
                            <label class="form-label" for="Username">Username</label>
                            <input type="text" name="Username" id="Username" class="form-control" value="<?php echo $data['Username']; ?>" required>
                          </div> 
                          <div class="form-group"> 
                            <label class="form-label" for="Pesan">Pesan</label>
                            <textarea class="form-control" id="Pesan" name="Pesan" required><?php echo $data['Pesan']; ?></textarea>
                          </div>

                          <button type="submit" class="btn btn-success text-white mt-3">Update Pesan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="forms"></div>
          </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
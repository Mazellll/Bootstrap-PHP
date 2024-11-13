<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* CSS untuk menghilangkan pesan otomatis */
        .fade-out {
            animation: fadeOut 2s forwards; /* durasi 3 detik */
            animation-delay: 1s; /* jeda sebelum mulai menghilang */
        }

        /* Keyframes untuk animasi fade-out */
        @keyframes fadeOut {
            0% { opacity: 1; }
            100% { opacity: 0; display: none; }
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
              <div class="card-header text-center"><h1>Message</h1></div>
              <div class="card-body">

                <table class="table table-striped mt-3">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Username</th>
                      <th scope="col">Pesan</th>
                      <th scope="col">Edit/Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                              <?php
                              include 'connect.php';
                              $X=1;
                                $query = mysqli_query($connect, "SELECT * FROM data ");
                                while ($data = mysqli_fetch_array($query)) {
                              ?>
                              <td><?php echo $X++ ?></td>
                                
                                <td><?php echo $data['Username'] ?></td>
                                <td><?php echo $data['Pesan'] ?></td>
                                <td>
                                  <a class="btn btn-sm btn-success" href="Edit.php?id=<?php echo $data['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                  <a class="btn btn-sm btn-danger" href="Delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus pesan?')"><i class="bi bi-trash"></i></a>
                                </td>
                        </tr>
                       </tbody> <?php } ?>
                </table>
              </div>
            </div>
            </div>

          <div class="col-md-4">
            <div class="forms"></div>
              <form action="Add.php" method="POST" class="col-md-11">
                <div class="mb-3 ms-3">
                  <div class="card shadow">
                    <div class="card-header"><h4>Tambahkan Pesan Baru</h4></div>
                      <div class="card-body">
                          <div class="form-group">
                            <label class="form-label" for="">Username</label>
                            <input type="text" name="Username" id="Username"   aria-label="Sizing example input">
                          </div> 
                          <div class="form-group"> 
                            <label class="form-label" for="">Message</label>
                            <textarea class="form-control"  id="Pesan" name="Pesan"></textarea>
                          </div>

                            <button type="submit" class="btn btn-success text-white mt-3">Submit</button>
                            <div class="mt-2">
                            
                            <!-- Pesan sukses atau gagal dari Add -->
                            <?php
                              if (isset($_GET['status_add']) && $_GET['status_add'] == 'success') {
                                  echo '<div class="alert alert-success text-center fade-out" role="alert">Pesan berhasil ditambahkan.</div>';
                              } elseif (isset($_GET['status_add']) && $_GET['status_add'] == 'error') {
                                  echo '<div class="alert alert-danger text-center fade-out" role="alert">Penambahan pesan gagal.</div>';
                              }
                            ?>

                            <!-- Pesan sukses atau gagal dari Delete -->
                            <?php
                              if (isset($_GET['status_delete']) && $_GET['status_delete'] == 'success') {
                                  echo '<div class="alert alert-success text-center fade-out" role="alert">Pesan berhasil dihapus.</div>';
                              } elseif (isset($_GET['status_delete']) && $_GET['status_delete'] == 'error') {
                                  echo '<div class="alert alert-danger text-center fade-out" role="alert">Penghapusan pesan gagal.</div>';
                              }?>
                            </div>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="row g-0">
    <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-secondary" style="height: 100vh;">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <i class="bi bi-instagram me-2 fs-2"></i>
        <span class="fs-4">Instagram</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="index.html" class="nav-link active bg-light text-dark" aria-current="page">
            <i class="bi bi-houses me-2 fs-5"></i>
             Home
          </a>
        </li> 
        <li>
          <a href="notif.html" class="nav-link text-white">
          <i class="bi bi-bell me-2 fs-5"></i>
            Notification
          </a>
        </li>
        <li>
          <a href="Message.html" class="nav-link text-white">
          <i class="bi bi-chat-square-dots fs-5 me-2"></i>
            Message
          </a>
        </li>
        <li>
          <a href="Explore.html" class="nav-link text-white">
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
        <div class="row g-0 mt-3 ps-5 d-flex">
            <div class="card" style="width: 18rem;">
                <img src="explore1.png" class="card-img-top">
            </div>

            <div class="card" style="width: 18rem;">
                <img src="explore2.png" class="card-img-top">
            </div>

            <div class="card" style="width: 18rem;">
                <img src="explore3.png" class="card-img-top" style="width: 356px;">
            </div>

            <div class="card" style="width: 18rem;">
                <img src="explore4.png" class="card-img-top" style="width: 398px;">
            </div>

            <div class="card" style="width: 18rem;">
                <img src="explore5.png" class="card-img-top" style="width: 363px;">
            </div>

            <div class="card" style="width: 18rem;">
                <img src="explore6.png" class="card-img-top" style="width: 389px;">
            </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
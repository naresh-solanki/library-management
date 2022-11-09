<html>
    <head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<link rel="stylesheet" href="./s.scss">

<style>
  .offcanvas-backdrop.show {
    opacity: 0;
}
</style>

    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <div>
      <a class="navbar-brand me-5" href="home.php">Library Management System</a>
    <button class="ms-3 navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon "></span>
    </button>
    </div>
    <button  class="btn" type="button"><a class="navbar-brand" href="logout.php">Log Out</a></button>
    <div class="offcanvas offcanvas-start text-bg-dark" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="stuhome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stuprofile.php">Student Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stuallbook.php">All Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stureq.php">Books For Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stuissue.php">My Issue Books</a>
          </li>
        </ul>
      </div>
</nav>
<br><br><br><br>
</body>
</html>
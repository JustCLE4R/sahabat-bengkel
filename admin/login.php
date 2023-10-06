<?php 
  session_start();

  if(@$_SESSION['username']){
    header("location:index.php");
  }
  
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) || empty($password)){
      //kalau kosong maka login lagi
      echo "<meta http-equiv='refresh' content='0 url=index.php?page=login'>";
    }
    else{
      //pengecekan
      if($username == 'admin' && $password == 'admin'){
        $_SESSION['username'] = $username;
        echo "<meta http-equiv='refresh' content='0 url=index.php'>";
      }
      else{
        //tidak ditemukan usernya
        echo "<meta http-equiv='refresh' content='0 url=login.php'>";
      }
    }
  }
  if(isset($_GET['action']) == "logout"){
    session_destroy();
    echo "<meta http-equiv='refresh' content='0 url=../index.php'>";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sahabat Bengkel - Login</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block" style="background-image: url(./img/bg-login.jpg); background-size: cover;"></div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin Sahabat Bengkel!</h1>
                    </div>
                    <form class="user" method="post" action="">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Username"
                          name="username"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control form-control-user"
                          id="exampleInputPassword"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                      <button name="submit" class="btn btn-success">Masuk</button>
                      <hr />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>

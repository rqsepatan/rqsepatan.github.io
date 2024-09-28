<?php 

require_once("config.php");
require_once("nagog.php");
if(loggedIn()){
    header("Location:index.php");
    exit();
}

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user["password"]) && $user['status'] == 1 || $user['status'] == 2 ){
                  // buat Session
                  session_start();
                  $_SESSION["user"] = $user;
                  if(isset($_POST['remember_me'])){
                    setcookie("user" , $user , time()+60*5);
                }
                  // login sukses, alihkan ke halaman timeline
            header("Location:index.php?success=" . urlencode("Selamat datang!"));;
            exit();
        } else {
            header("Location:login.php?err=" . urlencode("Akunmu sudah terdaftar, silakan hubungi admin untuk mengaktifkan akun"));
       
          }
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MASUK AKUN RQ SEPATAN</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>
        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert alert-danger"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
         
        <h4>Masuk ke RQSEPATAN</h4>
        <p>Belum punya akun? <a href="reg.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
      
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember_me"> Remember Me
    </label>
  </div>
            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

    </div>
</div>
    
</body>
</html>
<?php

require_once("config.php");

if(isset($_POST['register'])){
    
    if(strlen($_POST['name']) < 3){
        header("Location:reg.php?err=" . urlencode("Nama minimal 3 karakter"));
        exit();
    }
   else if($_POST['password'] != $_POST['confirm_password']){
        header("Location:reg.php?err=" . urlencode("Password tidak sama"));
        exit();
   }
    else if(strlen($_POST['password']) < 5){
         header("Location:reg.php?err=" . urlencode("Password minimal 5 karakter"));
        exit();
    }
  
    
    else if(!strlen($_POST['email'])){
        header("Location:reg.php?err=" . urlencode("Email sudah terdaftar"));
        exit();
    }
   
    else {

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $hp = filter_input(INPUT_POST, 'hp', FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $tglgabung = filter_input(INPUT_POST, 'tglgabung', FILTER_SANITIZE_STRING);
    $token = bin2hex(openssl_random_pseudo_bytes(32));
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password, token, gender, hp, tglgabung) 
            VALUES (:name, :username, :email, :password, :token, :gender, :hp, :tglgabung)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email,
        ":token" => $token,
        ":gender" => $gender,
        ":hp" => $hp,
        ":tglgabung" => $tglgabung
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    if($saved) header("Location:login.php?success=" . urlencode("Akun dibuat! silakan menghubungi admin untuk mengaktifkan akun!"));
    exit();
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR AKUN</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>
        <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert alert-danger"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
        <h4>Bergabunglah bersama siswa RQ SEPATAN lainnya...</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>
            <div class="form-group">
                <label for="phone">No. HP (WA)</label>
                <input class="form-control" type="text" name="hp" placeholder="081234567890" required />
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" required>
                    <option value='male'>Laki-laki</option>
                    <option value='female'>Perempuan</option>
        </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <div class="form-group">
    <label >Ulangi Password</label>
    <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password" required>
  </div>
  <input type='hidden' name='tglgabung' value='<?php echo date("d-m-Y"); ?>'>
            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" width='320' height='179' src="img/rq.jpg" />
        </div>

    </div>
</div>

</body>
</html>
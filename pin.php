<?php include("header.php");
?>
 <?php $id = filter_input(INPUT_GET, 'verify', FILTER_SANITIZE_STRING); ?>

	<title>MASUKKAN PIN | RQ SEPATAN</title>
  <link href="css/videw.css" rel="stylesheet">
</head>
<?php include("babatok.php");
?><body>
<?php

    $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
    $pin = filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE token=:token && pin=:pin";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":token" => $token,
        ":pin" => $pin
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if($pin == $user["pin"] && $user['status'] == 1 || $user['status'] == 2 ){
                  // buat Session
                  session_start();
                  $_SESSION["user"] = $user;
                  if(isset($_POST['remember_me'])){
                    setcookie("user" , $user , time()+60*5);
                }
                  // login sukses, alihkan ke halaman timeline
            header("Location:belanjaan.php?success=" . urlencode("pembayaran berhasil!"));
            exit();
        } else {
            header("Location:belanjaan.php?err=" . urlencode("pembayaran gagal"));
          }
    
    }
?>

<div class="container">
            <div id="content" style='background-color:#999;''>
<form action="" method="POST">

         
                <input class="form-control" type="hidden" name="token" value="<?php echo $_GET['verify']; ?>" />
 


            <div class="profile"><h1>PIN</h1>
              
                <input class="tede" type="number" name="pin" placeholder="PIN" /><br/>
                masukkan pin utk mengkonfirmasi.<br/>
      <br/>

  
            <label class="new-button"> Konfirmasi
<input type="submit" class="new-button" name="login" style='display:none;' /></label>   </div>

        </form>  </div>  </div></body>
        <?php include("footer.php");
?>
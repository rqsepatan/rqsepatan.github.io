<?php include("auth.php");
require_once("config.php");
?>
    <?php
$token = $_SESSION['user']['token'];
$id = $_SESSION['user']['id'];
$params = array(
    ":token" => $token
);
if($_GET[$token] == 'izin'){

    // filter data yang diinputkan
   
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
 

    // menyiapkan query
    $sql = "UPDATE users SET izin = izin + 1 WHERE id='$id'";
    $stmt = $db->prepare($sql);

    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    if ($konek->query($sql) === TRUE) {
        header("Location:timeline.php?success=" . urlencode("Maa Syaa Allah, Toyyib .. Yassarallah ..."));
      } else {
        echo "Error updating record: " . $konek->error;
      }
      
      $konek->close();
      
} elseif($_GET[$token] == 'sakit'){

    // filter data yang diinputkan
   
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
 

    // menyiapkan query
    $sql = "UPDATE users SET sakit = sakit + 1 WHERE id='$id'";
    $stmt = $db->prepare($sql);

    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    if ($konek->query($sql) === TRUE) {
        header("Location:timeline.php?success=" . urlencode("Subhanallah ... Laa Ba'sa Thohurun Insya allah ..."));
      } else {
        echo "Error updating record: " . $konek->error;
      }
      
      $konek->close();
      
}

?>
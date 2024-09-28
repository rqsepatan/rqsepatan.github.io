<?php include("nagog.php");
require_once("config.php");
?>

<?php
if(isset($_POST['beli'])){

    // filter data yang diinputkan
    $barang = filter_input(INPUT_POST, 'barang', FILTER_SANITIZE_STRING);
    $harga = filter_input(INPUT_POST, 'harga', FILTER_SANITIZE_STRING);
    $buyer = filter_input(INPUT_POST, 'buyer', FILTER_SANITIZE_STRING);
    $rqbuyer = filter_input(INPUT_POST, 'rqbuyer', FILTER_SANITIZE_STRING);
    $rrqbuyer = filter_input(INPUT_POST, 'rrqbuyer', FILTER_SANITIZE_STRING);
    $waktu = filter_input(INPUT_POST, 'waktu', FILTER_SANITIZE_STRING);
    $link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
    $rqpay = filter_input(INPUT_POST, 'rqpay', FILTER_SANITIZE_STRING);
   $idus = filter_input(INPUT_POST, 'idus', FILTER_SANITIZE_STRING);
 $token = $_SESSION['user']['token'];


    // enkripsi password


    // menyiapkan query

$sql = "UPDATE users SET rqpay='$rqpay' WHERE id='$idus'";
   $stmt = $db->prepare($sql);
  
 
    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    if ($konek->query($sql) === TRUE) {
      header("Location:pin.php?verify=" . urlencode($token));
      } else {
        echo "Error updating record: " . $konek->error;
      }
 
  
    $sql = "INSERT into beli SET barang='$barang', link='$link', harga='$harga', rqbuyer='$rqbuyer', waktu='$waktu', rrqbuyer='$rqpay', status='$status', buyer='$buyer'";
        $stmt = $db->prepare($sql);
  
    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    if ($konek->query($sql) === TRUE) {
           header("Location:pin.php?verify=" . urlencode($token));
      } else {
        echo "Error updating record: " . $konek->error;
      }
            
      
      $konek->close();
      
    
      
}

?>
`
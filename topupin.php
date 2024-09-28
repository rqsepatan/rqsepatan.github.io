<?php include("nagog.php");
require_once("config.php");
?>
<?php 

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); 

$jt = filter_input(INPUT_POST, 'jt', FILTER_SANITIZE_STRING);
$sblj = filter_input(INPUT_POST, 'sblj', FILTER_SANITIZE_STRING); 
$sblju = filter_input(INPUT_POST, 'sblju', FILTER_SANITIZE_STRING); 
$nominal = filter_input(INPUT_POST, 'nominal', FILTER_SANITIZE_STRING);
$uploaded_on = filter_input(INPUT_POST, 'uploaded_on', FILTER_SANITIZE_STRING); 
$oleh = filter_input(INPUT_POST, 'oleh', FILTER_SANITIZE_STRING); 
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING); 
$targetDir = "buktitopup/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

  $folder1 = $username;
  $dirPath = 'buktitopup/'.$folder1;
  $result = mkdir($dirPath);
  
  if ($result !== $username) {
  
  //file move on
  $target_path = $dirPath .'/' . basename( $_FILES['file']['name']);
  $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        // Insert image file name into database
        $insert = $db->query("INSERT into rqpay SET file_name='$fileName', uploaded_on='$uploaded_on', oleh='$oleh', jt='$jt', status='status', nominal='$nominal'");
        $insert = $db->query("UPDATE users SET sblj='$jt', sblju='$nominal', test='$uploaded_on' WHERE username='$username'");
  
        header("Location:rqpay.php?success=" . urlencode("berhasil")); } }
    } elseif ($result == $username) {
  
      //file move on
      $target_path = $dirPath .'/' . basename( $_FILES['file']['name']);
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            // Insert image file name into database
            $insert = $db->query("INSERT into rqpay SET file_name='$fileName', uploaded_on='$uploaded_on', oleh='$oleh', jt='$jt', status='status', nominal='$nominal'");
       
            $insert = $db->query("UPDATE users SET sblj='$jt', sblju='$oleh', test='$uploaded_on' WHERE username='$username'");
         
            header("Location:rqpay.php?success=" . urlencode("permintaan sedang diproses")); 
    } } }
  
    }  ?>
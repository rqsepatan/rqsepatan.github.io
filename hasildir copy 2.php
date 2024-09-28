<?php include("auth.php");
require_once("config.php");
?>
<?php $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); 


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
  
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        // Insert image file name into database
        $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
        $insert = $db->query("UPDATE users SET photo='$fileName' WHERE username='$username'");
    
    } else{
       echo "There was an error uploading the file, please try again!";
    }
  
   } else {
     echo "sudah ada";
   }
   
  }
      ?>
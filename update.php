<?php include("nagog.php");
require_once("config.php");
?>
<?php $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); 
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
$statusMsg = '';

// deklarasi
$targetDir = "ppsiswa/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // ekstensi yg diizinkan
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // push ke server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // query dimulai
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
      $insert = $db->query("UPDATE users SET photo='$fileName' WHERE username='$username'");
            if($insert){
                header("Location:timeline.php?success=" . urlencode("Foto Profil diubah!"));
            }else{
                $statusMsg = "gagal";
            } 
        }else{
            $statusMsg = "Sada kesalahan";
        }
    }else{
        $statusMsg = 'mf hanya menerima ekstensi JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = '';
}

// status
echo $statusMsg;
?>
    <?php


if(isset($_POST['submit'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $kelas = filter_input(INPUT_POST, 'kelas', FILTER_SANITIZE_STRING);
    $hp = filter_input(INPUT_POST, 'hp', FILTER_SANITIZE_STRING);
    $ttl = filter_input(INPUT_POST, 'ttl', FILTER_SANITIZE_STRING);
    $vm = filter_input(INPUT_POST, 'vm', FILTER_SANITIZE_STRING);
    $cc = filter_input(INPUT_POST, 'cc', FILTER_SANITIZE_STRING);
    $dms = filter_input(INPUT_POST, 'dms', FILTER_SANITIZE_STRING);
    $prof = filter_input(INPUT_POST, 'prof', FILTER_SANITIZE_STRING);

    // enkripsi password

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "UPDATE users SET name='$name', alamat='$alamat', hp='$hp', ttl='$ttl', vm='$vm', cc='$cc', prof='$prof', dms='$dms'  WHERE username='$username'";
    $stmt = $db->prepare($sql);

    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    if ($konek->query($sql) === TRUE) {
        header("Location:index.php?success=" . urlencode("Profil diperbarui!"));
      } else {
        echo "Error updating record: " . $konek->error;
      }
      
      $konek->close();
      
}

?>
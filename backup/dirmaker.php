<?php include("header.php");
?>
<?php include("auth.php");
require_once("config.php");
?>
<?php $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); 
?>
    
    
bakekok <?php echo $username; ?>

<form action="update.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type='hidden' name='username' value='<?php echo  $_SESSION["user"]["username"] ?>'>
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>


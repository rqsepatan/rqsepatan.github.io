<?php include("nagog.php");
 include("config.php"); ?>
 <?php
$izin = $_SESSION["user"]["izin"];
$sakit = $_SESSION["user"]["sakit"];
if(!isset($_SESSION["user"])) header("Location: login.php");
?>
<?php include("header.php");
?>
	<title>KILASAN | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

<?php $username = $_SESSION['user']['username']; ?>
<?php $token = $_SESSION['user']['token']; ?>
 <?php
      $sql = "SELECT id, name, lemb, email, alamat, ttl, kelas, mushaf, ksms, emh, esh, spp, hfz, note, bio, photo, jh FROM users WHERE username='$username'";
      $bakekok = $konek->query($sql);
      if ($bakekok->num_rows > 0) {
      while($r = $bakekok->fetch_assoc()) {
      $id = $r['id'];
      $nama = $r['name'];
      $kelas = $r['kelas'];
      $ksms = $r['ksms'];
      $email = $r['email'];
      $alamat = $r['alamat'];
      $emh = $r['emh'];
      $esh = $r['esh'];
      $hfz = $r['hfz'];
      $note = $r['note'];
      $spp = $r['spp'];
      $ttl = $r['ttl'];
      $bio = $r['bio'];
      $lemb = $r['lemb'];
      $mushaf = $r['mushaf'];
      $photo = $r['photo'];
      $jh = $r['jh']; }
$konek->close(); ?>

<?php } ?>
<body>
<div class="container">
            <div id="content">

            
<?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
  <div class='profile'>
  <span class='kelas'> <?php echo $kelas; ?> </span>
    
  <center><div class='pp'><img style='width:100%;height:100%;' src="ppsiswa/<?php echo $photo; ?>" class="hoverZoomLink">
</div></center>
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                    <p><a href="edit.php"><button class='rq-hadir'>Edit Profile</button></a></p>
                    <p><a href="logout.php"><button class='rq-lost'>Keluar</button></a></p>
</div><div class="float-container">

<div class="float-child">
  <div class="green"> Hallo <?php echo  $_SESSION["user"]["name"] ?>! semoga sehat selalu ya ...</div>
</div>
<div class="float-child">
  <div class="blue">Apa kabar nya hari ini?
    <p style='display:inline;'><a href='absensi.php?<?php echo $token ?>=izin'><button class="third">Izin ke <?php echo $izin + 1; ?>x</button></a> <a href='absensi.php?<?php echo $token ?>=sakit'><button class='rq-sakit'>Sakit ke <?php echo $sakit + 1; ?>x</button></a></p>
   
  </div>
</div>

</div></div></div>






            </div>
            </div>
</body>
<script src='js/alert.js'></script>
<?php include("footer.php");
?>
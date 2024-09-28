
<?php
 include("header.php");
 $cari = $_GET['cari'];
?>
	<title>CARI "<?php echo $cari; ?>" | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

 <body>
 <div class="container">
            <div id="content">
      
            <div style='display:inline-block;'>

         
<?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
  <?php
  include "config.php";
  $no = 1;
  if(isset($_GET['cari']))

  $data = mysqli_query($konek,"select * from users where name like '%".$cari."%' ORDER BY name;");
  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $username = $r['username'];
   $nama = $r['name'];
   $kelas = $r['kelas'];
   $ksms = $r['ksms'];
   $emh = $r['emh'];
   $esh = $r['esh'];
   $hfz = $r['hfz'];
   $note = $r['note'];
   $spp = $r['spp'];
   $ttl = $r['ttl'];
   $mushaf = $r['mushaf'];
   $lemb = $r['lemb'];
   $status = $r['status'];
   $photo = $r['photo'];
    ?>
 
 <div class="boxu">
 <a href='profile.php?username=<?php echo $username; ?>'>



<div>
<img style='border-radius25px;' width="160" style='width:100%;' alt='<?php echo $judul;?>' src='ppsiswa/<?php echo $photo;?>' title='<?php echo $judul;?>'/>
  </div>
  <h1>
<?php echo $nama;?>   <?php 
 if($status == 2) { echo "<img src='icons/thick.png' width='25' height='25' /></a>"; }   ?>
</h1>

  </a>





</div>

  <?php } ?>
  </div></div></div>
</body>

<?php include("footer.php");
?>
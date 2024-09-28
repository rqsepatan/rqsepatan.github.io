

<?php include("header.php");
?>
<?php if($_SESSION["user"]["status"] == 2 || $_SESSION["user"]["status"] == 1){
} else  { header("Location:index.php?err=" . urlencode("mau ngapain loh tolol?"));  }

?>
	<title>Riwayat Pesanan | RQ SEPATAN </title>
</head>

<?php include("babatok.php");
$username = $_SESSION["user"]["username"]; 
?>
<body>


<div class="container">
            <div id="content">
     
            <center>Belanjaan Saya</center>



<?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?> 
         <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from beli WHERE buyer='$username' ORDER BY id DESC;");

  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $barang = $r['barang'];
   $link = $r['link'];
   $waktu = $r['waktu'];
   $buyer = $r['buyer'];
   $ket = $r['ket'];
    $harga = $r['harga'];
    $status = $r['status'];
    $ket = $r['ket'];
    ?>
       
       <div style='background-color:#ddd;padding: 3px;border-radius:10px;border-bottom: 2px solid #111;text-align:center;'>No. pesanan: #<?php echo  $id; ?><br/>
 Anda Memesan: <a href='<?php echo  $link; ?>'><?php echo  $barang; ?></a><br/>
    pada <?php echo  $waktu; ?><br/>
    status pesanan: <?php echo  $status; ?><br/>
	<small><?php echo  $ket; ?></small></div>
    <?php } ?>    </div></div>
  </body>
<?php include("footer.php");
?>

<?php include("header.php");
?>

 <?php $id = filter_input(INPUT_GET, 'prod_id', FILTER_SANITIZE_STRING); ?>

 <?php
      $sql = "SELECT * FROM shop WHERE id='$id'";
      $bakekok = $konek->query($sql);
      if ($bakekok->num_rows > 0) {
      while($r = $bakekok->fetch_assoc()) {
      
$id	=  $r['id'];  
$nama	=  $r['nama'];
$kat	=  $r['kat'];
$harga =  $r['harga'];
$jumlah	= $r['jumlah'];
$stok	= $r['stok'];
$grs	= $r['grs'];
$berat =	$r['berat'];
$panjang =	$r['panjang'];
$lebar	= $r['lebar'];
$rqpay	= $r['rqpay'];
$desk	= $r['desk'];
$photo = $r['photo'];
$video	= $r['video'];
$tgltrx	= $r['tgltrx'];
$pay	= $r['pay'];
$riwayat	= $r['riwayat'];
$tf	= $r['tf'];
$spb	= $r['spb'];
$spt = $r['spt'];
      // spb status pembayaran barang
      // spt status pembayaran transfer
      // grs kondisi barang
      }
} else {
  echo "hah kosong";
}
$konek->close(); ?>
	<title><?php echo $nama; ?> | RQ SEPATAN</title>
      

<body>

<?php include("babatok.php");
?>
        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
 <form action="checkout.php?barang=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
          <section class="component">

       
<table class="table-users">

	<thead>




<center>


<div class="w3-content w3-display-container" style="max-width:250px">
<img src="shop/photo/<?php echo $photo; ?>" style="width:100%">
<h2 class="w3-center"><span class='kelas'>Rp. <?php echo $harga; ?></span></h2>
</div></center>
<tr>
<th>Nama Barang</th></tr>
  
	</thead>
<tbody>
<tr>
			<td><h3><?php echo $nama; ?></h3></td></tr>
                  <tr>
             
      <td><small><?php echo $desk; ?></small></td></tr>
</table> <center> <label class="new-button"> Beli <input type='submit' name='barang' style='display:none;'></input></label></center>
</tbody>
</section></form>

 
</body>
</html>
<?php include("footer.php");
?>


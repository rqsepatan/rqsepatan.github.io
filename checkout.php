
<?php include("header.php");
?>
 <?php $id = filter_input(INPUT_GET, 'barang', FILTER_SANITIZE_STRING); ?>



 <?php
      $sql = "SELECT * FROM shop WHERE id='$id'";
      $bakekok = $konek->query($sql);
      if ($bakekok->num_rows > 0) {
      while($r = $bakekok->fetch_assoc()) {
      
 
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
      



<?php include("babatok.php");
?>
<body>
<?php if($_SESSION["user"]["rqpay"] > $harga){
} else {
    header("Location:rqpay.php?err=" . urlencode("maaf, saldo RQPay tidak mencukupi .. silakan isi ulang dulu ya"));
exit();
} ?>

<div class="container">
            <div id="content">
            
       
 <div class="profile">
 <h1>Konfirmasi Pembelian</h1>

          <section class="component">
      
          <form action="checkout2.php?beli=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<table class="table-users">
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr>
			<td>Nama Barang</td><td>:</td>
			<td><?php echo $nama; ?>
      <input type='hidden' name='barang' value='<?php echo $nama; ?>'></td></tr>
      <td>Harga</td><td>:</td>
			<td>  <?php echo $harga; ?>
      <input type='hidden' name='harga' value='<?php echo $harga; ?>'></td></tr>
      <td>Saldo RQPay</td><td>:</td>
			<td> Rp. <?php echo $_SESSION["user"]["rqpay"]; ?><font color='red'><small>-Rp.<?php echo $harga; ?></small></font> 
</tr>   <td>Sisa Saldo</td><td>:</td>
			<td> Rp. <?php echo $_SESSION["user"]["rqpay"]-$harga; ?>
      <input type='hidden' name='rqpay' value='<?php echo $_SESSION["user"]["rqpay"]-$harga; ?>'>
      <input type='hidden' name='waktu' value='<?php echo date("d-m-Y H:i"); ?>'> 
      <input type='hidden' name='buyer' value='<?php echo $_SESSION["user"]["username"]; ?>'> 
      <input type='hidden' name='link' value='prodak.php?prod_id=<?php echo $id; ?>'> 
      <input type='hidden' name='rqbuyer' value='<?php echo $_SESSION["user"]["rqpay"]; ?>'> 
      <input type='hidden' name='idus' value='<?php echo $_SESSION["user"]["id"]; ?>'> 
      <input type='hidden' name='status' value='dibayar'> 

</tbody>

</table>
<label class="new-button"> Konfirmasi
<input type="submit" class="new-button" name="beli" style='display:none;' /></label>
      </form> 
      
      

</section>
</div>    

            </div>
            </div></body>
            <?php include("footer.php");
?>

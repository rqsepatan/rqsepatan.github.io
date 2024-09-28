
<?php include("header.php");
?>
	<title>BELANJA | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

<body><body>
<div class="container">
            <div id="content">
<div style='display:flex;max-width:300px;'>
<?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from shop");
  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $nama = $r['nama'];
   $kat= $r['kat'];
   $harga = $r['harga'];
   $jumlah = $r['jumlah']; 
   $stok = $r['stok']; 
   $desk = $r['desk']; 
   $photo = $r['photo']; 
   $jumlah = $r['jumlah']; 
   $tgltrx = $r['tgltrx']; 
   $tf = $r['tf']; 
   $riwayat = $r['riwayat']; 


   ?>
   
<div class='framedblj'>

<span style='top:25px;'>
<span class='labelblj' > <a href='search/label/<?php echo $kat; ?>i?&max-results=8' rel='tag'><?php echo $kat; ?></a></span> 
<a href='prodak.php?prod_id=<?php echo $id; ?>'>
<img style='border-radius:5px;' width="160" height='200'alt='<?php echo $nama;?>' src='shop/photo/<?php echo $photo;?>' title='<?php echo $nama;?>'/></a><br>Harga : 
RP.<?php echo $harga; ?><br><b>
<a href='prodak.php?prod_id=<?php echo $id; ?>'><?php echo $nama;?></a>
  </b>
</div>
<?php } ?> 
  </div>
  </div> </div> </body>
  <?php include("footer.php");
?>
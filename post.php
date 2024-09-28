<?php include("header.php");
?>
 <?php $id = filter_input(INPUT_GET, 'post_id', FILTER_SANITIZE_STRING); ?>
 <?php
      $sql = "SELECT * FROM post WHERE id='$id'";
      $bakekok = $konek->query($sql);
      if ($bakekok->num_rows > 0) {
      while($r = $bakekok->fetch_assoc()) {
      
        $judul = $r['judul'];
        $waktu = $r['waktu'];
        $isi = $r['isi'];
        $kategori = $r['kategori'];
        $thumb = $r['thumb']; }
} else {
  echo "hah kosong";
}
$konek->close(); ?>
	<title><?php echo $judul; ?> | RQ SEPATAN</title>
  <link href="css/videw.css" rel="stylesheet">
</head>
<?php include("babatok.php");
?>

<html><body>
<div class="container">
            <div id="content">


 <h1><?php echo $judul; ?></h1>
   <div class='desc'>diposting pada: <?php echo $waktu; ?><br/>
  kategori: <?php echo $kategori; ?></div>
 <div class='isi'>  <?php echo $isi; ?></div>
</div></div>
</body>
</html>
<?php include("footer.php");
?>
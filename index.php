
<?php include("header.php");
?>
	<title>RQ SEPATAN </title>
</head>
<?php include("babatok.php");

?>
<body>


<div class="containeruj">
            <div id="content">
            <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
            <div style='display:inline-block;'>
 
  <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from post ORDER BY id DESC;");
  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $judul = $r['judul'];
   $waktu = $r['waktu'];
   $isi = $r['isi'];
   $kategori = $r['kategori']; 
   $thumb = $r['thumb']; 
   ?>
     <?php $linknya = 'post.php?post_id='.$id.''; ?>
   <div class="box">


<h1>
<a href='<?php echo $linknya; ?>'><?php echo $judul;?> </a>
</h1>
<span style='top:25px;'>
<span class='label' > <a href='filter.php/label/<?php echo $kategori; ?>i?&max-results=8' rel='tag'><?php echo $kategori; ?></a></span><time datetime='<?php echo $waktu; ?>' title='<?php echo $waktu; ?>'>
<?php echo $waktu; ?>
</time>
  </span>

<div>
<a href='post.php?post_id=<?php echo $id; ?>'>
<img style='border-radius:5px;' width="160" style='width:100%;' alt='<?php echo $judul;?>' src='post/<?php echo $thumb;?>' title='<?php echo $judul;?>'/></a>
  </div>

<div class='isi' style='color:#000;white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;width:185px;height:100px;'><?php echo $isi; ?>
</div> 




</div> 



<?php } ?> 

  </div></div></div>
  </body>
<?php include("footer.php");
?>
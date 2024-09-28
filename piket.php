<?php include("header.php");
?>
	<title>JADWAL PIKET | RQ SEPATAN</title>
  <link href="css/pikets.css" rel="stylesheet">
</head>
<?php include("babatok.php");
?>

<?php $bagian = filter_input(INPUT_GET, 'bagian', FILTER_SANITIZE_STRING); ?>

<center><h1>Jadwal Piket <?php if($bagian == 'albayyinah') { echo 'TPA AL-BAYINAH <a href="piket.php"><button>PILIH</button></a>';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'RTQ TAMARIN <a href="piket.php"><button>PILIH</button></a>';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'TPA AL-HIJRAH <a href="piket.php"><button>PILIH</button></a>';
    } else { echo '<a href="piket.php?bagian=albayyinah"><button>TPA AL BAYYINAH</button></a> <a href="piket.php?bagian=rtqtamarin"><button>RTQ TAMARIN</button></a> <a href="piket.php?bagian=alhijrah"><button>TPA AL HIJRAH</button></a>';
}  ?></h1></center>
<div id="price">

  <!--price tab-->
  <div class="plan">
    <div class="plan-inner">
    <div class="hot">:)</div>
      <div class="entry-title">
        <h3>SENIN</h3>
        <div class="price">
   <img width='100px' height='100px' src="img/<?php if($bagian == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>">
        </div>
      </div>
      <div class="entry-content">
        <ul>
        <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users WHERE lemb='$bagian' AND piket='senin'");
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
   $piket = $r['piket'];
    ?>
          <li><?php echo $nama; ?></li>
 
          <?php } ?>
        </ul>
      </div>
      <div class="btn">

      </div>
    </div>
  </div>

 
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan basic">
    <div class="plan-inner">
    
      <div class="entry-title">
        <h3>SELASA</h3>
        <div class="price"><img width='100px' height='100px' src="img/<?php if($bagian == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>">
        </div>
      </div>
      <div class="entry-content">
        <ul>
        <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users WHERE lemb='$bagian' AND piket='selasa'");
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
   $piket = $r['piket'];
    ?>
          <li><?php echo $nama; ?></li>
 
          <?php } ?>
        </ul>
      </div>
      <div class="btn">
 
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan standard">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>RABU</h3>
        <div class="price"><img width='100px' height='100px' src="img/<?php if($bagian == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>">
        </div>
      </div>
      <div class="entry-content">
        <ul>
        <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users WHERE lemb='$bagian' AND piket='rabu'");
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
   $piket = $r['piket'];
    ?>
          <li><?php echo $nama; ?></li>
 
          <?php } ?>
        </ul>
      </div>
      <div class="btn">
 
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan kamis">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>KAMIS</h3>
        <div class="price"><img width='100px' height='100px' src="img/<?php if($bagian == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>">
        </div>
      </div>
      <div class="entry-content">
        <ul>
        <?php 
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users WHERE lemb='$bagian' AND piket='kamis'");
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
   $piket = $r['piket'];
    ?>
          <li><?php echo $nama; ?></li>
 
          <?php } ?>
        </ul>
      </div>
      <div class="btn">
 
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan ultimite">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>JUM'AT</h3>
        <div class="price"><img width='100px' height='100px' src="img/<?php if($bagian == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>">
        </div>
      </div>
      <div class="entry-content">
        <ul>
        <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users WHERE lemb='$bagian' AND piket='jumat'");
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
   $piket = $r['piket'];
    ?>
          <li><?php echo $nama; ?></li>
 
          <?php } ?>
        </ul>
      </div>
      <div class="btn">

      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <div class="plan sabtu">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>SABTU</h3>
        <div class="price"><img width='100px' height='100px' src="img/<?php if($bagian == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($bagian == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($bagian == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($bagian == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>">
        </div>
      </div>
      <div class="entry-content">
        <ul>
        <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users WHERE lemb='$bagian' AND piket='sabtu'");
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
   $piket = $r['piket'];
    ?>
          <li><?php echo $nama; ?></li>
 
          <?php } ?>
        </ul>
      </div>
      <div class="btn">

      </div>
    </div>
  </div>
</div>
<?php include("footer.php");
?>

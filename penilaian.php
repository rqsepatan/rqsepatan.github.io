<?php 

require_once("config.php");
require_once("nagog.php");
if($_SESSION["user"]["status"] == 2){
} else {
    header("Location:siswa.php?err=" . urlencode("maaf ya ananda .. fitur tersebut hanya untuk ustadz dan ustadzah"));
exit();
}
    ?>


<?php include("header.php");
?>
	<title>PENILAIAN | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
<?php $id = filter_input(INPUT_GET, 'nilai', FILTER_SANITIZE_STRING); ?>
 <?php
      $sql = "SELECT * FROM users WHERE id='$id'";
      $bakekok = $konek->query($sql);
      if ($bakekok->num_rows > 0) {
      while($r = $bakekok->fetch_assoc()) {
        $photo = $r['photo'];
        $emh = $r['emh'];
        $name = $r['name'];
        $kelas = $r['kelas'];
      $ksms = $r['ksms'];
      $emh = $r['emh'];
      $esh = $r['esh'];
      $hfz = $r['hfz'];
      $note = $r['note'];
      $spp = $r['spp'];
      $lemb = $r['lemb'];
      $mushaf = $r['mushaf'];
      $pemb = $r['pemb'];
      $hnote = $r['hnote'];
      $timmut = $r['timmut'];
      $piket = $r['piket'];
      $status = $r['status']; }
      $konek->close();
 ?>
<body>
<div class="containeruj">
            <div id="content">

       
 <div class="profile">


  <span class='kelas'> <?php echo $kelas; ?> </span>
    
  <center><div class='pp'><img style='width:100%;height:100%;' src="ppsiswa/<?php echo $photo; ?>" class="hoverZoomLink">
</div></center>
    <h1>
    <?php echo $name; ?>
          </h1>
          <section class="component">

          <form action="hasil.php?nilai=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<table class="table-users">
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr><td>Status Akun</td><td>:</td><td>

<?php if($status == 1) { echo "<font color='green'>Aktif</font>"; } elseif ($status == 2){ echo "<font color='green'>Aktif</font>"; } else {echo "<font color='red'>Tidak Aktif</font>";} ?> <select id="tede" name="status">
    <option value="<?php echo $status; ?>">- TINDAKAN -</option>
    <option value="1">AKTIFKAN AKUN</option>
    <option value="0">NONAKTIFKAN AKUN</option>

  </select>
			</td></tr><td>Pembina</td><td>:</td>
			<td><input id="tede" type="text" name="pemb" value="Ustadz <?php echo $_SESSION['user']['name'] ?>" /></td></tr>
      <td>Lembaga</td><td>:</td>
			<td>  <select id="tede" name="lemb">
      <option value="<?php echo $lemb; ?>">- PILIH LEMBAGA -</option>
    <option value="albayyinah">TPA AL-BAYYINAH</option>
    <option value="rtqtamarin">RTQ RAUDHATUL QUR'AN (TAMARIN)</option>
    <option value="alhijrah">TPA AL-HIJRAH</option>
    <option value="rqsepatan">RQ SEPATAMN (PRIVATE)</option>
  </select></td></tr>
      <td>Kelas</td><td>:</td>
			<td>  <select id="tede" name="kelas">
      <option value="PRA TILAWAH">PRA TILAWAH</option>
    <option value="TILAWAH">TILAWAH</option>
    <option value="TAHFIZ">TAHFIZ</option>
  </select></td></tr>
  <td>Piket</td><td>:</td>
			<td><input id="tede" type="text" name="piket" value="<?php echo $piket; ?>" placeholder='contoh: senin' /></td></tr>
  
      <td>Hafalan</td><td>:</td>
			<td><input id="tede" type="text" name="hfz" value="<?php echo $hfz; ?>" placeholder='contoh: 2 juz' /></td></tr>
      <td>kesempurnaan Makharijul dan Sifatul Huruf</td><td>:</td>
			<td><input id="tede" type="text" name="ksms" value="<?php echo $ksms; ?>" placeholder='contoh: 89%' /></td></tr>
      <td>Evaluasi Makharijul Huruf</td><td>:</td>
			<td><input id="tede" type="text" name="emh" value="<?php echo $emh; ?>" placeholder='contoh: kha, ghain' /></td></tr>
      <td>Evaluasi Sifatul Huruf</td><td>:</td>
			<td><input id="tede" type="text" name="esh" value="<?php echo $esh; ?>" placeholder='contoh: iqlab, shafir, tarkik' /></td></tr>
      <td>Riwayat catatan</td><td>:</td>` 
			<td><?php echo $hnote; ?><input id="tede" type="hidden" name="hnote" value="<?php echo $hnote; ?>"></td></tr>
      <td>Catatan dari pengajar</td><td>:</td>
			<td><input id="tede" type="text" name="note" value="<?php echo $note; ?>"></td></tr>
    
</tbody>

</table>

<label class="new-button"> Perbarui
<input type="submit" class="new-button" name="barui" style='display:none;' /></label>
      </form> 
      
      
      
      <a href="nilairaport.php?kalkulasi=<?php echo $id; ?>">
    <button>Nilai Raport </button>
      </a>
           
      <a href="set.php?uji=<?php echo $id; ?>">
    <button>Ujian Tahfiz</button>
      </a>
    </div>    <?php } ?>

       
</section>    

            </div>
            </div></body>
            <?php include("footer.php");
?>
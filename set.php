
<?php include("header.php");
?>

<title>PENILAIAN | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

<?php 


if(isset($_SESSION["user"]["status"]) == 2) {
  
} else {
    header("Location:ujian.php?err=" . urlencode("maaf ya ananda .. fitur ini hanya untuk ustadz dan ustadzah"));
exit();
} 
    ?>
    

        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
<?php $id = filter_input(INPUT_GET, 'uji', FILTER_SANITIZE_STRING); ?>
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
      $ujian = $r['ujian'];
      $lemb = $r['lemb'];
      $mushaf = $r['mushaf'];
      $pemb = $r['pemb'];
      $timmut = $r['timmut'];
      $nexam = $r['nexam'];
      $tgldone = $r['tgldone'];
      $tlstr = $r['tlstr'];
      $timmuj = $r['timmuj'];
  

    
    }
      $konek->close();
 ?>
<body>
  
<div class="container">
            <div id="content">
 <div class="profile">


  <span class='kelas'> <?php echo $kelas; ?> </span>
    
    <center><img src="ppsiswa/<?php echo $photo; ?>" class="pp">
    </center>
    <br>
    <table class="table-users">
    <h1>
  PENGUJIAN
          </h1>
          <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
          <section class="component">


<form action="tes.php?uji=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

<col><col><col>
	<thead>


  


	</thead>
<tbody>
<tr>
            <td>Nama Santri</td><td>:</td>
			<td><?php echo $name; ?></td></tr>
            <tr>  <td>Hafalan</td><td>:</td>
			<td><input type='text' value='<?php echo $hfz; ?>' readonly></td></tr>
            
    <tr> <td>Setoran (Juz)</td><td>:</td>
			<td>  <select id="tede" name="ujian">
      <option value="Juz 30">Juz 30</option>
            <option value="juz 30-29">juz 30-29</option>
            <option value="JUz 30,29,28">JUz 30,29,28</option>

  </select></td></tr>
  <tr><td>Kapan Mulai Ujian?</td><td>:</td>
			<td><input id="tede" type="text" name="timmuj" value="<?php echo date("Y-m-d"); ?> 16:25" /></td></tr>
      <input type='hidden' name='tlstr' value='<?php echo date("d-m-Y"); ?>'>
</table>
<center>   <label class="new-button"> Uji Sekarang
<input type="submit" class="new-button" name="uji" style='display:none;' /></label></center>
      </form> <br/><a href="nexam.php?nilai=<?php echo $id; ?>"><button>Nilai Ujian</button></a>
    </div>    <?php } ?>
          </div></div>
  </body>
      <?php include("footer.php"); ?>
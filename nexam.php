
    
<?php include("header.php");
?>
	<title>PENILAIAN HASIL UJIAN | RQ SEPATAN</title>
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
<link rel="stylesheet" href="css/timerujian.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.mb-comingsoon.js"></script>
<script src="js/timmutqin.js"></script>
<link rel="stylesheet" href="css/timmutq.css">

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
      $ujian = $r['ujian'];
      $lemb = $r['lemb'];
      $mushaf = $r['mushaf'];
      $pemb = $r['pemb'];
      $timmut = $r['timmut'];
      $nexam = $r['nexam'];
      $tgldone = $r['tgldone'];
      $tlstr = $r['tlstr'];
      $timmuj = $r['timmuj'];
      $riwayat = $r['riwayat'];
    
    }
      $konek->close();
 ?>
<body>

          
        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         <div class="component">
 <div class="profile">

  <span class='kelas'> <?php echo $kelas; ?> </span>
    
    <center><img src="ppsiswa/<?php echo $photo; ?>" class="pp">
    </center>
    <br>

    <h1>
    Status Ujian saat ini : 
          </h1>
     



          <table class="table-users">

	<thead>


  


	</thead>
<tbody>
<tr>
            <td>Nama Santri</td><td>:</td>
			<td><?php echo $name; ?></td></tr>
            <tr>  <td>Hafalan</td><td>:</td>
			<td><?php echo $hfz; ?></td></tr>
            
    <tr> <td>Setoran (Juz)</td><td>:</td>
			<td> <?php echo $ujian; ?></td></tr>
  <tr><td>Menuju Ujian</td><td>:</td><?php if($timmuj == 'selesai') { echo "<td class='selesai'>Selesai</td>";
    } elseif ($timmuj == NULL) {
      echo '<td class="uji">Belum Ujian</td>';
    } else { echo "<td id='cd-".$id."'></td>";
    }
 ?>
 
<input type="hidden" id="timer_<?php echo $id; ?>" value="<?php echo $timmuj; ?>">

<script type="text/javascript">
    $(function () {


        var timer_<?php echo $id; ?> = document.getElementById("timer_<?php echo $id; ?>").value;
        var date = new Date(timer_<?php echo $id; ?>);

     
		$('#cd-<?php echo $id; ?>').mbComingsoon({
			expiryDate: date,
			interval: 1000,
			speed: 500,
			localization: {
				days:"Hari",
				hours:"Jam",
				minutes:" Mnt",
				seconds:"Dtk"
			},
			callBack: function () {
                document.getElementById("cd-<?php echo $id; ?>").innerHTML = "<div class='proses'>Sedang Ujian</div>";
			}
		});

    });
</script>
</tr>
</tbody></table>
<?php } ?>
<h1>
  PENILAIAN
          </h1>
          <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
      


<form action="niluj.php?nilai=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<table class="table-users">

	<thead>


  


	</thead>
<tbody>
<tr>
            <td>Nama Santri</td><td>:</td>
			<td><?php echo $name; ?></td></tr>
            <tr>  <td>Nilai</td><td>:</td>
			<td><select id="tede" name="nexam">
            <option value="Mumtaz">ممتاز</option>
            <option value="Jayyid jiddan">جيد جدا</option>
            <option value="Jayyid">جيد</option>
            <option value="Maqbul">مقبول</option>
            <option value="Dhaif">ضعيف</option>
            <option value="Dhaif jiddan">ضعيف جدا</option>
            <option value="Remedial">Remedial</option>
 </select></td></tr>
            
    <tr> <td>Setoran (Juz)</td><td>:</td>
			<td><?php echo $ujian; ?> Juz</td></tr>

  <input type="hidden" name="timmut" value="<?php echo date("Y-m-d"); ?>" />
<input type='hidden' name='tgldone' value='<?php echo date("d-m-Y"); ?>'>
<input type='hidden' name='tlstr' value='<?php echo $tlstr; ?>'>

<input type='hidden' name='riwayat' value='<?php echo $riwayat; ?>'>
          </tbody></table>
          <center>  <label class="new-button"> Nilai
<input type="submit" class="new-button" name="nilai" style='display:none;' /></label></center>
      </form>
      <h1>
 Panduan penilaian : 
          </h1>
          <table class="table-users">


	<thead>


  

  <tr>
			<th>Latin</th>
			<th>Arab</th>
      <th>Arti</th>
			<th>Nilai</th>
            <th>Inggris</th>
            <th>Skala</th>
            <th>hrf</th>
		</tr>

	</thead>
<tbody>
<tr>
            <td>Mumtaz</td><td>ممتاز</td>
			<td>Istimewa</td><td>100</td><td>Excellent</td>
			<td>90-100</td><td>A+</td></tr>
            
      <tr>
            <td>Jayyid jiddan</td><td>جيد جدا	</td><td>Sangat bagus</td><td>	85	</td><td>Very good	</td><td> 80-89,99</td><td>	A</td>
            </tr>
        <tr>    <td>Jayyid</td><td>	جيد	</td><td>Bagus</td><td>	75	</td><td>Good	 </td><td>65-79,99</td><td>	B+</td>
            </tr>

            <tr>  <td>Maqbul</td><td>	مقبول	</td><td>Diterima/lulus</td><td>	60	</td><td>Pass	</td><td> 50-64,99</td><td>	B</td>
            </tr>   <tr> <td>Dhaif	</td><td>ضعيف	</td><td>Lemah</td><td>40</td><td>	Weak	</td><td> 35-49,99</td><td>	C+</td></tr>   <tr>
<td>Dhaif jiddan	</td><td>ضعيف جدا	</td><td>Sangat lemah</td><td>	30	</td><td>Very weak</td><td>	 0-34,99</td><td>	C</td>
</tr>
           </tbody></table>
           <div class="alert-box warning" style="color:#f00;"><h3>Remedial - Artinya siswa tidak melaksanakan ujian hingga batas waktu yang ditentukan</h3></div>
    </div>    
          </div>
          
  </body>
  <?php include("footer.php");
?>

<?php include("header.php");
?>
</head>
<?php include("babatok.php");
?>

<html><body>
<div class="containeruj">
            <div id="content"> <div class="component">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/timmutqin.js"></script>
<link rel="stylesheet" href="css/timmutqinpig.css">
<script src="js/jquery.mb-comingsoon.js"></script>

 <?php $username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING); ?>
 <?php
      $sql = "SELECT * FROM users WHERE username='$username'";
      $bakekok = $konek->query($sql);
      if ($bakekok->num_rows > 0) {
      while($r = $bakekok->fetch_assoc()) {
      $id = $r['id'];
          $username = $r['username'];
      $nama = $r['name'];
      $kelas = $r['kelas'];
      $ksms = $r['ksms'];
      $email = $r['email'];
      $alamat = $r['alamat'];
      $emh = $r['emh'];
      $esh = $r['esh'];
      $hfz = $r['hfz'];
      $note = $r['note'];
      $spp = $r['spp'];
      $ttl = $r['ttl'];
      $bio = $r['bio'];
      $lemb = $r['lemb'];
      $mushaf = $r['mushaf'];
      $photo = $r['photo'];
      $stmutt = $r['stmutt'];
      $timmut = $r['timmut'];
      $riwayat = $r['riwayat'];
      $status = $r['status'];
      $vm = $r['vm'];
      $cc = $r['cc'];
      $prof = $r['prof'];
      $dms = $r['dms'];
      $hnote = $r['hnote'];
      $pemb = $r['pemb'];
    
    }
$konek->close(); ?>

<title><?php echo $nama; ?></title>

 <div class="profile">


  <span class='kelas'> <?php echo $kelas; ?> </span>
    
  <center><div class='pp'><img style='width:100%;height:100%;' src="ppsiswa/<?php echo $photo; ?>" class="hoverZoomLink">
</div>

  @<?php echo $username; ?>  </center>
   


<?php
	$countdown = $timmut;
?>





<input type="hidden" id="timer_mutqin" value="<?php echo $countdown; ?>">


<table class="table-users">
<th> 
  <?php 
 if($status == 2) { echo "<img src='icons/thick.png' width='25' height='25' /></a>"; } }  ?>
          
  </th> <th></th><th> <?php if(isset($_SESSION["user"])) if ($_SESSION["user"]["id"] == $id) { echo '<a href="edit.php">(Edit)</a>';
   
  } ?></th>
 
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr>	<td>Nama Lengkap</td><td>:</td>
			<td><?php echo $nama; ?></td></tr>
			<td>Mutqin</td><td>:</td>
			<?php if($timmut == 'selesai') { echo "<td class='selesai'>Selesai</td>";
    } elseif ($timmut == NULL) {
      echo '<td class="uji">Belum Ujian</td>';
    } else { echo '<td>  <span id="basi"></span><div data-date="'.$countdown.'" id="count-down"></div></td>'; } ?></tr>
		
      <td>Status Siswa</td><td>:</td>
			<td><?php if($status == 1) { echo "<font color='green'>Aktif</font>"; } elseif ($status == 2){ echo "<font color='green'>Aktif</font>"; } else {echo "<font color='red'>Tidak Aktif</font>";} ?></td></tr>
      <td>Metode</td><td>:</td>
			<td><?php echo $mushaf; ?></td></tr>
      <td>Tanggal Lahir</td><td>:</td>
			<td><?php echo $ttl; ?></td></tr>
      <td>Hafalan</td><td>:</td>
			<td><?php echo $hfz; ?></td></tr>
      <td>Catatan</td><td>:</td>
			<td><ol><?php echo $note; ?> ~ <?php echo $pemb; ?></ol></td></tr>
      <td>Kefasihan Mkharijul dan Sifatul Huruf</td><td>:</td>
			<td><?php echo $ksms; ?></td></tr>
      <td>Visi Misi</td><td>:</td>
			<td><?php echo $vm; ?></td></tr>
      <td>Cita-cita</td><td>:</td>
			<td><?php echo $cc; ?></td></tr>
      <td>Pekerjaan</td><td>:</td>
			<td><?php echo $prof; ?></td></tr>
      <td>Domisili</td><td>:</td>
			<td><?php echo $dms; ?></td></tr>

</table>
<div class="blockquote-wrapper">
  <div class="blockquote">
    <h1>
    <?php echo $bio; ?>
     </h1>
    <h4>&mdash; <?php echo $nama; ?></h4>
  </div>
</div>
    </div>   

<script type="text/javascript">
    $(function () {
        $("#count-down").TimeCircles({
        	count_past_zero: true
        });

        var timer_value = document.getElementById("timer_mutqin").value;
        var date = new Date(timer_value);

      

    });
</script>
  </div></div>


 <p id='null' style='display:none;'></p>
<input type="hidden" id="timer" value="<?php echo $timmut; ?>">

<script type="text/javascript">
    $(function () {


        var timer = document.getElementById("timer").value;
        var date = new Date(timer);

     
		$('#null').mbComingsoon({
			expiryDate: date,
			interval: 1000,
			speed: 500,
			localization: {
				days:"Hari",
				hours:"Jam",
				minutes:"Mnt",
				seconds:"Dtk"
			},
			callBack: function () {
                document.getElementById("basi").innerHTML = "<h1 class='exp'>EXPIRED</h1>";
			}
		});

    });
</script></div>
</body>
</html>
<?php include("footer.php");
?>
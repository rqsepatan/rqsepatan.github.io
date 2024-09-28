
<?php  
 include("header.php");

 $kelas = filter_input(INPUT_POST, 'kls', FILTER_SANITIZE_STRING);
 $lemb = filter_input(INPUT_POST, 'lemb', FILTER_SANITIZE_STRING);
 $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
?>
	<title>PESERTA UJIAN TAHFIZ | RQ SEPATAN</title>

</head>
<?php include("babatok.php");
?>

<link rel="stylesheet" href="css/timerujian.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.mb-comingsoon.js"></script>
<script src="js/timmutqin.js"></script>
<link rel="stylesheet" href="css/timmutq.css">

 <body> <div class="containeruj">
  
            <div id="content"><div class="component">

 <table class='table-users'>
            <center>Daftar Peserta <?php if(isset($_POST["lemb"])) {  if($lemb == 'albayyinah') { echo ' <img width="50" style="border-radius:50px;" height="50" src="img/tpaab.jpg"/> TPA AL-BAYYINAH'; }
     elseif ($lemb == 'rtqtamarin') {
      echo ' <img width="50" style="border-radius:50px;" height="50" src="img/rtq.jpg" /> RTQ RAUDHATUL QURAN (TAMARIN)';
    } elseif ($lemb == 'rqsepatan') {
      echo ' <img width="50" style="border-radius:50px;" height="50" src="img/rqdark.jpg" /> RQ SEPATAN (PRIVATE)';
    } elseif ($lemb == 'alhijrah') {
      echo ' <img width="50" style="border-radius:50px;" height="50" src="img/alhijrah.png" /> TPA AL HIJRAH';
    } } ?></center>  Filter Berdasarkan : <form action="filter-ujian.php" method="post"><div><select id="tede" name="lemb" onchange="this.form.submit()">
    <option>- Lembaga -</option>
    <option value="albayyinah">TPA AL-BAYYINAH</option>
    <option value="rtqtamarin">RTQ RAUDHATUL QURAN (TAMARIN</option>
    <option value="alhijrah">TPA AL-HIJRAH</option>
    <option value="rqsepatan">RQ SEPATAN (PRIVATE)</option>
  </select> </form> <form action="ujian.php" method="post">
  <select id="tede" name="kls" onchange="this.form.submit()">
    <option>- Kelas -</option>
    <option value="PRA TILAWAH">PRA TILAWAH</option>
    <option value="TILAWAH">TILAWAH</option>
    <option value="TAHFIZ">TAHFIZ</option>
    <option value="PENGAJAR">PENGAJAR</option>
</form></div>

    <!-- Row title -->

 
<col><col><col>
	<thead>


  
	</thead><tr>
        <th>Nama</th>
        <th>Setoran</th>
        <th>Nilai</th>
        <th>Ujian</th></tr>
        <!-- Row 1 - fadeIn -->
  
<?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?><tbody>
  <?php
include "config.php";
  if (isset($_POST['lemb']))  {$data = mysqli_query($konek,"select * from users WHERE lemb='$lemb' ORDER BY name"); } else {
    
 $data = mysqli_query($konek,"select * from users"); }
  $no = 1;
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
   $timmut = $r['timmut'];
   $ujian = $r['ujian'];
   $tgldone = $r['tgldone'];
   $gender = $r['gender'];
   $timmuj = $r['timmuj'];
   $nexam = $r['nexam'];
    ?> 
    

 <tr>
  
      <td><a href='profile.php?username=<?php echo $username; ?>'><?php echo $nama;?></a> <?php 
if(isset($_SESSION["user"])) {  if($_SESSION["user"]["status"] == 2) { echo "<a style='float:right;padding-right:40px;' href='set.php?uji=".$id."'><img src='icons/exam.png' width='20px' height='20px' /></a>"; } } ?></td>

 <td><?php echo $ujian; ?></td>

      <td><?php if($nexam == NULL && $timmuj == NULL) { echo 'blm prnah ujian';
    } elseif ($nexam == NULL) {
      echo 'menuju penilaian';
    } elseif ($nexam == 'sedang ujian') {
      echo 'menunggu ujian ...';
    } elseif ($nexam == 'Mumtaz'){ echo 'ممتاز';
    }  elseif ($nexam == 'Jayyid jiddan'){ echo 'جيد جدا';
    }  elseif ($nexam == 'Jayyid'){ echo 'جيد';
    }  elseif ($nexam == 'Maqbul'){ echo'مقبول';
    } elseif ($nexam == 'Dhaif'){ echo 'ضعيف';
    }  elseif ($nexam == 'Dhaif jiddan'){ echo 'ضعيف جدا';
    }  elseif ($nexam == 'Remedial'){ echo 'بُهْلُوْل';
    }
 ?></td>
  <?php if($timmuj == 'selesai') { echo '<ul class="more-content"><td>Ujian terakhir diselesaikan pada '.$tgldone.'</td></ul>';
    } elseif ($timmuj == NULL) {
      echo '<td class="uji">Belum Ujian</td>';
    } else { echo "<td id='cd-".$id."'></td>";
    }
 ?><input type="hidden" id="timer_<?php echo $id; ?>" value="<?php echo $timmuj; ?>">

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
         minutes:"Mnt",
         seconds:"Dtk"
       },
       callBack: function () {
                 document.getElementById("cd-<?php echo $id; ?>").innerHTML = "<div class='proses'>Sedang Ujian</div>";
       }
     });
 
     });
 </script> 


</tr>
  <?php } ?>
 </tbody>
 </table> 


						</table>
			
</div>
</div></div>
</body>

<?php include("footer.php");
?>
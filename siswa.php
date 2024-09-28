
<?php
 include("header.php");

?>
	<title>DAFTAR ANGGOTA | RQ SEPATAN</title>

</head>
<?php include("babatok.php");
?>

 <body>

 <div class="component">
 <table class='table-users'>
<col><col><col>
	<thead>


  
	</thead>

						    
			<th>Nama </th>
 
			<th>Kelas </th>
            <th>Hafalan</th>
						    </tr>
						
						  <tbody>
						  
         
<?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?>
  <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from users ORDER BY name;");
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
    ?>
   <tr>
   <td>
  <a href='profile.php?username=<?php echo $username; ?>'><?php echo $nama;?></a> <?php 
 if(isset($status) == 2) { if($username == 'admin') { echo "<img src='icons/admin.png' width='30' height='30' />"; } elseif($status == 2)  { echo "<img src='icons/tc.png' width='30' height='30' />"; } }  ?><?php 
if(isset($_SESSION["user"])) { if($_SESSION["user"]["status"] == 2) { echo "<a style='float:right;padding-right:50px;' href='penilaian.php?nilai=".$id."'><img src='icons/edit.png' width='30px' height='30px' /></a>"; } }  ?></td>
   <td> <div class='bagongkonenglindeuk'><img width='50' height='50' src="img/<?php if($lemb == 'albayyinah') { echo 'tpaab.jpg';
    } elseif ($lemb == 'rtqtamarin') {
      echo 'rtq.jpg';
    } elseif ($lemb == 'rqsepatan') {
      echo 'rq.jpg';
    } elseif ($lemb == 'alhijrah') {
      echo 'alhijrah.png';
    } else { echo 'rqdark.jpg';
}  ?>"></div> <?php echo $kelas; ?></td>
						
   <td><?php echo $hfz; ?></td>
  
  </tr>
  <?php } ?>
 </tbody>
 </table> 

 </tbody>
						</table>
			
</div></div>

            <script src="js/jquery.stickyheader.js"></script>
</body>

<?php include("footer.php");
?>
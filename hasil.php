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
	<title>KONFIRMASI PERUBAHAN | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         
         <?php $id = filter_input(INPUT_GET, 'nilai', FILTER_SANITIZE_STRING); ?>
<?php if(isset($_POST['barui'])) {

$pemb = filter_input(INPUT_POST, 'pemb', FILTER_SANITIZE_STRING);

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$lemb = filter_input(INPUT_POST, 'lemb', FILTER_SANITIZE_STRING);
$kelas = filter_input(INPUT_POST, 'kelas', FILTER_SANITIZE_STRING);
$hfz = filter_input(INPUT_POST, 'hfz', FILTER_SANITIZE_STRING);
$note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
$hnote = filter_input(INPUT_POST, 'hnote', FILTER_SANITIZE_STRING);
$ksms = filter_input(INPUT_POST, 'ksms', FILTER_SANITIZE_STRING);
$emh = filter_input(INPUT_POST, 'emh', FILTER_SANITIZE_STRING);
$esh = filter_input(INPUT_POST, 'esh', FILTER_SANITIZE_STRING);
$piket = filter_input(INPUT_POST, 'piket', FILTER_SANITIZE_STRING);
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);  }
?>

<body>
<div class="container">
            <div id="content">

       
 <div class="profile">


    <h1>
    <?php echo $name; ?>
          </h1>
          <section class="component">

          <form action="hasil2.php?nilai=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<table class="table-users">
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr>
			<td>Pembina</td><td>:</td>
			<td><?php echo $pemb; ?>
      <input type='hidden' name='pemb' value='<?php echo $pemb; ?>'></td></tr>
      <td>Status Akun yg dipilih</td><td>:</td>
			<td>  <?php echo $status; ?>
      <input type='hidden' name='status' value='<?php echo $status; ?>'></td></tr>
      <td>Lembaga</td><td>:</td>
			<td>  <?php echo $lemb; ?>
      <input type='hidden' name='lemb' value='<?php echo $lemb; ?>'></td></tr>
      <td>Kelas</td><td>:</td>
			<td>  <?php echo $kelas; ?>
      <input type='hidden' name='kelas' value='<?php echo $kelas; ?>'></td></tr>
      <td>Piket</td><td>:</td>
			<td>  <?php echo $piket; ?>
      <input type='hidden' name='piket' value='<?php echo $piket; ?>'></td></tr>
      <td>Hafalan</td><td>:</td>
			<td><?php echo $hfz; ?>  <input type='hidden' name='hfz' value='<?php echo $hfz; ?>'></td></tr>
      <td>kesempurnaan Mkharijul dan Sifatul Huruf</td><td>:</td>
			<td><?php echo $ksms; ?>
      <input type='hidden' name='ksms' value='<?php echo $ksms; ?>'></td></tr>
      <td>Evaluasi Makharijul Huruf</td><td>:</td>
			<td><?php echo $emh; ?></td></tr>
      <td>Evaluasi Sifatul Huruf</td><td>:</td>
			<td><?php echo $esh; ?>
      <input type='hidden' name='esh' value='<?php echo $esh; ?>'></td></tr>
      <td>Riwayat catatan</td><td>:</td>
			<td><?php echo $hnote; ?>
      <input type='hidden' name='hnote' value='<?php echo $hnote; ?>'></td></tr>
      <td>Catatan dari pengajar</td><td>:</td>
			<td><?php echo $note; ?>
      <input type='hidden' name='note' value='<?php echo $note; ?>'></td></tr>
      <input type='hidden' name='hnote' value='<?php echo $hnote; ?> ~ <?php echo date("d-m-Y"); ?> : <?php echo $note; ?>, oleh: <?php echo $_SESSION['user']['name'] ?>'> 

</tbody>

</table>
<h1>Konfirmasi Perubahan?</h1>
<label class="new-button"> Konfirmasi
<input type="submit" class="new-button" name="konf" style='display:none;' /></label>
      </form> 
      
      

</section>
</div>    

            </div>
            </div></body>
            <?php include("footer.php");
?>
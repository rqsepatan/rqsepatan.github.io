<?php include("nagog.php");
require_once("config.php");
?>
<?php $id = filter_input(INPUT_GET, 'nilai', FILTER_SANITIZE_STRING); ?>

<?php if(isset($_POST['nilai'])) {

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    $ujian = filter_input(INPUT_POST, 'ujian', FILTER_SANITIZE_STRING);
    $nexam = filter_input(INPUT_POST, 'nexam', FILTER_SANITIZE_STRING);
    $tgldone = filter_input(INPUT_POST, 'tgldone', FILTER_SANITIZE_STRING);
    $tlstr = filter_input(INPUT_POST, 'tlstr', FILTER_SANITIZE_STRING);
    $timmut = filter_input(INPUT_POST, 'timmut', FILTER_SANITIZE_STRING);
    $timmuj = filter_input(INPUT_POST, 'timmuj', FILTER_SANITIZE_STRING);
    $riwayat = filter_input(INPUT_POST, 'riwayat', FILTER_SANITIZE_STRING); }
?>

<?php include("header.php"); ?>
<title>REVIEW HASIL PENILAIAN | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

<body>       <div class="container">
            <div id="content">

            
<form action="niluj2.php?nilai=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<div class='profile'><h1>Penilaian akan diinput ke database</h1>


<table class="table-users">

	<thead>


  


	</thead>
<tbody>
<tr>
            <td>Nama Santri</td><td>:</td>
			<td><?php echo $name; ?></td></tr>
            <tr>  <td>Nilai</td><td>:</td>
			<td><input type='text' name='nexam' value='<?php echo $nexam; ?>' readonly></td></tr>
            
    <tr> <td>Riwayat</td><td>:</td>
			<td><input type='hidden' name='riwayat' value='<?php echo $riwayat; ?>. - Ujian: <?php echo $tlstr; ?> selesai pada: <?php echo $tgldone; ?> dengan nilai: <?php echo $nexam; ?></li>'><?php echo $riwayat; ?>. 
      - Ujian: <?php echo $tlstr; ?> selesai pada: <?php echo $tgldone; ?> dengan nilai: <?php echo $nexam; ?></td></tr>
  <tr><td>Batas Expired Mutqin, (ubah ke +30hr)</td><td>:</td>
			<td><input type="text" name="timmut" value="<?php echo date("Y-m-d"); ?>" /></td></tr>
<input type='hidden' name='tgldone' value='<?php echo date("d-m-Y"); ?>'>
<input type='hidden' name='stmutt' value='<?php echo date("Y-m-d"); ?>'>
<input type='hidden' name='timmuj' value='selesai'>
          </tbody></table>
          <center> <label class="new-button"> Konfirmasi
<input type="submit" class="new-button" name="nilai" style='display:none;' /></label></center>
      </form>
</div> 

            </div>
            </div></body>
      <?php include("footer.php"); ?>
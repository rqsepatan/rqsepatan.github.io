<?php 

require_once("config.php");
require_once("nagog.php");
if($_SESSION["user"]["status"] == 2){
  
} else {
    header("Location:siswa.php?err=" . urlencode("maaf ya ananda .. fitur ini hanya untuk ustadz dan ustadzah"));
exit();
}
    ?>


<?php include("header.php");
?>
	<title>PENILAIAN RAPORT | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>


        <?php if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         <div class="component">
<?php $id = filter_input(INPUT_GET, 'kalkulasi', FILTER_SANITIZE_STRING); ?>
 <?php
      $sql = "SELECT name, izin, sakit, alfa, photo, kelas, ksms, emh, esh, spp, timmut, lemb, pemb, hfz, ujian, mushaf, note FROM users WHERE id='$id'";
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
      $izin = $r['izin'];
      $alfa = $r['alfa'];
      $sakit = $r['sakit']; }
      $konek->close();
 ?>
<body>
<div class="containeruj">
            <div id="content">



 <div class="profile">


  
    <?php } ?>

          <section class="component">

          <form action="printraport.php" method="post" enctype="multipart/form-data">
          <table class="table-users">
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr>
			<td>Wali Kelas</td><td>:</td>
			<td>  <select id="tede" name="wali">
    <option value="Ustadz <?php echo  $_SESSION["user"]["name"] ?>">Ustadz <?php echo  $_SESSION["user"]["name"] ?></option>
    <option value="Ustadzah <?php echo  $_SESSION["user"]["name"] ?>">Ustadzah <?php echo  $_SESSION["user"]["name"] ?></option></select></td></tr>
           <tr> <td>Nama Santri</td><td>:</td>
			<td><input id="tede" type="text" name="name" value="<?php echo $name; ?>" /></td></tr>
            <tr> <td>Koordinator</td><td>:</td>
			<td><select id="tede" name="kord">
  <option value="Ustadz Ilham Minalloh">Ustadz Ilham Minalloh</option>
    <option value="Ustadz <?php echo  $_SESSION["user"]["name"] ?>">Ustadz <?php echo  $_SESSION["user"]["name"] ?></option>
    <option value="Ustadzah <?php echo  $_SESSION["user"]["name"] ?>">Ustadzah <?php echo  $_SESSION["user"]["name"] ?></option></select></td></tr>
            
    <tr> <td>Semester</td><td>:</td>
			<td>  <select id="tede" name="semester">
    <option value="Ganjil">Ganjil</option>
    <option value="Genap">Genap</option>
  </select></td></tr>
  <tr> <td>Tahun Ajaran</td><td>:</td>
			<td><input id="tede" type="text" name="tha" value="2022-2023" /></td></tr>
            <tr><td>NILAI TAHFIZ</td><td>:</td>
			<td><input id="tede" type="number" name="tahfiz" value="0" /></td></tr>
            <tr>  <td>NILAI HADITS</td><td>:</td>
			<td><input id="tede" type="number" name="hadits" value="0" /></td></tr>
            <tr>   <td>NILAI DO'A</td><td>:</td>
			<td><input id="tede" type="number" name="doa" value="0" /></td></tr>
            <tr>   <td>NILAI AQIDAH/AKHLAK</td><td>:</td>
			<td><input id="tede" type="number" name="aa" value="0" /></td></tr>
            <tr>   <td>NILAI FIQIH IBADAH</td><td>:</td>
			<td><input id="tede" type="number" name="fi" value="0" /></td></tr>
            <tr>    <td>NILAI PRAKTEK</td><td>:</td>
			<td><input id="tede" type="number" name="praktek" value="0" /></td></tr>
            <tr>   <td>NILAI KHOT</td><td>:</td>
			<td><input id="tede" type="number" name="khot" value="0" /></td></tr>
            <tr>   <td>Hadir</td><td>:</td>
			<td><input id="tede" type="number" name="hadir" value="<?php echo 50-$izin-$sakit-$alfa; ?>" /></td></tr>
            <tr>   <td>izin</td><td>:</td>
			<td><input id="tede" type="number" name="izin" value="<?php echo $izin; ?>" /></td></tr>
            <tr>  <td>sakit</td><td>:</td>
			<td><input id="tede" type="number" name="sakit" value="<?php echo $sakit; ?>" /></td></tr>
            <tr>  <td>alfa</td><td>:</td>
			<td><input id="tede" type="number" name="alfa" value="0" /></td></tr>
            <tr>     <td>Kelakuan</td><td>:</td>
			<td><input id="tede" type="number" name="kelakuan" value="0" /></td></tr>
            <tr>  <td>Kerajinan</td><td>:</td>
			<td><input id="tede" type="number" name="kerajinan" value="0" /></td></tr>
            <tr> <td>Kebersihan</td><td>:</td>
			<td><input id="tede" type="number" name="kebersihan" value="0" /></td></tr>
            <tr>    <td>Jilid Al Ummah</td><td>:</td>
			<td> <select id="tede" name="btq">
    <option value="Jilid 1">Jilid 1</option>
    <option value="Jilid 2">Jilid 2</option>
    <option value="Jilid 3">Jilid 3</option>
    <option value="Jilid 4">Jilid 4</option>
    <option value="Jilid 5">Jilid 5</option>
    <option value="Jilid 6">Jilid 6</option>
    <option value="Al Qur'an">Al Qur'an</option>
  </select> <select id="tede" name="btqhal">
  <option value="1">Halaman 1</option>
    <option value="2">Halaman 2</option>
    <option value="3">Halaman 3</option>
    <option value="4">Halaman 4</option>
    <option value="5">Halaman 5</option>
    <option value="6">Halaman 6</option>
    <option value="7">Halaman 7</option>
    <option value="8">Halaman 8</option>
    <option value="9">Halaman 9</option>
    <option value="10">Halaman 10</option>
    <option value="11">Halaman 11</option>
    <option value="12">Halaman 12</option>
    <option value="13">Halaman 13</option>
    <option value="14">Halaman 14</option>
    <option value="15">Halaman 15</option>
    <option value="16">Halaman 16</option>
    <option value="17">Halaman 17</option>
    <option value="18">Halaman 18</option>
    <option value="19">Halaman 19</option>
    <option value="20">Halaman 20</option>
    <option value="21">Halaman 21</option>
    <option value="22">Halaman 22</option>
    <option value="23">Halaman 23</option>
    <option value="24">Halaman 24</option>
    <option value="25">Halaman 25</option>
    <option value="26">Halaman 26</option>
    <option value="27">Halaman 27</option>
    <option value="28">Halaman 28</option>
    <option value="29">Halaman 29</option>
    <option value="30">Halaman 30</option>
    <option value="31">Halaman 31</option>
    <option value="32">Halaman 32</option>
    <option value="33">Halaman 33</option>
    <option value="34">Halaman 34</option>
    <option value="35">Halaman 35</option>
    <option value="36">Halaman 36</option>
    <option value="37">Halaman 37</option>
    <option value="38">Halaman 38</option>
    <option value="39">Halaman 39</option>
    <option value="40">Halaman 40</option>  </select></td></tr>
    <tr> <td>Kelakuan</td><td>:</td>
			<td><select id="tede" name="prilaku">
  <option value="A">Nilai A (Baik Sekali)</option>
    <option value="B">Nilai B (Baik)</option>
    <option value="C">Nilai C (Cukup)</option>
    <option value="D">Nilai D (Kurang Cukup)</option></select></td></tr>
    <tr>     <td>Kerajinan</td><td>:</td>
			<td> <select id="tede" name="rajin">
  <option value="A">Nilai A (Baik Sekali)</option>
    <option value="B">Nilai B (Baik)</option>
    <option value="C">Nilai C (Cukup)</option>
    <option value="D">Nilai D (Kurang Cukup)</option></select></td></tr>
    <tr>    <td>Kebersihan</td><td>:</td>
			<td><select id="tede" name="bersih">
  <option value="A">Nilai A (Baik Sekali)</option>
    <option value="B">Nilai B (Baik)</option>
    <option value="C">Nilai C (Cukup)</option>
    <option value="D">Nilai D (Kurang Cukup)</option></select></td></tr>
    <tr><td>Praktek Solat</td><td>:</td>
			<td><input id="tede" type="number" name="psolat" value="16 Rukun" /></td></tr>
            <tr>    <td>Materi Diniyah</td><td>:</td>
			<td><input id="tede" type="number" name="mdiniyah" value="Materi Aqidah & Fiqih" /></td></tr>
            <tr> <td>Materi Khot</td><td>:</td>
			<td><input id="tede" type="number" name="mkhot" value="Menulis Surat Ad-Dhuha" /></td></tr>
            <tr> <td>Jmlh. Hafalan Surah</td><td>:</td>
			<td><input id="tede" type="number" name="surh" value="0" /></td></tr>
            <tr> <td>Jmlh. Hafalan Hadits</td><td>:</td>
			<td><input id="tede" type="number" name="hadh" value="0" /></td></tr>
            <tr>    <td>Jmlh. Hafalan Do'a</td><td>:</td>
			<td><input id="tede" type="number" name="doah" value="0" /></td></tr>
            <tr>    <td>Raport dibagikan di</td><td>:</td>
			<td><select id="tede" name="pembagian">
  <option value="TPA AL-BAYYINAH">TPA AL-BAYYINAH</option>
    <option value="RTQ TAMARIN">RTQ TAMARIN</option></select></td></tr>
    <tr>   <td>Tanggal Pembagian Raport</td><td>:</td>
			<td><input id="tede" type="date" name="tglpemb" value="0" /></td></tr>
            <tr>    <td>Catatan untuk diperhatikan Orang Tua/ Wali Santri  :</td><td>:</td>
			<td><input id="tedetext" type="text" name="catatan" value="Tetap semangat dan terus dimuroja'ah" /></td></tr>
</table>
<center>  <input type="submit" class="new-button" name="kalkulasi" value="HASILKAN" /></center>
      </form>
    </div>   


</div>

</div></div>
  </body>
  <?php include("footer.php");
?>
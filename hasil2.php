
<?php include("nagog.php");
require_once("config.php");
?>
<?php include("header.php"); ?>
<?php $id = filter_input(INPUT_GET, 'nilai', FILTER_SANITIZE_STRING); ?>
 <?php
if(isset($_POST['konf'])){

    // filter data yang diinputkan
    $ksms = filter_input(INPUT_POST, 'ksms', FILTER_SANITIZE_STRING);
    $esh = filter_input(INPUT_POST, 'esh', FILTER_SANITIZE_STRING);
    $emh = filter_input(INPUT_POST, 'emh', FILTER_SANITIZE_STRING);
    $kelas = filter_input(INPUT_POST, 'kelas', FILTER_SANITIZE_STRING);
    $lemb = filter_input(INPUT_POST, 'lemb', FILTER_SANITIZE_STRING);
    $pemb = filter_input(INPUT_POST, 'pemb', FILTER_SANITIZE_STRING);
    $note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
    $hfz = filter_input(INPUT_POST, 'hfz', FILTER_SANITIZE_STRING);
    $spp = filter_input(INPUT_POST, 'spp', FILTER_SANITIZE_STRING);
    $hnote = filter_input(INPUT_POST, 'hnote', FILTER_SANITIZE_STRING);
    $piket = filter_input(INPUT_POST, 'piket', FILTER_SANITIZE_STRING);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
    // enkripsi password




    // menyiapkan query
    $sql = "UPDATE users SET kelas='$kelas', piket='$piket', ksms='$ksms', lemb='$lemb', pemb='$pemb', note='$note', hfz='$hfz', esh='$esh', emh='$emh', hnote='$hnote', status='$status'  WHERE id='$id'";
    $stmt = $db->prepare($sql);

    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    

        if ($_SESSION['user']['status'] == 2 && $konek->query($sql) === TRUE) {
          header("Location:siswa.php?success=" . urlencode("Berhasil diperbarui!"));
      } else {
        echo "Error updating record: " . $konek->error;
      }
      
      $konek->close();
      
}
?>

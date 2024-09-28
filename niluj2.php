<?php include("nagog.php");
require_once("config.php");
?>
<?php include("header.php"); ?>

<?php $id = filter_input(INPUT_GET, 'nilai', FILTER_SANITIZE_STRING); ?>
<?php


if(isset($_POST['nilai'])){

    // filter data yang diinputkan

    $ujian = filter_input(INPUT_POST, 'ujian', FILTER_SANITIZE_STRING);
    $nexam = filter_input(INPUT_POST, 'nexam', FILTER_SANITIZE_STRING);
    $tgldone = filter_input(INPUT_POST, 'tgldone', FILTER_SANITIZE_STRING);
    $tlstr = filter_input(INPUT_POST, 'tlstr', FILTER_SANITIZE_STRING);
    $timmut = filter_input(INPUT_POST, 'timmut', FILTER_SANITIZE_STRING);
    $timmuj = filter_input(INPUT_POST, 'timmuj', FILTER_SANITIZE_STRING);
    $riwayat = filter_input(INPUT_POST, 'riwayat', FILTER_SANITIZE_STRING);
    $stmutt = filter_input(INPUT_POST, 'stmutt', FILTER_SANITIZE_STRING);
    // enkripsi password



    // menyiapkan query
    $sql = "UPDATE users SET ujian='$ujian', timmuj='$timmuj', tlstr='$tlstr', nexam='$nexam', tgldone='$tgldone', timmut='$timmut', riwayat='$riwayat'
    , stmutt='$timmut' WHERE id='$id'";
    $stmt = $db->prepare($sql);

    // bind parameter ke query


    // eksekusi query untuk menyimpan ke database
    if ($konek->query($sql) === TRUE) {
        header("Location:ujian.php?success=" . urlencode("Toyyib, siswa sudah dinilai"));
      } else {
        echo "ERRROOOOOOOOOOORRRR" . $konek->error;
      }
      
      $konek->close();
      
}

?>
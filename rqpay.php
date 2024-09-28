

<?php include("header.php");
?>
<?php if($_SESSION["user"]["status"] == 2 || $_SESSION["user"]["status"] == 1){
} else  { header("Location:index.php?err=" . urlencode("mau ngapain loh tolol?"));  }

?>
	<title>RQ SEPATAN </title>
</head>

<?php include("babatok.php");
$username = $_SESSION["user"]["username"]; 
?>
<body>


<div class="container">
            <div id="content">
     
            <center><span class='rqname'><?php echo $_SESSION["user"]["name"]; ?></span>


<div class="rqcard">


<span class='rqbalance'> <span class='rqdgt'>Rp. <?php if($_SESSION["user"]["rqpay"] == NULL) { echo '0';} else { echo $_SESSION["user"]["rqpay"]; } ?></span></span>
</div></center><a href='topup.php?for=<?php echo $_SESSION["user"]["username"]; ?>'><button>ISI SALDO</button></a>
<?php if(isset($_GET['success'])) { ?>
         
         <div class="alert-box success"><?php echo $_GET['success']; ?></div>
         
         <?php } ?>
         <?php if(isset($_GET['err'])) { ?>
         
         <div class="alert-box error"><?php echo $_GET['err']; ?></div>
         
         <?php } ?> 
         <?php
  include "config.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from rqpay WHERE oleh='$username' ORDER BY id DESC;");

  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $file_name = $r['file_name'];
   $uploaded_on = $r['uploaded_on'];
   $oleh = $r['oleh'];
$status = $r['status'];
   $nominal = $r['nominal'];
   $jt = $r['jt'];
    ?>
       
    <div style='background-color:#ddd;padding: 3px;border-radius:10px;border-bottom: 2px solid #111;text-align:center;'>Top up <?php echo  $nominal; ?><br/>
    Pembayaran: <?php echo  $jt; ?><br/>
    pada <?php echo  $uploaded_on; ?><br/>
    status: <?php echo  $status; ?><br/>
	<a href='buktitopup/<?php echo  $username; ?>/<?php echo  $file_name; ?>'>Lihat bukti transfer</a></div>
    <?php } ?>    </div></div>
  </body>
<?php include("footer.php");
?>
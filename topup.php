

<?php include("header.php");
?>
<?php if($_SESSION["user"]["status"] == 2 || $_SESSION["user"]["status"] == 1){
} else  { header("Location:index.php?err=" . urlencode("mau ngapain loh tolol?"));  }

?>
	<title>TOP UP RQPAY</title>
</head>

<?php include("babatok.php");

?>
<body>
<div class="container">
            <div id="content">
<?php $username = filter_input(INPUT_GET, 'for', FILTER_SANITIZE_STRING); 
?>
    <form action="topupin.php" method="post" enctype="multipart/form-data">


  <table class="table-users">
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr>
      <td>Metode Pembayaran</td><td>:</td>
			<td>  <select id="tede" name="jt">
      <option value="TFB">TRANSFER BANK</option>
    <option value="DANA">DANA</option>
    <option value="OVO">OVO</option>
    <option value="SHOPEEPAY">SHOPEEPAY</option>
  </select></td></tr>
  <td>Nominal Pengisian (RP)</td><td>:</td>
			<td><input id="tede" type="number" name="nominal" value="<?php echo $nominal; ?>" placeholder='cth: 100000' required/></td></tr>
  
      <td>*perhatian</td><td>:</td>
			<td><ol><li>isi semua dengan benar</li><li>hubungi admin jika ada kendala</li></ol></td></tr>
     <tr>
      <td>
 Upload bukti Transfer</td><td>:</td>
			<td> <div class="button-wrap">    <label class="new-button" for="upload"> UPLOAD BUKTI TF
    <input id="upload" class='go' type="file" name="file" required></input></label>
  
</div></td></tr>
    
</tbody>

</table>
    


<input type='hidden' name='sblj' value='<?php echo  $_SESSION["user"]["sblju"] ?>'>
<input type='hidden' name='oleh' value='<?php echo  $_SESSION["user"]["username"] ?>'>
    
    <input type='hidden' name='uploaded_on' value='<?php echo date("d-m-Y H:i"); ?>'>
    <input type='hidden' name='status' value='sedang diproses'>

    <input type="submit" class='new-button' name="submit" value="ISI SALDO">
</form>

<?php echo date("d-m-Y H:i"); ?> <?php echo  $_SESSION["user"]["username"] ?>
</div></div>
</body>

<?php include("footer.php");
?>

<script language='JavaScript1.2'>
function disableselect(e){
return false}
function reEnable(){
return true}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable}
</script>
<header>


<div class="background">
  
  <img class="mySlides w3-animate-fading blur" src="img/doc0.jpg" style="width:100%;">
  <img class="mySlides w3-animate-fading blur" src="img/doc1.jpg" style="width:100%;">
  <img class="mySlides w3-animate-fading blur" src="img/doc2.jpg" style="width:100%;">
  <img class="mySlides w3-animate-fading blur" src="img/doc3.jpg" style="width:100%;">
 
</div>



  <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script> 
<div style='justify-content:center;width:100%;' class="bg-text"> <div class="dropdown">
    <button class="dropbtn"><img style='width:125px' src='icons/rq.png' /> 
 
    </button>
    <div class="dropdown-content">

      <a href="siswa.php">Siswa</a>
  <a href="ujian.php">Ujian</a>
  <a href="piket.php">Piket</a>
  <?php if(isset($_SESSION["user"])) { echo '<a href="shop.php">Belanja</a><a href="rqpay.php">RQPay (Rp.'.$_SESSION["user"]["rqpay"].')</a> ';
   
  } ?>
    </div>
  </div> </div>
 




    </header> 
    <div class="navbar">
      
      <div class='lambang'>
      <a href="index.php">
            <img src="img/rqdark.jpg" class='lambange' style='width:100%;' alt="RQ" /></a>
      </div><div class='navi'>
  <a href="index.php">Home</a>

          <?php if(isset($_SESSION["user"])) { echo '<a href="profile.php?username='.$_SESSION["user"]["username"].'">Profil</a><a href="logout.php">Keluar</a>';
   
     } ?>
     <?php if(!isset($_SESSION["user"])) { echo '<a href="login.php">Masuk</a>';
  } ?>

   

   <?php if(isset($_SESSION["user"])) { if($_SESSION["user"]["status"] == 2) { echo '<a href="market.php">Market</a>'; }}?>
</div></div></div></div>


<div class="scbox">
    <form name="search" action='filter.php'>
        <input type="text" class="scinput" name="cari" onmouseout="this.value = ''; this.blur();" placekolder='cari ...'>
    </form>
    <img style='width:20px' src='icons/carii.png' />

</div>



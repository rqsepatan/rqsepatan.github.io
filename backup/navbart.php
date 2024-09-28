div></div></div>

<content>
  <input id="hamburger" class="hamburger" type="checkbox"/>
  <label class="hamburger" for="hamburger">
    <i></i>
    <text>
      <close>tutup</close>
      <open>menu</open>
    </text>
  </label>
  <section class="drawer-list">
  <?php  if(isset($_SESSION["user"])) {
   $pp = $_SESSION["user"]["photo"];
   $nm = $_SESSION["user"]["name"];
   $rp = $_SESSION["user"]["rqpay"];
     } ?>
        <ul>
<?php  
       
if(isset($_SESSION["user"])


) {
   echo '  <li><a href="timeline.php">'.$nm.'</a></li>';
    } else {
      echo '<li><a href="login.php">masuk</a></li><li><a href="https://wa.me/6281573803087?text=Aktifkan%20Akun">Aktifkan Akun</a></li>'; } ?>
          <li><a href="shop.php">belanja</a></li>
          <li><a href="support.php">support</a></li>
          <?php if(isset($_SESSION["user"])) { echo '<li><a href="logout.php">keluar</a></li>';
   
     } ?>
 
      </ul>
 
      </section>
</content>

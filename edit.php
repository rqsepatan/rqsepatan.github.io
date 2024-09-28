

<?php include("header.php");
?>

	<title>EDIT PROFIL | RQ SEPATAN</title>
</head>
<?php include("babatok.php");
?>

<body>
<div class="containeruj">
            <div id="content">
            <div class="component">
            

    </a><br>
    <form action="update.php" method="post" enctype="multipart/form-data">
<input type='hidden' name='username' value='<?php echo  $_SESSION["user"]["username"] ?>'>
<input type='hidden' name='name' value='<?php echo  $_SESSION["user"]["name"] ?>'>
<h1 style='text-align:center;'>

Edit Profil
<span class="underline"></span>
</h1>
<div class='profile'>
 
       
<table class="table-users">
<col><col><col>
	<thead>


  
	</thead>
<tbody>
<tr>
			
  <div class="button-wrap"><img class="img img-responsive rounded-circle mb-3" width="160" src="ppsiswa/<?php echo $_SESSION['user']['photo'] ?>" /><br>
    <label class="new-button" for="upload"> UBAH FOTO PROFIL
    <input id="upload" class='go' type="file" name="file"></input></label>
  
</div></tr>

     
        
      <tr><td>  <label for="signup-email">Nama Lengkap</label></td><td>:</td><td>
        <input id="tede" type="text" name="name" value="<?php echo  $_SESSION["user"]["name"] ?>" required /></td></tr>
         

        <tr><td>
        <label for="signup-email">Username</label></td><td>:</td><td>
        <input id="tede" type="text" name="username" value="<?php echo  $_SESSION["user"]["username"] ?>" readonly /></td></tr>
         

        <tr><td>
        <label for="signup-email">Alamat E-mail</label></td><td>:</td><td>
        <input id="tede" type="email" name="email" value="<?php echo  $_SESSION["user"]["email"] ?>" required /></td></tr>
         

        <tr><td>
        <label for="signup-email">Kelas</label></td><td>:</td><td>
  <input type='text' value='<?php echo  $_SESSION["user"]["kelas"] ?>' readonly/></td></tr> <tr><td>


          
        <label for="signup-email">No. HP</label></td><td>:</td><td>
        <input id="tede" type="text" name="hp" value="<?php echo  $_SESSION["user"]["hp"] ?>"  required/></td></tr>
         
        <tr><td>
        <label for="signup-email">Tanggal Lahir</label></td><td>:</td><td>
        <input id="tede" type="date" name="ttl" value="<?php  echo  $_SESSION["user"]["ttl"] ?>" /></td></tr>
         
        <tr><td>
        <label for="signup-email">Visi dan Misi</label></td><td>:</td><td>
        <input  id="tede" type="text" name="vm" value="<?php echo  $_SESSION["user"]["vm"] ?>" /></td></tr>
        <tr><td>
        <label for="signup-email">Cita-cita</label></td><td>:</td><td>
        <input  id="tede" type="text" name="cc" value="<?php echo  $_SESSION["user"]["cc"] ?>" /></td></tr>
        <tr><td>
        <label for="signup-email">Domisili</label></td><td>:</td><td>
        <input  id="tede" type="text" name="dms" value="<?php echo  $_SESSION["user"]["dms"] ?>" /></td></tr>
        <tr><td>
        <label for="signup-email">Pekerjaan</label></td><td>:</td><td>
        <input  id="tede" type="text" name="prof" value="<?php echo  $_SESSION["user"]["prof"] ?>" /></td></tr>
         
        <tr><td>
        <label for="signup-email">intro</label></td><td>:</td><td>
        <input style='height:50px;' type="text" name="bio" value="<?php echo  $_SESSION["user"]["bio"] ?>" /></td></tr>
         
        
   <tr> <th></th><th></th><td><input type="submit" class='rq-button' style='background-color: #2757b0;' name="submit" value='EDIT'>
      </form></td></tr></tbody></table>
</div>
</div>

            </div>
            </div></body>
<?php include("footer.php");
?>
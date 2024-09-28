
<script type="text/javascript" src="js/videoplayer.js"></script>

<ul class='handap'>      
<?php
  include "config.php";

  $data = mysqli_query($konek,"SELECT count( * ) as  total_record FROM users WHERE status=1");
  while($r = mysqli_fetch_array($data)){
   $total = $r['total_record']; }

  $data = mysqli_query($konek,"SELECT count( * ) as  ust FROM users WHERE status=2");
  while($r = mysqli_fetch_array($data)){
   $totalpg = $r['ust'];
  }
  
  $data = mysqli_query($konek,"SELECT count( * ) as  lk FROM users WHERE gender='male'");
  while($r = mysqli_fetch_array($data)){
   $lk = $r['lk'];
  }
  
  $data = mysqli_query($konek,"SELECT count( * ) as  pr FROM users WHERE gender='female'");
  while($r = mysqli_fetch_array($data)){
   $pr = $r['pr'];
  }
  
   ?>
<li>
                    <span>Anggota</span>
                
         <table id='slebew'><tr>
         <td> Total Siswa</td><td> : </td><td><?php echo $total ?> Siswa</td></tr>
         <tr><td>Pengajar</td><td> : </td><td><?php echo $totalpg ?>  Pengajar</td></tr>
         <tr> <td>Laki-laki</td><td> : </td><td><?php echo $lk ?>  Santri</td></tr>
         <tr>  <td> Perempuan</td><td> : </td><td><?php echo $pr ?>  Santriwati</td></tr></table>
         
                </li>
                <li>
                    <span>Sosial Media</span>
                
                    <table id='slebew'><tr>
                    <td> <img src='icons/ig.png' width='30' height='30' /></td><td>  </td><td><a href='https://instagram.com/rq_sepatan'>@rq_sepatan</a></td></tr>
         <tr><td> <img src='icons/yt.png' width='30' height='30' /></td><td>  </td><td><a href='https://www.youtube.com/@rumahquransepatan7056'>
Rumah Qur'an Sepatan</a></td></tr></table>
                </li>
                <li>
                    <span>Pusat Administrasi</span>
                   <img src='icons/loc.png' width='30' height='30' /> Gg. Astana Desa Lebak wangi, RT/RW 01/02 NO 18 - kec Sepatan Kab Tangerang Banten  15520
                </li>

                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
                <li> <!-- Ulangi lagi tiga kali sehingga sekarang kita punya 6 list -->
            </ul>
<footer>


        
    <p>&copy RQSEPATAN.com</p>
  </footer>
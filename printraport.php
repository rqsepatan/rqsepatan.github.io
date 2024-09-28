<!-- <div class"graph-image graph-7">
  <img src="img/doc5.jpg" style='opacity:0.5;' alt="Graph Description" />
</div> -->
<style>
@print {
    @page :footer {
        display: none
    }
 
    @page :header {
        display: none
    }
}</style>
<?php include "config.php"; ?>
<?php $hadits = filter_input(INPUT_POST, 'hadits', FILTER_SANITIZE_STRING);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$semester = filter_input(INPUT_POST, 'semester', FILTER_SANITIZE_STRING);
$tha = filter_input(INPUT_POST, 'tha', FILTER_SANITIZE_STRING);
$hadits = filter_input(INPUT_POST, 'hadits', FILTER_SANITIZE_STRING);
$doa = filter_input(INPUT_POST, 'doa', FILTER_SANITIZE_STRING);
$aa = filter_input(INPUT_POST, 'aa', FILTER_SANITIZE_STRING);
$fi = filter_input(INPUT_POST, 'aa', FILTER_SANITIZE_STRING);
$praktek = filter_input(INPUT_POST, 'praktek', FILTER_SANITIZE_STRING);
$khot = filter_input(INPUT_POST, 'khot', FILTER_SANITIZE_STRING);
$hadir = filter_input(INPUT_POST, 'hadir', FILTER_SANITIZE_STRING);
$alfa = filter_input(INPUT_POST, 'alfa', FILTER_SANITIZE_STRING);
$kelakuan = filter_input(INPUT_POST, 'kelakuan', FILTER_SANITIZE_STRING);
$kerajinan = filter_input(INPUT_POST, 'kerajinan', FILTER_SANITIZE_STRING);
$kebersihan = filter_input(INPUT_POST, 'kebersihan', FILTER_SANITIZE_STRING);
$tahfiz = filter_input(INPUT_POST, 'tahfiz', FILTER_SANITIZE_STRING);
$jilid = filter_input(INPUT_POST, 'jilid', FILTER_SANITIZE_STRING);
$btq = filter_input(INPUT_POST, 'btq', FILTER_SANITIZE_STRING);
$kord = filter_input(INPUT_POST, 'kord', FILTER_SANITIZE_STRING);
$wali = filter_input(INPUT_POST, 'wali', FILTER_SANITIZE_STRING);
$pembagian = filter_input(INPUT_POST, 'pembagian', FILTER_SANITIZE_STRING);
$tglpemb = filter_input(INPUT_POST, 'tglpemb', FILTER_SANITIZE_STRING);
$izin = filter_input(INPUT_POST, 'izin', FILTER_SANITIZE_STRING);
$sakit = filter_input(INPUT_POST, 'sakit', FILTER_SANITIZE_STRING);
$alfa = filter_input(INPUT_POST, 'alfa', FILTER_SANITIZE_STRING);
$prilaku = filter_input(INPUT_POST, 'prilaku', FILTER_SANITIZE_STRING);
$rajin = filter_input(INPUT_POST, 'rajin', FILTER_SANITIZE_STRING);
$bersih = filter_input(INPUT_POST, 'bersih', FILTER_SANITIZE_STRING);
$surh = filter_input(INPUT_POST, 'surh', FILTER_SANITIZE_STRING);
$hadh = filter_input(INPUT_POST, 'hadh', FILTER_SANITIZE_STRING);
$doah = filter_input(INPUT_POST, 'doah', FILTER_SANITIZE_STRING);
$psolat = filter_input(INPUT_POST, 'psolat', FILTER_SANITIZE_STRING);
$mdiniyah = filter_input(INPUT_POST, 'mdiniyah', FILTER_SANITIZE_STRING);
$mkhot = filter_input(INPUT_POST, 'mkhot', FILTER_SANITIZE_STRING);
$catatan = filter_input(INPUT_POST, 'catatan', FILTER_SANITIZE_STRING);
$btqhal = filter_input(INPUT_POST, 'btqhal', FILTER_SANITIZE_STRING);
$des = 70;
$jtahfiz = ($tahfiz*$des/100);
$jhadits = ($hadits*$des/100);
$jdoa = ($doa*$des/100);
$jaa = ($aa*$des/100);
$jfi = ($fi*$des/100);
$jpraktek = ($praktek*$des/100);
$jkhot = ($khot*$des/100);
$khadir = ($hadir/50*20);
$jhadir=round($khadir,1);
$kdis = ($kelakuan+$kerajinan+$kebersihan);
$totalkdis = ($kdis/3*10/100);
$disiplin=round($totalkdis,1);
$quran = ($jtahfiz+$jhadir+$disiplin);
$diniyah = ($jaa/2+$jhadir+$disiplin);
$spraktek = ($jpraktek+$jhadir+$disiplin);
$skhot = ($jkhot+$jhadir+$disiplin);
$sdoa = ($jdoa+$jhadir+$disiplin);
$shadits = ($jhadits+$jhadir+$disiplin);
$bkhadits=round($shadits,2);
$bkdoa=round($sdoa,2);
$bkpraktek=round($spraktek,2);
$bkdiniyah=round($diniyah,2);
$bkhot=round($skhot,2);
$bkquran=round($quran,2);

?>



<link href="css/raport.css" rel="stylesheet">
<body>
<div class="book">
<div class="page">

    <table border="0" cellpadding="0" cellspacing="0" width="691" style="border-collapse:
     collapse;table-layout:fixed;width:520pt">
     <colgroup><col width="25" style="mso-width-source:userset;mso-width-alt:1066;width:19pt">
     <col width="41" style="mso-width-source:userset;mso-width-alt:1749;width:31pt">
     <col width="69" style="mso-width-source:userset;mso-width-alt:2944;width:52pt">
     <col width="56" style="width:42pt">
     <col width="42" style="mso-width-source:userset;mso-width-alt:1792;width:32pt">
     <col width="57" style="mso-width-source:userset;mso-width-alt:2432;width:43pt">
     <col width="56" style="mso-width-source:userset;mso-width-alt:2389;width:42pt">
     <col width="32" style="mso-width-source:userset;mso-width-alt:1365;width:24pt">
     <col width="56" style="width:42pt">
     <col width="49" style="mso-width-source:userset;mso-width-alt:2090;width:37pt">
     <col width="79" style="mso-width-source:userset;mso-width-alt:3370;width:59pt">
     <col width="56" style="width:42pt">
     <col width="61" style="mso-width-source:userset;mso-width-alt:2602;width:46pt">
     <col width="12" style="mso-width-source:userset;mso-width-alt:512;width:9pt">
     <col width="56" span="6" style="mso-width-source:userset;mso-width-alt:2389;
     width:42pt">
     </colgroup><tbody><tr height="15" style="height:11.25pt">
      <td height="15" width="25" style="height:11.25pt;width:19pt"></td>
      <td width="41" style="width:31pt"></td>
      <td width="69" style="width:52pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="42" style="width:32pt"></td>
      <td width="57" style="width:43pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="32" style="width:24pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="49" style="width:37pt"></td>
      <td width="79" style="width:59pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="61" style="width:46pt"></td>
      <td width="12" style="width:9pt"></td>
     </tr>
     <tr height="15" style="height:11.25pt">
      <td height="15" colspan="14" style="height:11.25pt;mso-ignore:colspan"></td>
     </tr>
     <tr height="3" style="mso-height-source:userset;height:2.25pt">
      <td height="3" colspan="14" style="height:2.25pt;mso-ignore:colspan"></td>
     </tr>
     <tr height="16" style="mso-height-source:userset;height:12.0pt">
      <td height="16" colspan="14" style="height:12.0pt;mso-ignore:colspan"></td>
     </tr>
     <tr height="0" style="display:none">
      <td height="0" colspan="14" style="mso-ignore:colspan"></td>
     </tr>
     <tr height="18" style="mso-height-source:userset;height:13.5pt">
      <td height="18" colspan="14" style="height:13.5pt;mso-ignore:colspan"></td>
     </tr>
     <tr height="25" style="height:18.75pt">
      <td height="25" style="height:18.75pt"></td>
      <td class="xl65" colspan="5" style="mso-ignore:colspan">LAPORAN HASIL BELAJAR</td>
      <td class="xl66"></td>
      <td class="xl66"></td>
      <td class="xl66"></td>
      <td colspan="2" class="xl104">Semester<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</td>
      <td colspan="2" class="xl105"><?php echo $semester; ?></td>
      <td></td>
     </tr>
     <tr height="21" style="height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td colspan="2" class="xl106">Nama Santri<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </span>:</td>
      <td class="xl79" colspan="4" style="mso-ignore:colspan"><?php echo $name; ?></td>
      <td class="xl66"></td>
      <td class="xl66"></td>
      <td colspan="2" class="xl104">Tahun Ajaran<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </span>:</td>
      <td colspan="2" class="xl105"><?php echo $tha; ?></td>
      <td></td>
     </tr>
     <tr height="30" style="height:22.5pt;mso-xlrowspan:2">
      <td height="30" colspan="14" style="height:22.5pt;mso-ignore:colspan"></td>
     </tr>
     <tr height="24" style="mso-height-source:userset;height:18.0pt">
      <td height="24" style="height:18.0pt"></td>
      <td colspan="12" class="xl99">I. MATERI POKOK</td>
      <td class="xl71">&nbsp;</td>
     </tr>
     <tr height="26" style="mso-height-source:userset;height:19.5pt">
      <td height="26" style="height:19.5pt"></td>
      <td colspan="4" class="xl100">Tingkat</td>
      <td colspan="3" class="xl101" width="145" style="border-left:none;width:109pt">Jilid/Surat</td>
      <td colspan="3" class="xl101" width="184" style="border-left:none;width:138pt">Hal/Ayat</td>
      <td colspan="2" class="xl92" style="border-left:none">Nilai</td>
      <td class="xl70"></td>
     </tr>
     <tr height="27" style="mso-height-source:userset;height:20.25pt">
      <td height="27" style="height:20.25pt"></td>
      <td colspan="4" class="xl102" width="208" style="width:157pt">Ketuntasan Tahsin :</td>
      <td colspan="3" class="xl96" style="border-left:none"><?php echo $btq; ?></td>
      <td colspan="3" class="xl96" style="border-left:none"><?php echo $btqhal; ?></td>
      <td colspan="2" class="xl96" style="border-left:none">
<?php if($btq == 'Jilid 1' && $btqhal < 10) {
    echo 70+0;
} elseif ($btq == 'Jilid 1' && $btqhal < 20){
     echo 70+1;
}  elseif ($btq == 'Jilid 1' && $btqhal < 30){
    echo 70+2;
}  elseif ($btq == 'Jilid 1' && $btqhal > 30){
    echo 70+3;
}  elseif ($btq == 'Jilid 2' && $btqhal < 10){
    echo 74+0;
}  elseif ($btq == 'Jilid 2' && $btqhal < 20){
   echo 74+1;
}  elseif ($btq == 'Jilid 2' && $btqhal < 30){
   echo 74+2;
}  elseif ($btq == 'Jilid 2' && $btqhal > 30){
    echo 74+3;
}   elseif ($btq == 'Jilid 3' && $btqhal < 10){
    echo 77+0;
}  elseif ($btq == 'Jilid 3' && $btqhal < 20){
   echo 77+1;
}  elseif ($btq == 'Jilid 3' && $btqhal < 30){
   echo 77+2;
}  elseif ($btq == 'Jilid 3' && $btqhal > 30){
    echo 77+3;
}   elseif ($btq == 'Jilid 4' && $btqhal < 10){
    echo 81+0;
}  elseif ($btq == 'Jilid 4' && $btqhal < 20){
   echo 81+1;
}  elseif ($btq == 'Jilid 4' && $btqhal < 30){
   echo 81+2;
}  elseif ($btq == 'Jilid 4' && $btqhal > 30){
    echo 81+3;
}   elseif ($btq == 'Jilid 5' && $btqhal < 10){
    echo 84+0;
}  elseif ($btq == 'Jilid 5' && $btqhal < 20){
   echo 84+1;
}  elseif ($btq == 'Jilid 5' && $btqhal < 30){
   echo 84+2;
}  elseif ($btq == 'Jilid 5' && $btqhal > 30){
    echo 84+3;
}   elseif ($btq == 'Jilid 2' && $btqhal < 10){
    echo 87+0;
}  elseif ($btq == 'Jilid 6' && $btqhal < 20){
   echo 87+1;
}  elseif ($btq == 'Jilid 6' && $btqhal < 30){
   echo 87+2;
}  elseif ($btq == 'Jilid 6' && $btqhal > 30){
    echo 87+3;
}  else { echo 'Al-Quran';}
?></td>
      <td class="xl68"></td>
     </tr>
     <tr height="26" style="mso-height-source:userset;height:19.5pt">
      <td height="26" style="height:19.5pt"></td>
      <td colspan="12" class="xl99">II. MATERI PENUNJANG</td>
      <td class="xl72">&nbsp;</td>
     </tr>
     <tr height="20" style="mso-height-source:userset;height:15.0pt">
      <td height="20" style="height:15.0pt"></td>
      <td class="xl76" style="border-top:none">NO</td>
      <td colspan="6" class="xl76" style="border-left:none">Materi</td>
      <td colspan="3" class="xl92" style="border-left:none">Pencapaian</td>
      <td colspan="2" class="xl92" style="border-left:none">Nilai</td>
      <td class="xl70"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td class="xl76" style="border-top:none">1</td>
      <td colspan="6" class="xl95" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>Tahfidzh</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $surh; ?> Surat</td>
      <td colspan="2" class="xl96" style="border-left:none"><?php echo $bkquran; ?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td class="xl76" style="border-top:none">2</td>
      <td colspan="6" class="xl95" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>Hadist Pilihan</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $hadh; ?> Hadist</td>
      <td colspan="2" class="xl96" style="border-left:none"><?php echo $bkhadits; ?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="24" style="mso-height-source:userset;height:18.0pt">
      <td height="24" style="height:18.0pt"></td>
      <td class="xl76" style="border-top:none">3</td>
      <td colspan="6" class="xl95" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>Do’a Harian</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $doah; ?> Do’a</td>
      <td colspan="2" class="xl96" style="border-left:none"><?php echo $bkdoa; ?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td class="xl76" style="border-top:none">4</td>
      <td colspan="6" class="xl95" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>Praktek Sholat</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $psolat; ?></td>
      <td colspan="2" class="xl96" style="border-left:none"><?php echo $bkpraktek; ?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="24" style="mso-height-source:userset;height:18.0pt">
      <td height="24" style="height:18.0pt"></td>
      <td class="xl76" style="border-top:none">5</td>
      <td colspan="6" class="xl95" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>Diniyah</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $mdiniyah; ?>Materi Aqidah &amp; Fiqih</td>
      <td colspan="2" class="xl96" style="border-left:none"><?php echo $bkdiniyah; ?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="25" style="mso-height-source:userset;height:18.75pt">
      <td height="25" style="height:18.75pt"></td>
      <td class="xl76" style="border-top:none">6</td>
      <td colspan="6" class="xl95" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>Khot</td>
      <td colspan="3" class="xl86" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span><?php echo $mkhot; ?></td>
      <td colspan="2" class="xl96" style="border-left:none"><?php echo $bkhot; ?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="25" style="mso-height-source:userset;height:18.75pt">
      <td height="25" style="height:18.75pt"></td>
      <td colspan="10" class="xl97">Jumlah</td>
      <td colspan="2" class="xl96" style="border-left:none"><?php if($btq == 'Jilid 1' && $btqhal < 10) {
    echo 70+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
} elseif ($btq == 'Jilid 1' && $btqhal < 20){
     echo 70+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 1' && $btqhal < 30){
    echo 70+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 1' && $btqhal > 30){
    echo 70+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 2' && $btqhal < 10){
    echo 74+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 2' && $btqhal < 20){
   echo 74+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 2' && $btqhal < 30){
   echo 74+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 2' && $btqhal > 30){
    echo 74+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}   elseif ($btq == 'Jilid 3' && $btqhal < 10){
    echo 77+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 3' && $btqhal < 20){
   echo 77+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 3' && $btqhal < 30){
   echo 77+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 3' && $btqhal > 30){
    echo 77+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}   elseif ($btq == 'Jilid 4' && $btqhal < 10){
    echo 81+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 4' && $btqhal < 20){
   echo 81+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 4' && $btqhal < 30){
   echo 81+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 4' && $btqhal > 30){
    echo 81+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}   elseif ($btq == 'Jilid 5' && $btqhal < 10){
    echo 84+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 5' && $btqhal < 20){
   echo 84+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 5' && $btqhal < 30){
   echo 84+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 5' && $btqhal > 30){
    echo 84+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}   elseif ($btq == 'Jilid 2' && $btqhal < 10){
    echo 87+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 6' && $btqhal < 20){
   echo 87+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 6' && $btqhal < 30){
   echo 87+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  elseif ($btq == 'Jilid 6' && $btqhal > 30){
    echo 87+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
}  else { echo 'Al-Quran';}
?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="24" style="mso-height-source:userset;height:18.0pt">
      <td height="24" style="height:18.0pt"></td>
      <td colspan="10" class="xl98" width="537" style="width:404pt">Nilai Rata - Rata</td>
      <td colspan="2" class="xl96" style="border-left:none"><?php if($btq == 'Jilid 1' && $btqhal < 10) {
    $total1 = 70+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total1/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
} elseif ($btq == 'Jilid 1' && $btqhal < 20){
     $total2 = 70+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
       $hasil = $total2/7;
       $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 1' && $btqhal < 30){
    $total3 = 70+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total3/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 1' && $btqhal > 30){
    $total4 = 70+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total4/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 2' && $btqhal < 10){
    $total5 = 74+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total5/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 2' && $btqhal < 20){
   $total6 = 74+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total6/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 2' && $btqhal < 30){
   $total7 = 74+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total7/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 2' && $btqhal > 30){
    $total8 = 74+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total8/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}   elseif ($btq == 'Jilid 3' && $btqhal < 10){
    $total9 = 77+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total9/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 3' && $btqhal < 20){
   $total10 = 77+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total10/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 3' && $btqhal < 30){
   $tota11 = 77+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total11/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 3' && $btqhal > 30){
    $total12 = 77+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total12/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}   elseif ($btq == 'Jilid 4' && $btqhal < 10){
    $total13 = 81+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total13/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 4' && $btqhal < 20){
   $total14 = 81+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total14/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 4' && $btqhal < 30){
   $total15 = 81+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total15/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 4' && $btqhal > 30){
    $total16 = 81+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total16/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}   elseif ($btq == 'Jilid 5' && $btqhal < 10){
    $total17 = 84+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total17/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 5' && $btqhal < 20){
   $total18 = 84+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total18/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 5' && $btqhal < 30){
   $total19 = 84+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total19/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 5' && $btqhal > 30){
    $total20 = 84+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total20/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}   elseif ($btq == 'Jilid 2' && $btqhal < 10){
    $total21 = 87+0+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total21/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 6' && $btqhal < 20){
   $total22 = 87+1+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total22/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 6' && $btqhal < 30){
   $total23 = 87+2+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
     $hasil = $total23/7;
     $bakekok=round($hasil,1);
    echo $bakekok;
}  elseif ($btq == 'Jilid 6' && $btqhal > 30){
    $tota24 = 87+3+$bkquran+$bkhadits+$bkdoa+$bkdiniyah+$bkpraktek+$bkhot;
      $hasil = $total24/7;
      $bakekok=round($hasil,1);
    echo $bakekok;
}  else { echo 'Al-Quran';}
?></td>
      <td class="xl70"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="22" style="mso-height-source:userset;height:16.5pt">
      <td height="22" style="height:16.5pt"></td>
      <td colspan="5" rowspan="4" class="xl76">Kepribadian</td>
      <td colspan="4" class="xl87" style="border-left:none">&nbsp;</td>
      <td colspan="3" class="xl92" style="border-left:none">Nilai</td>
      <td class="xl70"></td>
     </tr>
     <tr height="22" style="mso-height-source:userset;height:16.5pt">
      <td height="22" style="height:16.5pt"></td>
      <td colspan="4" class="xl94" style="border-left:none">1. Kelakuan</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $prilaku; ?></td>
      <td class="xl73"></td>
     </tr>
     <tr height="22" style="mso-height-source:userset;height:16.5pt">
      <td height="22" style="height:16.5pt"></td>
      <td colspan="4" class="xl94" style="border-left:none">2. Kerajinan</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $rajin; ?></td>
      <td class="xl73"></td>
     </tr>
     <tr height="24" style="mso-height-source:userset;height:18.0pt">
      <td height="24" style="height:18.0pt"></td>
      <td colspan="4" class="xl94" style="border-left:none">3. Kebersihan</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $bersih; ?></td>
      <td class="xl73"></td>
     </tr>
     <tr height="24" style="mso-height-source:userset;height:18.0pt">
      <td height="24" style="height:18.0pt"></td>
      <td colspan="2" class="xl88">Keterangan<span style="mso-spacerun:yes">&nbsp;&nbsp; </span>:</td>
      <td colspan="2" class="xl90">A = Baik Sekali</td>
      <td colspan="2" class="xl90"><span style="mso-spacerun:yes">&nbsp; </span>B = Baik</td>
      <td colspan="2" class="xl90">C = Cukup<span style="mso-spacerun:yes">&nbsp;</span></td>
      <td colspan="2" class="xl90">D = Kurang Cukup</td>
      <td class="xl67"></td>
      <td class="xl67"></td>
      <td class="xl67"></td>
     </tr>
     <tr height="45" style="height:33.75pt;mso-xlrowspan:3">
      <td height="45" colspan="14" style="height:33.75pt;mso-ignore:colspan"></td>
     </tr>
     <tr height="20" style="height:15.0pt">
      <td height="20" style="height:15.0pt"></td>
      <td colspan="5" rowspan="5" class="xl76">Ketidak Hadiran</td>
      <td colspan="4" class="xl91" style="border-left:none">Absensi</td>
      <td colspan="3" class="xl92" style="border-left:none">Banyaknya</td>
      <td class="xl70"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td colspan="4" class="xl85" style="border-left:none">1. Hadir</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $hadir-$alfa; ?> (Hari)</td>
      <td class="xl73"></td>
     </tr>
     <tr height="22" style="mso-height-source:userset;height:16.5pt">
      <td height="22" style="height:16.5pt"></td>
      <td colspan="4" class="xl85" style="border-left:none">2. Izin</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $izin; ?>  (Hari)</td>
      <td class="xl73"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td colspan="4" class="xl85" style="border-left:none">3. Sakit</td>
      <td colspan="3" class="xl86" style="border-left:none"><?php echo $sakit; ?>  (Hari)</td>
      <td class="xl73"></td>
     </tr>
     <tr height="25" style="mso-height-source:userset;height:18.75pt">
      <td height="25" style="height:18.75pt"></td>
      <td colspan="4" class="xl85" style="border-left:none">4. Alfa</td>
      <td colspan="3" class="xl87" style="border-left:none"><?php echo $alfa; ?>  (Hari)</td>
      <td class="xl68"></td>
     </tr>
     <tr height="16" style="mso-height-source:userset;height:12.0pt">
      <td height="16" style="height:12.0pt"></td>
      <td colspan="12" rowspan="4" class="xl82">Catatan untuk diperhatikan Orang Tua/
      Wali Santri<span style="mso-spacerun:yes">&nbsp; </span>: <?php echo $catatan; ?> </td>
      <td class="xl75"></td>
     </tr>
     <tr height="16" style="mso-height-source:userset;height:12.0pt">
      <td height="16" style="height:12.0pt"></td>
      <td class="xl75"></td>
     </tr>
     <tr height="16" style="mso-height-source:userset;height:12.0pt">
      <td height="16" style="height:12.0pt"></td>
      <td class="xl75"></td>
     </tr>
     <tr height="16" style="mso-height-source:userset;height:12.0pt">
      <td height="16" style="height:12.0pt"></td>
      <td class="xl75"></td>
     </tr>
     <tr height="6" style="mso-height-source:userset;height:4.5pt">
      <td height="6" style="height:4.5pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="23" style="mso-height-source:userset;height:17.25pt">
      <td height="23" style="height:17.25pt"></td>
      <td colspan="12" class="xl83">Dengan melihat hasil nilai yang ada Ananda
      mendapatkan peringkat ke: ……… Dari ………. Peserta</td>
      <td class="xl73"></td>
     </tr>
     <tr height="12" style="mso-height-source:userset;height:9.0pt">
      <td height="12" style="height:9.0pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td colspan="3" class="xl77">Diberikan di<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</td>
      <td colspan="3" rowspan="2" class="xl84"><?php echo $pembagian; ?> </td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="6" style="mso-height-source:userset;height:4.5pt">
      <td height="6" style="height:4.5pt"></td>
      <td class="xl77"></td>
      <td class="xl78"></td>
      <td class="xl78"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td colspan="3" class="xl77">Tanggal<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>:</td>
      <td colspan="3" class="xl84"><?php echo $tglpemb; ?> </td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="12" style="mso-height-source:userset;height:9.0pt">
      <td height="12" style="height:9.0pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl73"></td>
      <td class="xl74"></td>
      <td class="xl74"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td colspan="3" class="xl81">Mengetahui,</td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="15" style="mso-height-source:userset;height:11.25pt">
      <td height="15" style="height:11.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td colspan="3" class="xl80">Kordinator Qur’an<span style="mso-spacerun:yes">&nbsp;</span></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td colspan="3" class="xl80">Wali Kelas</td>
      <td class="xl68"></td>
     </tr>
     <tr height="21" style="mso-height-source:userset;height:15.75pt">
      <td height="21" style="height:15.75pt"></td>
      <td class="xl68"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td colspan="3" class="xl80">Orang Tua/Wali</td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="27" style="mso-height-source:userset;height:20.25pt">
      <td height="27" style="height:20.25pt"></td>
      <td class="xl68"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td colspan="3" class="xl80">(<?php echo $kord; ?>)</td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td colspan="3" class="xl80">(<?php echo $wali; ?>)</td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td class="xl69"></td>
      <td colspan="3" class="xl80">(…………………..)</td>
      <td class="xl69"></td>
      <td colspan="3" style="mso-ignore:colspan"></td>
      <td class="xl68"></td>
     </tr>
     <tr height="19" style="height:14.25pt">
      <td height="19" style="height:14.25pt"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
      <td class="xl68"></td>
     </tr>
     <!--[if supportMisalignedColumns]-->
     <tr height="0" style="display:none">
      <td width="25" style="width:19pt"></td>
      <td width="41" style="width:31pt"></td>
      <td width="69" style="width:52pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="42" style="width:32pt"></td>
      <td width="57" style="width:43pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="32" style="width:24pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="49" style="width:37pt"></td>
      <td width="79" style="width:59pt"></td>
      <td width="56" style="width:42pt"></td>
      <td width="61" style="width:46pt"></td>
      <td width="12" style="width:9pt"></td>
     </tr>
     <!--[endif]-->
    </tbody></table>
    
	</div>
  </div></body>
<?php
include("conf/access.php");
include("conf/head.php");
$dil = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
$gelen1 = $_GET['id'];
$sorgu=$db->prepare("SELECT * from icerik  WHERE id = '{$gelen1}'");
$sorgu->execute();
$verial = $sorgu->fetch(PDO::FETCH_ASSOC);
$gelen2 =  $verial['id'];
if(!isset($_GET['id'])){
  echo"<script>alert('Sunucu Hatası 503')</script>";
  header("Refresh:1; url=index.php");
}
?>
<div class="container">
    <center><b><h2><?php 
     
     switch ($dil) {
         case 'tr':
             print $verial['tr_baslik'];
             break;

         case 'en':
            print $verial['en_baslik'];    
         
         default:
         print $verial['tr_icerik'];
             break;
     }
    
    
    
    ?></h2></b></center>
    <hr>
    <img style="max-height: 400px" src="admin/<?php echo $verial['gorsel'];?>" class="img-fluid" alt="...">
    <hr>
    <div id="aciklama" >
    <?php 
     
     switch ($dil) {
         case 'tr':
             print $verial['tr_icerik'];
             break;

         case 'en':
            print $verial['en_icerik'];    
         
         default:
         print $verial['en_icerik'];
             break;
     }
    
    
    
    ?>
    </div>
    <hr>
    <center><b><h2>

<?php
if ($dil == "tr") {
    echo "Dinle";
}
elseif ($dil == "en") {
    echo "Listen";
}
else {
    echo "Listen";
}

?>

    </h2></b></center>
    <audio controls>
  <source src="admin/<?php echo $verial['ses'];?>" type="audio/mpeg" />
  Browser Error
  </audio>
  <hr>
  <center><b><h2>Google Maps</h2></b>
  <iframe src="<?php  echo  $verial['maps_api'];?>" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<hr>
<img src="http://hedefte.online/logo.png" alt="" width="auto" height="auto">    
</center>

</div>

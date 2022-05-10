<?php
include("../conf/access.php");
session_start();
ob_start();
if(!isset($_SESSION["login"])){
header("Location:index.php");
}
if(isset($_POST['basket'])){
    if($_FILES['resim']['size']<2048*2048){
    
        if($_FILES['resim']['type']=="image/jpeg"){
            $tr_baslik = htmlspecialchars($_POST['tr_baslik']);
            $en_baslik = htmlspecialchars($_POST['en_baslik']);
            $tr_icerik = $_POST['tr_icerik'];
            $en_icerik = $_POST['en_icerik'];
            $googleapi = $_POST['url'];
            $dosya_adi = $_FILES['resim']['name']; 
            $ses_adi = $_FILES['ses']['name'];
            $sesuret = array("ab","cd","fg","zx","yp");
            $uret=array("cv","fg","th","lu","er");
            $uzanti=substr($dosya_adi,-4,4);
            $sesuzanti = substr($ses_adi,-4,4);
            $sayi_tut=rand(1,10000);
            $yeni_ad="img/".$uret[rand(0,4)].$sayi_tut.$uzanti;
            $yeni_ses = "audio/".$sesuret[rand(0,4)].$sayi_tut.$sesuzanti;
            if(move_uploaded_file($_FILES['resim']['tmp_name'],$yeni_ad) && move_uploaded_file($_FILES['ses']['tmp_name'],$yeni_ses) ){
                echo "<script>alert('Dosya Yüklendi.');</script>";
                $sorgu = $db->prepare("INSERT INTO icerik SET 
                  tr_baslik=:tr_baslik,
                  en_baslik=:en_baslik,
                  tr_icerik=:tr_icerik,
                  en_icerik=:en_icerik,
                  maps_api=:maps_api,
                  ses=:ses,
                  gorsel=:gorsel
                 ");
                 $sorgu->execute(array(
                'tr_baslik'=> $tr_baslik,
                 'en_baslik'=>$en_baslik,
                 'tr_icerik'=> $tr_icerik,
                'en_icerik'=> $en_icerik,
                'maps_api'=>$googleapi,
                'ses'=>$yeni_ses,
                'gorsel'=> $yeni_ad

                 ));
                print "İslem tamamlandi.";
     
            }    
        }
        else{
            echo "<script>alert('Dosyanın uzantısı .jpeg olmalıdır.');</script>";
          //  header("Location:kitap-ekle.php");
         }
        }
    else{
        echo "<script>alert('Dosyanızın boyutu çok büyük.');</script>";
       // header("Location:kitap-ekle.php");
     }
    }
    
    
    


?>
<?php
// ob_start();
// session_start(); 
// if(!isset($_SESSION["login"])){
//     header("Location:index.php");
// }
include "../conf/head.php";
?>

    <div class="container">

    <center><b><h2>Yeni İçerik Ekle</h2></b></center>
    
 <form action="add.php" name="basket" enctype="multipart/form-data" method="post">
 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Türkçe Başlık</label>
  <input type="text" class="form-control" name="tr_baslik" id="exampleFormControlInput1" required >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">İngilizce Başlık</label>
  <input type="text" class="form-control" name="en_baslik" id="exampleFormControlInput1" required >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Türkçe İçerik</label>
  <textarea class="form-control" name="tr_icerik" id="exampleFormControlTextarea1" rows="3" maxlength="7000" required></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">İngilizce İçerik</label>
  <textarea class="form-control" name="en_icerik" id="exampleFormControlTextarea1" rows="3" maxlength="7000" required></textarea>
</div> 
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Google Maps API Anahtarı</label>
  <input type="url" class="form-control" name="url" >
</div> 
<div class="mb-3">
  <label for="formFile" class="form-label">Görsel</label>
  <input class="form-control" accept=".jpeg*" name="resim" type="file" required id="formFile">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Görsel</label>
  <input class="form-control" accept=".mp3*" name="ses" type="file" required id="formFile">
</div>
<button type="submit" name="basket" class="btn btn-outline-dark">Gönder</button>
 </form>
    </div>
</body>
</html>

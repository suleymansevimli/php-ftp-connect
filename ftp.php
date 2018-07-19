<?php
$server = $_POST['ftp_sunucu'];
$user = $_POST['ftp_kadi'];
$sifre = $_POST['ftp_sifre'];
$dosya_yolu = $_POST['ftp_yolu'];
$gecici_Dosya = $_FILES['dosya']['tmp_name'];
// dosya uzantısı explode metdou ile de alınabilir..
$dosya_uzantisi = substr($_FILES['dosya']['name'],-4);
// explode ile alımı şu şekilde
/*
  // -> noktadan ayırarak string gelen ifadeyi diziye çeviririz.
  $file  = explode(".",$_FILES['dosya']['name']);
  // -> ilk ifademiz dosya adi ikincisi ise uzantıyı bize çevirecektir.
  $file_name = $file['1'];
  echo $file_name;
*/
$dosya_adi = rand(1,999).$dosya_uzantisi;
// ftp bağlantısını açıyoruz
$connect = ftp_connect($server);
if ($connect) {
  //echo "bağlandık";
    //ftp ye giriş yapmak için bağlantımızı oluşturuyoruz
    $login = ftp_login($connect,$user,$sifre);
    if ($login) {
        //Dosyaları Ftp server'a atalım
        $yukle= ftp_put($connect,$dosya_yolu."/".$dosya_adi,$gecici_Dosya,FTP_BINARY);
        if ($yukle) {
          echo $dosya_adi."adlı dosyanız ftpye yuklendi";
        }else{
          echo "ftp'ye yüklenirken bir hata oluştu";
        }
    }else{
      echo "login işlemi başarısız oldu";
    }
}else{
  echo "ftp sunucusuna bağlanırken bir hata oluştu";
}
?>

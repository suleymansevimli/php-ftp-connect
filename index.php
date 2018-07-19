<!-- Login için formumuzu oluşturuyoruz -->
<style media="screen">

  table{
    align: center;
    border:5px dotted red;
    margin-top: 35px;
    text-align: center;
  }

</style>
<form action="ftp.php" method="post" enctype="multipart/form-data" >
      <table cellpadding="5" cellspacing="5" align="center"border="1px">

        <tr>
          <td>Ftp Server</td>
          <td> <input type="text" name="ftp_sunucu" value=""> </td>
        </tr>

        <tr>
          <td>Ftp Kullanici Adi</td>
          <td><input type="text" name="ftp_kadi" value=""> </td>
        </tr>

        <tr>
          <td>Ftp Şifre</td>
          <td> <input type="password" name="ftp_sifre" value=""> </td>
        </tr>

        <tr>
          <td>Ftp Yolu</td>
          <td><input type="text" name="ftp_yolu" value=""></td>
        </tr>

        <tr>
          <td>Dosya Seçin</td>
          <td><input type="file" name="dosya" value=""> </td>
        </tr>

        <tr>
            <td></td>
            <td> <input type="submit" name="" value="Ftp'ye Yükle"> </td>
        </tr>

      </table>
</form>

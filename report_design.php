<?php
include "CONNECT.php";
include "queryinput.php";
header("Content-Type: text/html; charset=utf-8");

/*#0083ca*/
/* dosyanın png olması gerekiyor icon için */
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<link rel="shortcut icon" href="technopc-Kopya.ico" type="image/x-icon"/> 
<meta charset="utf-8" http-equiv='Content-Type' content='text/html; width=device-width, initial-scale=1'>

  <title>PDKS Portal</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet2" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="post"  accept-charset="UTF-8">
<div class="container-fluid">
  <div class="row">
   <div class="col-md-4"><center><img src="technopc.png" alt="logo" width="150" ></center></div>
     <center><h1>PDKS PORTAL</h1></center>
  </div>
  <div class="row">
   <div class="col-md-4"><center><p>Arama yapmak istediğiniz personeli seçiniz.</p></center></div>
  </div>
  <div class="row">
   <div class="col-md-4"><center><select name="ad_soyad_liste",id="agent"></div>
<?php foreach ($stmt as $row) {
    echo '<option value="' .
        htmlspecialchars(
            $row["Adi"] . "\n" . $row["Soyadi"],
            ENT_QUOTES,
            "utf-8",
            true
        ) .
        '">';
    echo htmlspecialchars(
        $row["Adi"] . "\n" . $row["Soyadi"],
        ENT_QUOTES,
        "utf-8",
        true
    ); // The text to be displayed to the user
    echo "</option>";
} ?>
 </select></center> 
 
 <div class="row">
<center><label for="input_date">Görüntülemek istediğiniz tarih aralığını seçiniz.</label></center>
  </div>
  <div class="row">
  <div class="col-md-6"><center><input type="date" id="input_date" name="input_date"></div>
 <div class="col-md-6"><center><input type="date" id="input_date2" name="input_date2"></div>

<center><input type=submit value="ARA" name="submit_button"/></center></div>

<center><table style="width:75%">
  <tr>
	<th>Tarih</th>
    <th>Ad</th>
    <th>Soyad</th> 
    <th>Giriş saati</th>
	<th>Çıkış saati</th>
  </tr>
</center>  
<?php if (isset($_POST["submit_button"])) {
    foreach ($search_by_name_surname2 as $row2) {
        echo "<tr>";
        echo "<td>" . $row2["Tarih"] . "</td>";
        echo "<td>" . $row2["Adi"] . "</td>";
        echo "<td>" . $row2["Soyadi"] . "</td>";
        echo "<td>" . $row2["GirisSaat"] . "</td>";
        echo "<td>" . $row2["CikisSaat"] . "</td>";
        echo "</tr>";
    };
}
/* aynısının tarih bilgisi verİLİNCE O idden tarih,ad,syoad,giris ve cikis saati cekilecek*/
?>
</div>
</table>
</form>
</body>
</html>

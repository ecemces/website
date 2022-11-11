<!DOCTYPE html>
<?php
include("CONNECT.php");
include("queryinput.php");
header('Content-Type: text/html; charset=utf-8');
/*#0083ca*/
/* dosyanın png olması gerekiyor icon için */
?>
<html lang="tr">
<link rel="shortcut icon" href="technopc-Kopya.ico" type="image/x-icon"/> 
<head>
<meta charset="utf-8" http-equiv='Content-Type' content='text/html; width=device-width, initial-scale=1'>
<form action="" method="post"  accept-charset="UTF-8">
<style>
table, th, td {
  border: 1px ;
;
}
tr:nth-child(even) {background-color: #cce0f0;}
input 
{
  background-color: initial;
  background-image: linear-gradient(-180deg, #0083ca, #0483cc);
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Times New Roman;
  height: 38px;
  margin-left:22px;
  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  white-space: nowrap;
  width: 10
  z-index: 9;
  border: 0;
  margin-top:10px;
}

label{
margin-top:22px;
margin-bottom:22px;
}

input:hover{ 
transform: scale(1.05);
}

img {margin-top:10px;
}
select{  background-color: #0083ca;
  color: white;
  padding: 12px;
  border: none;
  font-size: 12px;
  -webkit-appearance: button;
  appearance: button;
  outline: none;
  font-family: Times New Roman;
  margin-bottom:10px;
}
</style>
  <title>PDKS Portal</title>
</head>
<body>
<center><img src="technopc.png" alt="logo" width="150" ></center>
<center><h1>PDKS PORTAL</h1></center>
<center><p>Arama yapmak istediğiniz personeli seçiniz.</p></center>
 <div class="grid-container"><div class="grid-item">
<center><select name="ad_soyad_liste",id="agent">
<?php
foreach ($stmt as $row)
{
	echo '<option value="'.htmlspecialchars($row['Adi']."\n".$row["Soyadi"],ENT_QUOTES,'utf-8',true).'">';
    echo htmlspecialchars($row['Adi']."\n".$row["Soyadi"],ENT_QUOTES,'utf-8',true); // The text to be displayed to the user
    echo '</option>';
}
?>
 </select></center> </div>
</div>
<center><label for="input_date">Görüntülemek istediğiniz tarih aralığını seçiniz.</label></center>
<center><input type="date" id="input_date" name="input_date"></center>
<div class="grid-item">
<center><input type="date" id="input_date2" name="input_date2"></center>
<div class="grid-item">
<center><input type=submit value="ARA" name="submit_button"/></center>
 </div>
<center><table style="width:75%">
  <tr>
	<th>Tarih</th>
    <th>Ad</th>
    <th>Soyad</th> 
    <th>Giriş saati</th>
	<th>Çıkış saati</th>
  </tr>
</center>  
<?php
if(isset($_POST['submit_button']))
	foreach ($search_by_name_surname2 as $row2)
	{
	echo "<tr>";
	echo "<td>" . $row2['Tarih'] . "</td>";
    echo "<td>" . $row2['Adi']."</td>";
	echo "<td>" . $row2['Soyadi'] . "</td>";
	echo "<td>" . $row2['GirisSaat'] . "</td>";
	echo "<td>" . $row2['CikisSaat'] . "</td>";
    echo "</tr>";
	}
	/* aynısının tarih bilgisi verİLİNCE O idden tarih,ad,syoad,giris ve cikis saati cekilecek*/
?>
</table>
</form>
</body>
</html>
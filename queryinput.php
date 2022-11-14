
<?php
header('Content-Type: text/html; charset=utf-8');
include("CONNECT.php");
$stmt = $conn->query("SELECT ID,Adi,Soyadi FROM personel");
if(isset($_POST['submit_button']))
{
$f=$_POST["ad_soyad_liste"];
$date_given=$_POST["input_date"];
$date_given2=$_POST["input_date2"];
$split_f=explode("\n",$f);
$personel_name_string=trim($split_f[0]);
$personel_surname=$split_f[count($split_f)-1];

;
$search_by_name_surname2=$conn->query("SELECT hareketler.Tarih,personel.ID,hareketler.PersonelID,personel.Adi,personel.Soyadi, hareketler.GirisSaat,hareketler.CikisSaat from personel inner join hareketler on hareketler.PersonelID=personel.ID WHERE personel.Adi='$personel_name_string' and personel.Soyadi='$personel_surname' and ( Tarih >='$date_given' and Tarih <='$date_given2')");
} 
?>

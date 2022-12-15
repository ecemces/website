<?php


header("Content-Type: text/html; charset=utf-8");
/*#0083ca*/
/* dosyanın png olması gerekiyor icon için */
?>

<html>
<style>

.datatable-header {
    min-width: 100%;
}

.datatable-body {
    min-width: 100%;
}
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */

input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
 
  width: 150px;
}

#content input {
	position: absolute;
	top: 20px;
	right: 20px;
}
input_date{
display:inline;

}

.container3 div {
  display: inline-block;
  position:relative;
}
position_relativex{
	position:absolute;
	left:0;
}
positionrelativex2{
	position:absolute;
	right:0;
}
</style>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="sb-admin-2.css">
  <link rel="stylesheet2" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8" http-equiv='Content-Type' content='text/html; width=device-width, initial-scale=1'>
   
 
 </div>
<head>
  <link rel="stylesheet" href="sb-admin-2.css">
  <title>PDKS Portal</title>
</head>
<body class="bg-gradient-primary">
<form action="" method="post" name="Login_Form">
 

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
<div id="content" style="margin-top:20px;margin-bottom:20px;margin-right:20px;" ><input onclick="location.href='logout.php'" type="button" class="btn btn-light" value="ÇIKIŞ" name="cikis_button" /></div>
            <div class="col-xl-12 col-lg-10 col-md-10 col-sm-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
				
                    <div class="card-body p-8">
					
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-2">
                                    <div class="text-center">
									 
                                        <img src="technopc-removebg-preview.png" width="171" height="73" />
									<h1 style="color:#0183cc; font-family:"Roboto;"><strong>PDKS PORTAL<strong></h1><!-- çirkin duruyor -->
                                    </div>
                                    <form class="user">
                                        <div class="form-s">
                                            <center><p>&nbsp;Arama yapmak istediğiniz personeli seçiniz.</p></center>
                                        </div>

                                        <div ></div>
                                            <center><select class="form-select col-md-4" aria-label="Default select example" name""ad_soyad_liste" id="agent">
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
							</div>
							<div>
							<center><p>Görüntülemek istediğiniz tarih aralığını seçiniz.</p></center></div>
							<div>




<div class="container3"><center>
<div id="input_date" class=" position-relativex" style="display: inline-block; margin-top: 20px; margin-bottom: 20px;"><input id="input_date" name="input_date" type="date" />&nbsp; &nbsp;&nbsp;<input id="input_date2" name="input_date2" type="date" /></div>
</center></div>


<center><div style="margin-top:10px;margin-bottom:20px;"><input type="submit" class="btn btn-primary " value="ARA" name="submit_button"/></div></center>
<div class="table-responsive">
 <center><table cellspacing="0" class="table table-bordered" style="width:100%">
 <thead>
  <tr>
	<th>Tarih</th>
    <th>Ad</th>
    <th>Soyad</th> 
    <th>Giriş saati</th>
	<th>Çıkış saati</th>

  </tr>
 </thead>
 <tbody>
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
?>
</tbody>
</center> 
 </div>
 </div>
							</div>									
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
</div>
</table>
</form>
</body>
</html>

<!DOCTYPE html>
<?php session_start(); /* Starts the session */
        /* Check Login form submitted */  
		/* kullanıcı ekleme yok,henüz kullancıılar veri tabanında değil */  

        if(isset($_POST['Submit'])){
				$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
				$Username = isset($_POST['Username']) ? $_POST['Username'] : '';   
				$logins = array('ecem' => '$2y$10$haQ2BPqJG3oYEgTFCvU0Yuc6DFn4.geYTEm7DxakfGLvxyhK17xQa','username1' => '$2y$10$z6Ra9zkkIo6kAbCgGummteeu9Mj/vcigdnPyTrHZ8blMykD/i75me','username2' => '$2y$10$dIJz6BFhos0A0faf9zgOpei47bSzt5gnDE4VYSTOWh2BoBFlcevQi');
				
				$verify = password_verify($Password, $logins[$Username]);
                /* Define username and associated password array */
                
                /* Check and assign submitted Username and Password to new variable */
                       
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $verify){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:bs_deneme.php");
                        exit;
                } 
				else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Kullanıcı adı veya şifre yanlış.</span>";	
                }
        }
?>
<html>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<head>
  <link rel="stylesheet" href="sb-admin-2.css">
  <title>PDKS Portal</title>
</head>
<body class="bg-gradient-primary">
<form action="" method="post" name="Login_Form">
 

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-5 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-2">
                                    <div class="text-center">
									 
                                        <img src="technopc-removebg-preview.png" width="171" height="73" />
									<h1 style="color:#0183cc; font-family:"Roboto;"><strong>PDKS PORTAL<strong></h1><!-- çirkin duruyor -->
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input name="Username" type="text" class="form-control form-control-user"
                                                placeholder="Kullanıcı adı">
                                        </div>
                                        <div class="form-group">
                                            <input name="Password" type="password" class="form-control form-control-user"
                                                 placeholder="Şifre">
                                        </div>										
    <?php if(isset($msg))
	echo $msg; ?>
										<td><input name="Submit" type="submit" value="Giriş yap" class="btn btn-primary btn-user btn-block"></td>
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

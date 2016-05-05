<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login | AppsDataDiri</title>


        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="bootstrap/css/animate.css" rel="stylesheet">
            <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4">
                    <h1 style="animation-delay: 1s;" class="title-apps animated fadeInDown">Masukan NIM</h1>
                           
<!--
<form method="post" action ="proses_login.php">
 Username : <input type="text" name="username" size="40" /> <br />
 Password : <input type="password" name="password" size="40" /><br />
 <input type="submit" value="Login">
 </form>
-->
                               
                            <form name="frmLogin" action="proses_login.php" method="POST"  class="form-horizontal" role="form">
                                <div class="form-group has-feedback animated bounceInLeft" style="animation-delay: 1s;">
                                    <input type="text" name="nim" id="nim" class="form-control" placeholder="nim"/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <div class="form-group animated bounceInDown" style="animation-delay: 2s;">
                                     <div class="col-sm-4 ">
                                    <a href="daftar.php" class="btn btn-success " >  Register <span class="fa fa-key"></span></a>
                                    </div>
                                       <div class="col-sm-4 col-sm-offset-4">
                                       <button type="submit" class="btn btn-primary btn-block"> Login  <i class="fa fa-key"></i></button>
                                        
                                    </div>
                                   
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <!-- jQuery -->
            <script src="bootstrap/js/jquery-2.1.3.min.js"></script>
            <!-- Bootstrap JavaScript -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
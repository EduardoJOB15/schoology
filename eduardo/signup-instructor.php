<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup to Schoology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css" />
    <link rel="shortcut icon" href="img/favicon.ico">
    
</head>
<body style="background-colo:#F9F9F8">
    <nav class="navbar navbar-expand-md fixed-top" style="background:#44505D">
        <a class="navbar-brand" href="#"><img src="img/Schoology_logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

    <div class="container" style="margin-left: 60px">
      <form id=form-login class="border" style="padding-top: 20px;padding-left:20px;background-color: rgb(255, 255, 255)">
        <p><strong>Sign up for Schoology</strong></p>
        <input class="caja-texto" type="text" id="nombre1" style="margin-top: 10px;width: 92%" placeholder="First Name"><br>
        <input class="caja-texto" type="text" id="apellido" style="margin-top: 10px;width: 92%;margin-top: 10px" placeholder="Last Name"><br>
        <input class="caja-texto" type="text" id="email" style="margin-top: 10px;width: 92%" placeholder="Email"><br>
        <input class="caja-texto" type="password" id="password" style="margin-top: 10px;width: 92%;margin-top: 10px" placeholder="Password"><br>
        <input class="caja-texto" type="text" id="cod-escuela" style="margin-top: 10px;width: 92%;margin-top: 10px" placeholder="School Code"><br>
        <div class="row">
          <button type="button" id="btn-guarar" style="margin-top: 10px;background-color: #3EA1C1;margin-bottom: 20px;margin-left: 15px"><a><span style="color:white">Register</span></a></button>
          <!--src="home.html"-->
          <!--ponerle un id a la ancla-->
          
        </div>
      
      </div>
    <div style="margin-top: 65px">
      <div style="background-color:#EEEEEE;width: 100%;height: 199px;">
          <p style="color: #EEEEEE">p</p>
          <p style="color: #556370;font-size: 13px;margin-left: 200px">Schoology © 2019 · Privacy Policy · Terms of Use · Help Center</p>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/signup-instructor-controlador.js"></script>
</body>
</html>
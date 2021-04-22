
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<meta name="format-detection" content="telephone=no"/>
<style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">	
<style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
<style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
<style type="text/css">.gm-style { font: 400 11px Roboto, Arial, sans-serif;text-decoration: none; }.gm-style img { max-width: none; }</style>

<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Ferretería Los Robles</title>
 <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
 <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

<link href="css/bootstrap.css" rel="stylesheet">
 
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="https://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
<script src='js/device.min.js'></script>




<style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>

</head>
<body>
<?php
if(isset($_POST['email'])) {
 
    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
 
    $email_to = "ventas@ferreteriaelroble.cl";
 
    $email_subject = "Asunto de Mensaje";   

 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    
    $name = $_POST['name']; // requerido
 
    $email_from = $_POST['email']; // requerido
 
    $asunto = $_POST['asunto1']; // no requerido 

    $message = $_POST['message']; // requerido

//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $name . "\n";
$email_message .= "Correo: " . $email_from . "\n";
$email_message .= "Mensaje: " . $message . "\n\n";
  
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="tel:+56996792590"><i class="fa fa-phone"></i> +56 9 4886 8744</a></li>
                    <li><a href="mailto:contacto@ferreteriaelroble.cl"><i class="fa fa-envelope-o"></i> contacto@ferreteriaelroble.cl</a></li>
                </ul>
               
            </div>
        </div>
    </section> <!--Top Strip-->
<div class="page">
 
<header>
<div class="container top-sect">


<div class="help-box text-left">
<img src="logo.png" width="25%" class="margenlogo">
<div class="help-box text-right">
<p>Necesitas ayuda?</p>
<a href="callto:+56996792590">+56 9 4886 8744</a>
<small><span>Horario de Atención:</span> Lunes a Viernes - 8:00 Hrs a 18:00 Hrs</small>
</div>
</div>
</div>




<div id="stuck_container" class="stuck_container">
<div class="container">
<nav class="navbar navbar-default navbar-static-top pull-left">
<div class="">
<ul class="nav navbar-nav sf-menu" data-type="navbar">
<li class="active">
<a href="index.html">Ir a Inicio</a>
</li>




</ul>
</div>
</nav>
</div>
</div>
</header>
 
<main>
<section class="well well1 bg1">
<center>
<h3>Mensaje Enviado</h3><br>
<h4>Te responderemos a la brevedad</h4>
</center>
</section>
</main>
 
<footer class="top-border">
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3269.743719812679!2d-71.22890381614684!3d-34.96303154491662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19ce3c9897521ed5!2sFerreteria+El+Roble!5e0!3m2!1ses-419!2scl!4v1492560347233" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</section>
</footer>
</div>
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
 <script src="js/jquery.cookie.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/tmstickup.js"></script>
 <script src="js/jquery.ui.totop.js"></script>
 <script src="js/jquery.mousewheel.min.js"></script>
 <script src="js/jquery.simplr.smoothscroll.min.js"></script>
 <script src="js/superfish.js"></script>

 <script src="js/wow.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
 <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58f83e8d3cd6a197"></script> 
</body>
</html>

<?php
 
}
 
?>
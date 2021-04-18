<?php 
include_once('Connection.php');
include_once('Site.php');

	$category = $_GET['categoria'];
    $place = new Site;
    $places = $place -> fetch_by_category($category);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Links de fuentes-->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <!--Link hoja de estilos y boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/estiloscategorias.css">
    <script src="https://kit.fontawesome.com/0f0951e71c.js" crossorigin="anonymous"></script>
    <title><?php echo $category; ?></title>
</head>

<header class=" d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <a href="iniciocategorias.html"><img class="imagenlogo" src="images/LogoApp.png" alt="logo" width="168px" height="50px"></a>
   
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="iniciocategorias.html" class="nav-link">Categorias</a></li>
            <li class="nav-item"><a href="Profile.php" class="nav-link">Perfil</a></li>
            <li class="nav-item"><a href="Logout.php" class="nav-link">Cerrar Sesión</a></li>
        </ul>
    </nav>
   
</header>
<body>
        <div class="main">
            <div class="col-sm-12 text-center mi_main">
                <img class="image1 img-fluid" src="data:image/jpg;base64, <?php echo base64_encode($places['1']['Foto2']); ?>">
                <div class="centered">
                    <h2><?php echo $category; ?></h2>
                </div>
            </div>
            <div class="line">
                <hr>
            </div>
        
            <div class="contenedor1">
                <div class="row justify-content-md-center">
                    <?php foreach ($places as $place){ ?>
                        <div class="col">
                            <div class="content_hover ">
                                <div class="box">
                                    <img class="place1"  src="data:image/jpg;base64, <?php echo base64_encode($place['Foto1']); ?>">
                                    <h4><?php echo $place['Nombre']; ?></h4> 
                                </div>
                            
                                <div class="overlay">
                                    <a href="PlaceTemplate.php?place=<?php echo $place['Nombre']; ?>"  class="nav-link"> 
                                        <p><?php echo  strstr($place['Datos'], '.', true); ?></p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    <?php } ?>
            	</div>
        	</div>
        </div>
</body>

<footer class="text-center text-lg-start ">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 parrafo">
                <h3>Información de la Compañia</h3>
                <p>Somos una empresa que se preocupa
                    por el turismo local y se encarga de
                    difundirlo de manera dinámica haciendo
                    uso de medios tecnológicos y modernos.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 iconos">
                <section class="mb-4">
                   
                    <a href="https://www.facebook.com/" class="btn btn-link btn-floating btn-lg text-white m-1 fa-2x" role="button"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/" class="btn btn-link btn-floating btn-lg text-white m-1 fa-2x" role="button" ><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" class="btn btn-link btn-floating btn-lg text-white m-1 fa-2x" role="button"><i class="fab fa-instagram"></i></a>   
                   
                </section>
                
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 contactanos">
                <h3>Contáctanos</h3>
                
                <div class="col-md12 well">
                    <div class="col-md-3">
                        <img class="logowa" src="images/logo_whatsapp.png" alt="icon1" >
                    </div>
                    <div class="col-md-6 info2">
                        <p >+57 311 2233 445</p>
                    </div>
                </div>
                <div class="col-md12 well">
                    <div class="col-md-3">
                        <img class="logowa" src="images/logo_email.png" alt="icon2">
                    </div>
                    <div class="col-md-6 info2">
                        <p>contacto@bogotr.com </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="text-center p-3 copyright">
        <p>Copyright - BogoTravel 2021</p>
    </div>
</footer>

</html>
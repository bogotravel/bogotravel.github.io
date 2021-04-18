<?php
include_once('Connection.php');

$_place = $_GET['place'];
$sql="SELECT * from sitio WHERE Nombre = '$_place'";

foreach ($pdo->query($sql) as $row) {

    $_Sitio = array
    (
     "Titulo"=> $row['Nombre'],
     "Descripcion"=>  $row['Descripcion'] ,
     "Direccion"=>  $row['Direccion'],
     "Foto1"=>  $row['Foto1'],
     "Foto2"=>  $row['Foto2'],
     "Foto3"=>  $row['Foto3'],
     "enlMapa"=> $row['enlMapa']
    );   
}
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
    <link rel="stylesheet" href="Estilos/estiloslugares.css">

    <script src="https://kit.fontawesome.com/0f0951e71c.js" crossorigin="anonymous"></script>
    <title>Lugar Turistico</title>
</head>


<header class=" d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <img class="imagenlogo" src="images/LogoApp.png" alt="logo" width="168px" height="50px">

    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="iniciocategorias.html" class="nav-link">Categoria</a></li>
            <li class="nav-item"><a href="PerfilUsuario.html" class="nav-link">Perfil</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Cerrar Sesión</a></li>
        </ul>
    </nav>

</header>

<body>


    

    <div class="main">

         <div class="col-sm-12 text-center parrafos">        
         <span> <b><h1> <?php echo $_Sitio['Titulo']; ?> </h1> </b></span>
        </div>

        <div class="col-sm-12 text-center mi_main">        
             <img class="img-fluid" src="data:image/jpg;base64, <?php echo base64_encode($_Sitio["Foto1"]); ?>" >
        </div>
        <div class="line">
            <hr>
        </div>

        <div class="contenedor1">
            <div class="row">
                <div class="col part1 d-flex flex-column">
                    <div class="image1">
                    <img class="place1" src="data:image/jpg;base64, <?php echo base64_encode($_Sitio["Foto2"]); ?>" >
                    </div>
                    <div class="image1">
                    <img class="place1" src="data:image/jpg;base64, <?php echo base64_encode($_Sitio["Foto3"]); ?>" >
                    </div>
                </div>

                <div class="col parrafos">
                    <p>
                        <span>  <?php echo $_Sitio['Descripcion']; ?></span>
                    </p>
                    <div>
                        <h2>Ubicación:</h2>

                        <span>  <?php echo $_Sitio['Direccion']; ?></span>

                    </div>
                    <div class="section_mapa">
                    <h2>Geolocalización </h2>
                    <span>  <?php echo $_Sitio['enlMapa']; ?></span>
                    </div> 
                    <div>

                </div>
            </div>
        </div>
    <div class="seccion_bajo">
                    
                        <!--SECCION DE COMENTARIOS-->
                        <div id="disqus_thread"></div>
                            <script>
                                /**
                                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://https-bogotravel-netlify-app.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
        </div>             
    </div>



</body>
<footer class="text-center text-lg-start ">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 parrafo">
                <h3>Información de la Compañia</h3>
                <p>Somos una empresa que se preocupa por el turismo local y se encarga de difundirlo de manera dinámica haciendo uso de medios tecnológicos y modernos.</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 iconos">
                <section class="mb-4">

                    <a href="https://www.facebook.com/" class="btn btn-link btn-floating btn-lg text-white m-1 fa-2x" role="button"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/" class="btn btn-link btn-floating btn-lg text-white m-1 fa-2x" role="button"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" class="btn btn-link btn-floating btn-lg text-white m-1 fa-2x" role="button"><i class="fab fa-instagram"></i></a>

                </section>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 contactanos">
                <h3>Contáctanos</h3>

                <div class="col-md12 well">
                    <div class="col-md-3">
                        <img class="logowa" src="images/logo_whatsapp.png" alt="icon1">
                    </div>
                    <div class="col-md-6 info2">
                        <p>+57 311 2233 445</p>
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
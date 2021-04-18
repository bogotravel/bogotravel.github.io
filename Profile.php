<?php
session_start();

include_once('Connection.php');
include_once('Users.php');

if (isset($_SESSION['logged']))
 {
    $usuario = new user;
    $perfil = $usuario -> fetch_data($_SESSION['username']);
 
    function img(){
        $img = $POST['img-profile'];
        $query = $pdo -> prepare('UPDATE usuario SET PerfilImg = ? WHERE Usuario = ?');
                
        $query -> bindValue(1,$img);
        $query -> bindValue(2,$perfil['usuario']);

        $query -> execute();
    }
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
    <link rel="stylesheet" href="Estilos/Estilosperfil.css">

    <script src="https://kit.fontawesome.com/0f0951e71c.js" crossorigin="anonymous"></script>
    <title>Perfil Personal</title>
</head>
<header class=" d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
    <a href="iniciocategorias.html"><img class="imagenlogo" src="images/LogoApp.png" alt="logo" width="168px" height="50px"><a>
   
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="iniciocategorias.html" class="nav-link">Categoria</a></li>
            <li class="nav-item"><a href="Profile.php" class="nav-link">Perfil</a></li>
            <li class="nav-item"><a href="Logout.php" class="nav-link">Cerrar Sesión</a></li>

        </ul>
    </nav>
   
</header>
<body>
     <div class="main">
            <div class="row user">
                <div class="col">
                    <div class="imagen_user">
                       <img class="center-block" src="data:image/jpg;base64, <?php echo base64_encode($perfil['Perfilmg']); ?>" alt="logo" width="168px" height="50px">
                    </div>
                    <div class="img_subir">
                        <input type="file" name="usuariop" id="file-upload" hidden></input>
                        <button onclick="defaultBtnActive()" id="custom-btn">Cambiar imagen</button>
                    </div>                   
                    <script>
                        const defaultBtn = document.querySelector("#file-upload");
                        const customBtn = document.querySelector("#custom-btn");
                        const img = document.querySelector(".center-block");

                        function defaultBtnActive(){
                            defaultBtn.click();
                        }
                        defaultBtn.addEventListener("change", function(){
                            const file = this.files[0];
                            if(file){
                                const reader = new FileReader();
                                reader.onload = function(){
                                    const result = reader.result;
                                    img.src = result;
                                }
                                reader.readAsDataURL(file);
                            }
                        });
                    </script>
                   
                </div>
                <div class="col datos">
                    <div class="titulos">
                        <h2>Información del Usuario</h2>
                    </div>
                    <div class="">
                       <p>Nombre: <?php echo $perfil['Usuario'];?></p>
                        <p>Correo Electrónico: <?php echo $perfil['Correo'];?></p>
                    </div>
                </div>
            </div>
            <div class="line">
                <hr>
            </div>
            <div class="inform">
                <div class="row">
                    <div class="col section">
                        <img class="icon" src="images/distance.png" alt="logo" width="168px" height="50px">
                        <h2>Historial de Recorridos</h2>
                    </div>
                    <div class="col section">
                        <img class="icon" src="images/insignia.png" alt="logo" width="168px" height="50px">
                        <h2>Ruta de Recompensas</h2>
                    </div>
                    <div class="col section">
                        <img class="icon" src="images/premium-quality.png" alt="logo" width="168px" height="50px">
                        <h2>¡Crea una cuenta premium!</h2>
                    </div>
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
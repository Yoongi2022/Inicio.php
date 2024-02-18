<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Plataforma repse</title>
      
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      
      
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading-gif.gif" alt="#" /></div>
      </div>
      
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <a href="index.html"><img src="images/Logo Roansa.png" /></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
                        <div class="row">
                           <div class="col-md-7 col-lg-5">
                              <div class="text-bg">
                                 <h1>Plataforma repse</h1>
                              </div>
                           </div>
                           <div class="col-md-12 col-lg-7">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="ban_track">
                                       <figure><img src="images/icono_prev_ui.png" alt="#"/></figure>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <form action="iniciarsesion.php"method="POST">
                                       <div class="col-md-12">
                                          <h3>Iniciar sesión</h3>
                                       </div>
                                       <?php
                                       if(isset($_GET['error'])){
                                          ?>
                                          <p class="error">
                                             <?php
                                             echo $_GET['error']
                                             ?>
                                          </p>
                                          <?php
                                       }
                                       ?>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Correo electrónico" type="text" name="Location">
                                       </div>
                                       <div class="col-md-12">
                                          <input class="transfot_form" placeholder="Contraseña" type="text" name="To destination">
                                       </div>
                                       <div class="col-md-12">
                                          <button class="get_now">Iniciar sesión</button>
                                       </div>
                                    </form>
                                 </div>
               </div>              
                           </div>
                     </div>
                     </section>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <!-- sidebar -->
      <script src="js/custom.js"></script>
      
   </body>
</html>


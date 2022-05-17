<?php   include('connexion.php');?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <head>
  <meta charset="utf-8">
  <title>Article</title>
</head>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="assets/img/icons/logo.webp" alt="" width="70px" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0 text-brown">
              <li class="nav-item"><a class="nav-link fw-medium text-brown" href="BackOffice.php">listes actualites</a></li>
              <li class="nav-item"><a class="nav-link fw-medium text-brown" href="modifSupprContenu.php">listes Contenues</a></li>
            </ul>
            <form class="d-flex py-3 py-lg-0"><a class="btn btn-light rounded-pill shadow fw-bold bg-brown" href="index.php" role="button">retour a l'accueil
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></a></form>
          </div>
        </div>
      </nav>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5 loko">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-7 order-md-1 pt-8"><img class="img-fluid" src="assets/img/illustrations/7.webp" alt="" /></div>
            <div class="col-md-7 col-lg-5 text-center text-md-start pt-5 pt-md-9">
              <h1 class="mb-4 display-2 fw-bold text-brown">CRUD :<br class="d-block d-lg-none d-xl-block" /> rechauffement climatique </h1>
              <p class="mt-3 mb-4">c'est un phénomène global de transformation du climat <br />caractérisé par une augmentation générale des températures et qui modifie durablement les équilibres météorologiques et les écosystèmes</p><a class="btn btn-lg btn-info rounded-pill bg-brown " href="#" role="button">Voir details</a>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->

      <!-- <section> close ============================-->
      <!-- ============================================-->

      </section>
      <br>
           
           <?php
              $sql = "SELECT * FROM Actualite";
              $result1 = mysqli_query($connect,$sql);?>
      <center>
          <div class="formulaire"  style="width:300px"> 
            <center><p class="bg-brown"> AJOUT CONTENU </p></center> 
            <form action="traitementAJoutContenu.php" method="post">
               <select  class="form-control" name="idActualite">
              <?php  while($row = mysqli_fetch_assoc($result1)){?>   
                <option value="<?php echo $row['idActualite']?>"><?php echo $row['titre']?></option>
              <?php }?>
              </select><br>
            <textarea class="form-control" name="descriContenu" placeholder="description Contenu"></textarea><br>
            <input type="file" class="form-control" name="imageContenu" placeholder="image Contenu"><br>
            <center><input type="submit" class="btn btn-lg btn-info rounded-pill bg-brown" name="submit"></center>
          </form>
        </div>
    </center>
      <div class="h11" style=" margin-left:600px;margin-top:50px;">
              <h1 class="fw-bold text-brown">Listes contenues</h1>
              <p>suivez plus d'infos concernant le rechauffement du climat!</p>
            </div>
    </div>
       <section class="py-6">
        <?php
          $sql = "SELECT * FROM Contenu c join Actualite  a on c.idActualite = a.idActualite join Pays p on a.idPays = p.idPays";
          $result1 = mysqli_query($connect,$sql);
          while($row = mysqli_fetch_assoc($result1)){?>      
          
            <section class="py-6">
            <div class="container-lg">

              <div class="row flex-center mb-5"> 
              </div>
              <div class="row bg-color">
                <div >
                   <img class="img-fluid top" src="assets/img/illustrations/<?php echo $row['imageContenu']?>" alt="" width="450px">
                   <div class="col-auto text-center my-4" style>
                         <h1 class="fw-bold text-brown"><?php echo $row['titre']?></h1>
                  </div>
                       <br class="text">le :<?php echo $row['dateActualite']?>
                       <br>
                       <br class="d-none d-lg-block"><?php echo $row['descriContenu']?>
                  <div>
                      <a href="ModifContenu.php?idContenu=<?php echo $row['idContenu'];?>" style="margin-top:5px;margin-left:850px;"><button type="submit" class="btn btn-success ">MODIFIER</button></a>
                  </div>
                  <div>
                   <a href="SupprimerContenu.php?idContenu=<?php echo $row['idContenu'];?>&&idActualite=<?php echo $row['idActualite'];?>"><button type="submit" class="btn btn-danger " style="margin-top:-70px;margin-left:975px;">SUPPRIMER</button></a>
                </div>
              </div>
            </div>
          </section>
    <?php }?>
      </section>
  
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6 pb-0" style="background-color:#faaf3f;">

        <div class="container">
          <hr class="text-info opacity-25" />
         
          <div class="row justify-content-lg-around">
            <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img class="img-fluid me-3" src="assets/img/icons/logo.webp" alt=""width="150px" /><span class="fw-bold fs-1 text-1000">Réchauffement climatique</span></a>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
              <h6 class="lh-lg fw-bold mb-4">SITES D'ACTUALITÉ</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Courrier de l'Ouest</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Ouest-France</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Presse Océan</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Le Maine-libre</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
              <h6 class="lh-lg fw-bold mb-4"> SERVICES </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Contactez-nous</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Ouest-France Solidarité </a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Archives du site</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Index de l’égalité professionnelle</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 mb-3 order-1 order-sm-3">
              <h6 class="lh-lg fw-bold mb-4">SHOPPING</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">SFR</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Guide d'achat</a></li>
                <li class="lh-lg"><a class="text-dark fs--1 text-decoration-none" href="#!">Bon Plan Forfait mobile</a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="assets/img/icons/f.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="assets/img/icons/t.png" width="40" alt="" /></a></li>
                <li class="list-inline-item"><a class="text-dark fs--1 text-decoration-none" href="#!"><img class="img-fluid" src="assets/img/icons/i.png" width="40" alt="" /></a></li>

              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
    </main>
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,700;1,900&amp;display=swap" rel="stylesheet">
  </body>

</html>
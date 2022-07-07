<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <title>Accueil</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.scss'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body class="bodyindex">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- logo -->
                <div class="divlogo">
                    <a class="navbar-brand" href="#"><img class="logo_header img-fluid" src="image/logo150x80.png" alt="logo"></a>
                </div>
                <!-- accueil -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto  my-lg-0" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <!-- fruit & legume -->
                        <li class="nav-item dropdown px-lg-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nos Fruits & Légumes
                            </a>
                            <ul class="dropdown-menu mx-lg-5" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item " href="boutique/fruit.php">Fruits</a></li>
                                <li><a class="dropdown-item " href="boutique/legume.php">Légumes</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <!-- paniers & créations -->
                        <li class="nav-item dropdown px-lg-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nos Paniers & Créations
                            </a>
                            <ul class="dropdown-menu mx-lg-5" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="boutique/panier.php">Paniers</a></li>
                                <li><a class="dropdown-item " href="boutique/epicerie.php">Épicerie</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <!-- astuce & recettes -->
                        <li class="nav-item dropdown px-lg-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nos Astuces & Recettes
                            </a>
                            <ul class="dropdown-menu mx-lg-5" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="boutique/astuce.php">Astuces</a></li>
                                <li><a class="dropdown-item" href="boutique/recette.php">Recettes</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <!-- search -->

                        <!-- contact -->


                        <li id="userlogo" class="nav-item dropdown px-lg-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i id="userlogo" class="fa-solid fa-user"></i>
                            </a>
                            <!-- login -->
                            <ul class="dropdown-menu py-0 ulform" aria-labelledby="navbarScrollingDropdown">
                                <li>
                                    <div class="login-page">
                                        <div class="form_login">
                                            <?php if ($_SESSION['id']) {
                                                echo '   Déconnexion    ';
                                            } else {
                                                echo '<form class="login_form" action="../user/register.php" method="POST">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">               
                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
        </form>
        <form class="login_form" action="../user/login.php" method="POST">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>  
        </form>';
                                            } ?>




                                        </div>
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <button class="btncontact mx-lg-5"><a class="acontact" href="../contact/contact.php">Nous Contactez</a></button>
                        <!-- commande -->
                        <a class="commande mx-lg-5" href="download/Bon_de_commande_S25-2022.xlsx" download="Bon de Commande S25 2022.xlsx"> Commandez-ici </a>
        </nav>
    </header>

    <section class="promo">
        <h1 id="title" class="title_promo">Nos Promos</h1>
        <div class="backgroundpromo">
            <?php include "include/promo.php" ?>
        </div>
    </section>
    <h1 id="title" class="title_propos">Ce que l'on vous propose</h1>

    <section class="propos">
        <div class="slider">
            <i class="fa-solid fa-circle-chevron-left"></i>
            <img src="image/banc_fruit.jpg" alt="img1" class="img__slider active" />
            <img src="image/panier_banc.jpg" alt="img2" class="img__slider" />
            <img src="image/recette_banc.jpg" alt="img3" class="img__slider" />
            <div class="suivant">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
            <div class="precedent">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>
        </div>
        <div class="text_propos">
            Chaque jour, nous sélectionnons<span class="text_important_desc"> les meilleurs produits disponibles</span> auprès de nos fournisseurs pour vous garantir une qualité et une fraicheur inégalable.
            Notre principal préoccupation est de vous fournir des produits de qualité au meilleur prix. <span class="text_important_desc">Des promotions différentes chaque semaine.</span>
            Des paniers de fruit et légumes<span class="text_important_desc"> fait à la commande pour plus de variétés.</span> Nous vous donnons des astuces et recettes que nous avons expérimenté nous même !
        </div>

    </section>
    <h1 id="title" class="title_pres">Qui sommes-nous ?</h1>
    <section class="presentation">

        <div class="pres_txt">
            <p>Une entreprise familiale depuis 2014, qui cherche a obtenir les meilleurs produits auprès de ses fournisseurs en toute saison et qui participe au développement de la vie locale et régionale.
                <span class="text_important_desc">Nous sommes actifs sur les communes de</span><span class="ville_desc"> Souligné sous Ballon, Savigné l'evêque, Ballon Saint Mars, Courcemont - Beaufay - Joué l'Abbé ainsi que Le Mans et ses alentours</span>
            </p>
        </div>
        <div class="pres_img">
            <img src="image/banc_savigne.jpg">
        </div>
    </section>
    <section class="delivery">
        <div class="delivery_truck"><i class="fa-solid fa-truck logotruck"></i>
            <br>
            <h4 class="truck_title">Livraison a domicile</h4>
            <br>
            <p class="pdelivery">Gain de temps et simplicité, plus besoin de vous déplacer nous vous livrons chez vous ou a votre travail</p>
        </div>
        <div class="delivery_phone"><i class="fa-solid fa-phone logophone"></i>
            <br>
            <h4 class="phone_title">SUPPORT 24/7</h4>
            <br>
            <p class="pdelivery pphone">Assistance et commande par téléphone</p>
        </div>
        <div class="espace_delivery"></div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt footermap"></i>
                            <div class="cta-text">
                                <h4>Où nous trouver </h4>
                                <span>La Grande Jonchee, Courceboeufs 72290</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone footerphone"></i>
                            <div class="cta-text">
                                <h4>Nous appeler</h4>
                                <a href="tel:+33645073298">06.45.07.32.98 // </a>
                                <a href="tel:+33243275881">02.43.27.58.81</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open footermail"></i>
                            <div class="cta-text">
                                <h4>Envoyez-nous un mail</h4>
                                <a href="mailto:selection.papillon@orange.fr">selection.papillon@orange.fr</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="../image/logo150x80.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>SELECTION PAPILLON, société à responsabilité limitée, immatriculée sous le SIREN 801335530,
                                    est active depuis 8 ans. Implantée à COURCEBOEUFS (72290), elle est spécialisée dans le secteur d'activité du commerce de détail alimentaire sur éventaires et marchés.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3 class="title-link">Liens Utiles</h3>
                            </div>
                            <div class="flexlink">
                                <ul class="first-link">
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="../contact/contact.php">Contact</a></li>

                                </ul>
                                <ul class="snd-link">
                                    <li><a href="../boutique/fruit.php">Fruits</a></li>
                                    <li><a href="../boutique/legume.php">Légumes</a></li>

                                </ul>
                                <ul class="third-link">
                                    <li><a href="../boutique/panier.php">Paniers</a></li>
                                    <li><a href="../boutique/epicerie.php">Epicerie</a></li>
                                </ul>
                                <ul class="frth-link">
                                    <li><a href="../boutique/astuce.php">Astuces</li>
                                    <li><a href="../boutique/recette.php">Recettes</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="js/slider.js" type="text/html"></script>
    <script src='js/main.js' type="text/javascript"></script>


</body>

</html>
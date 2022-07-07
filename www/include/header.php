<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- logo -->
            <div class="divlogo">
                <a class="navbar-brand" href="../index.php"><img class="logo_header img-fluid" src="../image/logo150x80.png" alt="logo"></a>
            </div>
            <!-- accueil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto  my-lg-0" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                    </li>
                    <!-- fruit & legume -->
                    <li class="nav-item dropdown px-lg-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Fruits & Légumes
                        </a>
                        <ul class="dropdown-menu mx-lg-5" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item " href="../boutique/fruit.php">Fruits</a></li>
                            <li><a class="dropdown-item " href="../boutique/legume.php">Légumes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <!-- paniers & créations -->
                    <li class="nav-item dropdown px-lg-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Paniers & L'Épicerie
                        </a>
                        <ul class="dropdown-menu mx-lg-5" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../boutique/panier.php">Paniers</a></li>
                            <li><a class="dropdown-item " href="../boutique/epicerie.php">Epicerie</a></li>
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
                            <li><a class="dropdown-item" href="../boutique/astuce.php">Astuces</a></li>
                            <li><a class="dropdown-item" href="../boutique/recette.php">Recettes</a></li>
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
                                        <?php  if(isset($_SESSION['id'])) {
                                            echo '<a href="../user/logout.php">Déco</a>';
                                            } else {
                                                echo '  <form class="login_form" action="../php/register.php" method="POST">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                                                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                                               
                                            </form>
                                            <form class="login_form" action="../user/login.php" method="POST">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                                                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                                               
                                            </form>';
                                            }?>
                                      
                                        




                                    </div>
                                </div>


                                
                            </li>
                        </ul>
                    </li>
                    <button class="btncontact mx-lg-5"><a href="../contact/contact.php">Nous Contactez</a></button>
                    <!-- commande -->
                    <a class="commande mx-lg-5" href="../download/Bon_de_commande_S25-2022.xlsx" download="Bon_de_commande_S25-2022.xlsx"> Commandez-ici </a>
    </nav>
</header>
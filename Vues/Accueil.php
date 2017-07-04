
<style>

hr{
    width: 750px;
}

</style>


<div class="container" style="margin-top: 3%; color: white !important; font-size: 1.7em;">
    <center>
        <strong>
        <p>
            Bienvenue sur le site de Conciergin, la conciergerie citoyenne du Sud Seine-et-Marne — Retrouvez nos services au Stop and Work de Fontainebleau, au Centre d'Affaires Odéon d'Avon et dans votre entreprise : demandez les services Conciergin.
        </p>
    </strong>
    </center>
    <img class="img-fluid" src="Vues/app/img/Accueil.jpg" alt="logo" style="position: absolute; left: 0px; top: 0px; right: 0px; z-index: -1; width: 100%; height: 450px; ">
</div>
<div class="container">
    <br><br>
    <center>
        <strong>
    <h1 style="margin-top: 25%;">Une conciergerie citoyenne verte et solidaire</h1>
    </strong>
    </center>
    <br>
    <center>
        <h4>
            Basée à Fontainebleau, Conciergin est une entreprise de service de proximité qui offre aux salariés des entreprises et aux usagers de la gare de Fontainebleau-Avon, l’occasion de résoudre les tracasseries du quotidien, et les demandes relevant de la sphère
            privée.
        </h4>
    </center>
</div>
<?php
    if(isset($_GET["mes"]) && !empty($_GET)){
    switch ($_GET["mes"]) {
    case "bvn":
        echo '  <div class="alert alert-success">
                    <strong>Bienvenue !</strong> Bonne recherche
                </div>';
        break;
    case "utok":
        echo 'Utilisateur Créé';
        break;
    case "fail-ut":
        echo 'Echec Création Utilisateur';
        break;
    case "ann":
        echo 'Annulation';
        break;
    }
    }
?>
    <br><br><br>
    
    <hr class="featurette-divider" style=" margin-bottom: 25%;">
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container vignet" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="row">
                       <div class="row" id="commande-container" style="position: relative; top: -50px;">
                        <a href="index.php?page=Commande" style="width: 10%;">
                            <img class="logo-service" id="commande-img" src="Vues/app/img/Fond.jpg" alt="Je commande">
                            <a/>
                        </div>
                        <div class="col-md-4" style="display: inline; text-align: center;">
                            <a href="#">
                                <center>
                                    <img class="logo-service img-responsive" src="Vues/app/img/Epicerie.png" alt="Logo">
                                </center>
                            </a>
                            <p>Epicerie</p>
                        </div>
                        <div class="col-md-4" style="display: inline; text-align: center;">
                            <a href="#">
                                <center>
                                    <img class="logo-service img-responsive" src="Vues/app/img/Lavage_Auto.png" alt="Logo">
                                </center>
                            </a>
                            <p>Lavage auto</p>
                        </div>
                        <div class="col-md-4" style="display: inline; text-align: center;">
                            <a href="#">
                                <center>
                                    <img class="logo-service img-responsive" src="Vues/app/img/Cordonnerie.png" alt="Logo">
                                </center>
                            </a>
                            <p>Cordonnerie</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="display: inline; text-align: center;">
                            <a href="#">
                                <center>
                                    <img class="logo-service img-responsive" src="Vues/app/img/Cordonnerie.png" alt="Logo">
                                </center>
                            </a>
                            <p>Pressing</p>
                        </div>
                        <div class="col-md-4" style="display: inline; text-align: center;">
                            <a href="#">
                                <center>
                                    <img class="logo-service img-responsive" src="Vues/app/img/Panier_Legumes.png" alt="Logo">
                                </center>
                            </a>
                            <p>Panier de légumes</p>
                        </div>
                        <div class="col-md-4" style="display: inline; text-align: center;">
                            <a href="index.php?page=Services">
                                <center>
                                    <button type="button" class="logo-service btn btn-default btn-lg">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </button>
                                </center>
                            </a>
                            <p>Plus de services</p>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="col-md-6">
                    <center>
                        <h1 style="margin-top: 0px; color:black;">Les actualités de la semaine</h1>
                        <br>
                    </center>
                    <center>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FvoieA%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500"
                            style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </center>
                </div>
            

        </div>
    </div>
    <br><br>
    <hr class="featurette-divider" style="margin-bottom: 130px;">
    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    </div>


    <!-- Carousel
    ================================================== -->
    <div class="container">
        <!-- Jssor Slider Begin -->

        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 3100px; height: 1500px; overflow: hidden;">

            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('Vues/app/img/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, .7);"></div>

            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 3100px; height: 1500px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="Vues/app/img/home/01.jpg" />
                </div>
                <div>
                    <img u="image" src2="Vues/app/img/home/02.jpg" />
                </div>
                <div>
                    <img u="image" src2="Vues/app/img/home/03.jpg" />
                </div>
                <div>
                    <img u="image" src2="Vues/app/img/home/04.jpg" />
                </div>
            </div>

            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                
                .jssorb05 {
                    position: absolute;
                }
                
                .jssorb05 div,
                .jssorb05 div:hover,
                .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url(Vues/app/img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                
                .jssorb05 div {
                    background-position: -7px -7px;
                }
                
                .jssorb05 div:hover,
                .jssorb05 .av:hover {
                    background-position: -37px -7px;
                }
                
                .jssorb05 .av {
                    background-position: -67px -7px;
                }
                
                .jssorb05 .dn,
                .jssorb05 .dn:hover {
                    background-position: -97px -7px;
                }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 1500px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->

            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                
                .jssora11l,
                .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(Vues/app/img/a11.png) no-repeat;
                    overflow: hidden;
                }
                
                .jssora11l {
                    background-position: -11px -41px;
                }
                
                .jssora11r {
                    background-position: -71px -41px;
                }
                
                .jssora11l:hover {
                    background-position: -131px -41px;
                }
                
                .jssora11r:hover {
                    background-position: -191px -41px;
                }
                
                .jssora11l.jssora11ldn {
                    background-position: -251px -41px;
                }
                
                .jssora11r.jssora11rdn {
                    background-position: -311px -41px;
                }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 700px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 700px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="https://www.jssor.com">Bootstrap Carousel</a>
        </div>
        <!-- Jssor Slider End -->
    </div>
  

    <hr class="featurette-divider" style="margin-top: 150px; margin-bottom: 150px;">


    <div class="container-fluid" style="margin-bottom: 150px;">
        <div class="row vignet">
            <div class="col-md-3" style="display: inline; text-align: center;">

                <center>
                    <button type="button" onclick="location.href='index.php?page=Confiance';" class="logo-service btn btn-default btn-circle btn-xl" style="display: inline; text-align: center; height: 180px; width: 180px;"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><p>Communauté</p>
                </button>
                </center>

            </div>
            <div class="col-md-3" style="display: inline; text-align: center;">
                <center>
                    <button type="button" onclick="location.href='index.php?page=Particulier';" class="logo-service btn btn-default btn-circle btn-xl" style="display: inline; text-align: center; height: 180px; width: 180px;"><span class="glyphicon glyphicon-check" aria-hidden="true"></span><p>Offres</p>
                </button>
                </center>
            </div>
            <div class="col-md-3" style="display: inline; text-align: center;">
                <center>
                    <button type="button" onclick="location.href='index.php?page=Quisommenous';" class="logo-service btn btn-default btn-circle btn-xl" style="display: inline; text-align: center; height: 180px; width: 180px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><p>Découvir</p>
                </button>
                </center>
            </div>
            <div class="col-md-3" style="display: inline; text-align: center;">
                <center>
                    <button type="button" onclick="location.href='index.php?page=Prestataire';" class="logo-service btn btn-default btn-circle btn-xl" style="display: inline; text-align: center; height: 180px; width: 180px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><p>Nos services</p>
                </button>
                </center>
            </div>
        </div>
        <br>
    </div>
    <br><br>
    <div class="container">
        <center>
            <iframe width="500" height="400" src="https://www.youtube.com/embed/oxCCLx4ym5Y" frameborder="0" allowfullscreen></iframe>
        </center>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Revenir en haut</a></p>
        <p>&copy; Conciergin 2017 &middot; <a href="Vues/Clients/CGV/CGV.html">C.G.V.</a> &middot; </p>
    </footer>
    <!-- /.container -->


  
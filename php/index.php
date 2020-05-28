<?php
    include '../php/_inc.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Cabinet Psychologue</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!--Main Container-->
<div class="main-container">
    <!--Main Content-->
<main>

    <div class="main-content">

            <section class="home section active" id="home">
                <div class="container">
                    <div class="intro">
                        <img src="../images/Accueil/photo.jpg" alt="photo" class="shadow-dark">
                            <h1>Véronique Goussé</h1>
                                <h2>Psychologue - Docteur en psychologie</h2>
                                <p>St-Maur des Fossés (94)</p>
                                <p>sur RV: 06.32.02.58.22</p>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/veronique.gousse"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/véronique-goussé-99664378" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                    </div>  
                </div>
            </section>
    
        <!--Aside-->
        <div class="aside">

            <header>
                <div class="logo">
                    <a href="#">Véronique Goussé</a>
                </div>

                <div class="nav-toggler">
                    <span></span>
                </div>

                <!--Nav-->
                <nav>
                    <ul class="nav">
                        <li><a href="#home" class="active"><i class="fa fa-home"></i> Accueil</a></li>
                        <li><a href="#service"><i class="fa fa-pencil"></i>Pratiques</a></li>
                        <li><a href="#theme"><i class="fa fa-paste"></i>Thématiques</a></li>
                        <li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
                    </ul>
                </nav>
                <!--Nav-->
            </header>

            <!--Copyright-->
            <footer>
                <div class="copyright-text">
                   <p> &copy; 2020 Véronique Goussé </p>
                    <p> Photo by Andrew Seaman & Margarita Terekhova on Unsplash </p>
                </div>
            </footer>
            <!--Copyright-->

        </div>
           


            <!--Service-->
<section class="service section" id="service">
                    <div class="container">
                        <div class="row">
                            <div class="section-title padd-15">
                                <h2>Pratiques</h2>
                            </div>
                        </div>
                        <div class="row">
                            
                            <!--Service item-->
                            <div class="service-item padd-15">
                                <div class="service-item-inner">
                                    <div class="icon" id="diagnostic"></div>
                                        <h3>Diagnostics</h3>
                                        <p>TSA / TDA-H / Troubles anxieux</p>
                                </div>
                            </div>
                            <!--Fin Service item-->

                            <!--Service item-->
                            <div class="service-item padd-15">
                                <div class="service-item-inner">
                                    <div class="icon" id="suivi"></div>
                                        <h3>Suivi individuel</h3>
                                        <p>Enfants / Adultes</p>
                                </div>
                            </div>
                            <!--Fin Service item-->

                            <!--Service item-->
                            <div class="service-item padd-15">
                                <div class="service-item-inner">
                                    <div class="icon" id="accompagnement"></div>
                                        <h3>Accompagnement</h3>
                                        <p>Parental / Scolaire</p>
                                </div>
                            </div>
                            <!--Fin Service item-->

                            <!--Service item-->
                            <div class="service-item padd-15">
                                <div class="service-item-inner">
                                    <div class="icon" id="tsa"></div>
                                        <h3>Femme avec TSA</h3>
                                        <p>Diagnostic / Suivi</p>
                                </div>
                            </div>
                            <!--Fin Service item-->


                        </div>
                    </div>
                </section>
                <!--Fin Service-->


<!--Themes-->
<section class="theme section" id="theme">
                    <div class="container">
                        <div class="row">
                            <div class="section-title padd-15">
                                <h2>Thématiques</h2>
                            </div>
                        </div>

                        <div class="row">

                            <!--Theme item-->
                            <div class="theme-item padd-15">
                                <div class="theme-item-inner shadow-dark">
                                    <div class="theme-img">
                                        <img src="../images/Thematiques/autisme.jpg" alt="autisme">
                                    </div>
                                    <div class="theme-info">
                                        <h4 class="theme-title">Trouble du Spectre de l'Autisme</h4>
                                        <p class="theme-description">Je pratique les diagnostics à tous les âges de la vie, enfants, adolescents, adultes, dont le syndrome d’Asperger, ce dernier terme étant toujours utilisé alors que depuis le DSM5 (2013, en France), il fait également partie des TSA.</p>
                                        <p class="theme-tags"><a href="../php/autisme.tpl.php">Lire la suite</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Theme item-->

                            <!--Theme item-->
                            <div class="theme-item padd-15">
                                <div class="theme-item-inner shadow-dark">
                                    <div class="theme-img">
                                        <img src="../images/Thematiques/hyperactivite.png" alt="hyperactivité">
                                    </div>
                                    <div class="theme-info">
                                        <h4 class="theme-title">Trouble de déficit de l'attention hyperactivité</h4>
                                        <p class="theme-description">Je pratique le test cognitif TEA-Ch pour les enfants de 6 à 14 ans permet de diagnostiquer un trouble attentionnel et d'identifier quelle modalité est déficitaire.
                                        </p>
                                        <p class="theme-tags"><a href="#">Lire la suite</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Theme item-->

                            <!--Theme item-->
                            <div class="theme-item padd-15">
                                <div class="theme-item-inner shadow-dark">
                                    <div class="theme-img">
                                        <img src="../images/Thematiques/trouble_anxieux.png" alt="troubles anxieux">
                                    </div>
                                    <div class="theme-info">
                                        <h4 class="theme-title">Troubles Anxieux</h4>
                                        <p class="theme-description">Une personne sur dix souffre de troubles anxieux ou de panique. Entre 20% et 30% des adolescents et des jeunes adultes souffrent d’un trouble anxieux.</p>
                                        <p class="theme-tags"><a href="#">Lire la suite</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Theme item-->

                            <!--Theme item-->
                            <div class="theme-item padd-15">
                                <div class="theme-item-inner shadow-dark">
                                    <div class="theme-img">
                                        <img src="../images/Thematiques/meditation.png" alt="theme">
                                    </div>
                                    <div class="theme-info">
                                        <h4 class="theme-title">Groupe de méditation</h4>
                                        <p class="theme-description">Formée à la méditation en pleine conscience et donc la pratiquant quotidiennement depuis 5 ans, j’ai pu relever combien cette pratique attentionnelle peut aider dans la vie de tout un chacun.</p>
                                        <p class="theme-tags"><a href="#">Lire la suite</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Theme item-->

                        </div>
                    </div>
                </section>
                <!--Fin Themes-->


<!--Formulaire-->
<section class="contact section" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="section-title padd-15">
                                <h2>Contact</h2>
                            </div>
                        </div>

                        <div class="row">

                            <div class="contact-form">

                                <?php if(array_key_exists('errors', $_SESSION)): ?>
                                    <div class="alert alert-danger">
                                        <?= implode('<br>', $_SESSION['errors']); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(array_key_exists('success', $_SESSION)): ?>
                                    <div class="alert alert-success">
                                        Votre email a bien été envoyé
                                    </div>
                                <?php endif; ?>


                                <form action="post_contact.php" method="POST">
                                    <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <?= $form->text('name', 'Votre Nom'); ?>
                                        </div>
                                        <div class="col-xs-6">
                                            <?= $form->email('email', 'Votre Email'); ?>
                                        </div>

                                        <div class="col-xs-12">
                                            <?= $form->subject('subject', 'Votre Sujet'); ?>
                                        </div>
                                        
                                        <div class="col-xs-12">
                                            <?= $form->textarea('message', 'Votre message'); ?>
                                            <?= $form->submit('Envoyer'); ?>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </section>
                <!--Fin Formulaire-->


</div>
    </main>
    <!--Main Content-->
</div>
<!--Main Container-->

<script src="../js/script.js"></script>
    
</body>
</html>
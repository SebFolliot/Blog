<!DOCTYPE html>
<html>

    <head>
        <title>
            <?= isset($title) ? $title : 'Blog de Jean FORTEROCHE' ?>
        </title>

        <meta charset="utf-8" />

        <!-- règle pour que le viewport mobile soit le même que la largeur de l'écran  -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- metatags -->
        <meta name="description" content="Billet simple pour l'Alaska, roman de Jean Forteroche" />
        <meta name="keywords" content="blog, Forteroche, roman, alaska" />


        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="Billet simple pour l'Alaska, roman de Jean Forteroche" />
        <meta name="twitter:title" content="Blog de Jean Forteroche" />
        <meta name="twitter:image" content="http://projet_blog.construksite.fr/Web/Images/train_alaska.jpg" />

        <!-- Open Graph data, Facebook -->
        <meta property="og:title" content="Blog de Jean Forteroche" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://projet_blog.construksite.fr" />
        <meta property="og:image" content="http://projet_blog.construksite.fr/Web/Images/train_alaska.jpg" />
        <meta property="og:description" content="Billet simple pour l'Alaska, roman de Jean Forteroche" />

        <!-- fichiers style css -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Web/css/style.css" type="text/css" />

        <!-- style css -->
        <style>
            html {
                height: 100%;
            }

            body {
                background-color: aliceblue;
                font-size: 16px;
                font-family: arial, sans-serif;
                position: relative;
             }

            footer {
                position: absolute;
                bottom: 0;
            }

            * {
                -moz-box-sizing: border-box; 
                box-sizing: border-box;
            }

            header {
                margin-bottom: 100px;
            }

            #mceu_28, #mceu_4 {
                border: 1px #397385 solid;
                background-color: aliceblue;
            }

            #mceu_4 i {
                background-color: yellow;
            }

            #mceu_39-body {
                border: 1px black lightgray;
            }

            #mceu_39-body i {
                color: rgb(112, 146, 190);
            }

            .mce-btn {
                border-color: lightgray !important;
            }
            
            header .fa-bars,
            header .fa-times,
            [type=checkbox] {
            /* on masque le menu qui servira pour la version mobile/tablette */
            display: none;
            }
            
            /* Tout type d'écran dont la largeur fait au maximum 768px), type tablette */

            @media all and (max-width: 767px) {

                /* Menu de navigation */
                header .fa-bars {
                    display: block;
                    font-size: 2em;
                    cursor: pointer;
                    margin-top: 10px;
                    color: grey;
                }

                header .fa-times {
                    display: none;
                    font-size: 2em;
                    cursor: pointer;
                    color: grey;
                }

                header .list_menu {
                    /* On masque le menu  */
                    display: none;
                }

                #menu_hamburger:checked ~ .list_menu {
                    /* on affiche le menu déroulant lorsqu'on coche "la case" du menu hamburger */
                    display: block;
                }

                .list_menu li {
                    border-bottom: 1px solid silver;
                    line-height: 2em;
                    font-size: 1.5em;
                    text-align: left;
                }

                #footer_title {
                    margin-left: 10px !important;
                    margin-right: 10px !important;
                }

                .date_modif {
                    display: none;
                }

            }

            /* Tout type d'écran dont la largeur fait au maximum 360px), type mobile */

            @media all and (max-width: 360px) {

                #footer_title {
                    font-size: 12px;
                }

                .img-thumbnail {
                    display: none;
                }

                #chapter_table {
                    font-size: 13px !important;
                }

                #table_title {
                    font-size: 20px;
                }

                #text_field {
                    width: auto !important;
                }

                .dropdown-menu {
                    font-size: 10px !important;
                }
            }


        </style>
    

        <!-- WYSIWYG tinymce -->
        <script type="text/javascript" src="Web/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: '#jftextarea',
                theme: 'modern',
                language: 'fr_FR',
                statusbar: false,
                height: 300,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor', 'code', 'lists'
                ],
                
                toolbar: 'insertfile undo redo | styleselect | formatselect fontselect fontsizeselect | cut copy paste | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor',
                statusbar: false,

                spellchecker_language: 'fr',

                mobile: {
                    theme: 'mobile',
                    plugins: ['autosave', 'lists', 'autolink'],
                    toolbar: ['undo', 'bold', 'italic', 'fontsizeselect']
                }  
            });
        
        </script>

    </head>


    <body>

        <header>
            <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #e3f2fd">
                <div class="container-fluid">
                    <!-- case à cocher pour sélection du menu en barre -->
                    <input type="checkbox" id="menu_hamburger" name="menu_hamburger" />
                    <!-- icône menu hamburger font awesome -->
                    <label for="menu_hamburger"><i class="fa fa-bars" aria-hidden="true"></i></label>
                    <label for="menu_hamburger"><i class="fa fa-times" aria-hidden="true"></i></label>
                    <ul class="nav navbar-nav list_menu">
                        <?php require('../lib/Fram/isActive.php'); ?>

                        <li <?=isActive( '/'); ?>><a href="/" title="Accueil"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                        <li <?=isActive('/chapters-' .$chapters['id'] .'.html'); ?>><a title="Chapitres" data-toggle="dropdown" href="">Chapitre<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($listeChapters as $chapters) { ?>

                                    <li>
                                        <a href="/chapters-<?= $chapters['id'] ?>.html"><i class="fas fa-book"></i>
                                            <?= $chapters['titre'] ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                            </ul>
                        </li>
             
                        <?php if ($user->isAuthenticated()) { ?>
                        <li <?=isActive( '/admin/'); ?>> <a href="/admin/" title="Administration des chapitres">Admin</a></li>
                        <li <?=isActive( '/admin/chapters-insert.html'); ?>><a href="/admin/chapters-insert.html" title="Ajouter un chapitre">Ajouter un chapitre</a></li>
                        <?php } ?>

                    </ul>
      
                        <?php if ($user->isAuthenticated()) { ?>
                    <div style="display: flex; justify-content: flex-end"><span style="margin-right: 10px">Jean FORTEROCHE</span><a href="Web/disconnect.php"><i class="fas fa-power-off" title="Se déconnecter" style="color: grey"></i></a></div>
   
                    <?php } ?>
                 
                </div>
            </nav>
        </header>


        <section id="content">
            <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
            <?= $content ?>
        </section>

        <!-- footer -->
        <?php require('footer.php'); ?>
    
    

        <!-- script js -->
        <script type="text/javascript" src="Web/js/jquery-3.2.1.js"></script>
        <!-- utilisation d'un CDN pour charger la version 3.3.4 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Web/js/top.js"></script>
        <script type="text/javascript" src="Web/js/image.js"></script>
        <script type="text/javascript" src="Web/js/hamburger_menu.js"></script>


    </body>

</html>

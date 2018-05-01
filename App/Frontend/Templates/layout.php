<!DOCTYPE html>
<html>

<head>

    <title>
        <?= isset($title) ? $title : 'Blog de Jean FORTEROCHE' ?>
    </title>

    <meta charset="utf-8" />
    <!--[if IE]>
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <![endif]-->

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
    <link rel="stylesheet" href="/css/style.css" type="text/css" />

    <!-- style css -->
    <style>
        body {
            background-color: aliceblue;
            font-size: 16px;
            font-family: arial, sans-serif;
        }

        header {
            margin-bottom: 100px;
        }

        hr {
            border: 1px blue solid;
        }

        #feature {
            border: 1px silver solid;
        }

        footer {
            margin-top: 80px;
        }

        #mceu_28 {
            color: red;
            border: 1px black solid;
            background-color: aliceblue;
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

    </style>

    <!-- WYSIWYG tinymce -->
    <script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
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
            toolbar: 'insertfile undo redo | styleselect | formatselect fontselect fontsizeselect | cut copy paste | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            statusbar: false,
            style_formats: [{
                title: 'Image',
                selector: 'img',
                styles: {
                    'float': 'left',
                    'margin': '0 10px 0 10px'
                }
            }],
            spellchecker_language: 'fr'
        });

    </script>

</head>


<body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #e3f2fd">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <?php require('../lib/Fram/isActive.php'); ?>
                    <li <?=isActive( '/'); ?>> <a href="/"><i class="fa fa-home" aria-hidden="true" title="Accueil"></i></a></li>
                    <li class="dropdown" <?=isActive( '/chapters-([0-9]+)\.html');?>> <a data-toggle="dropdown" href="">Chapitre<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                        foreach ($listeChapters as $chapters) { ?>
                                <li>
                                    <a href="chapters-<?= $chapters['id'] ?>.html">
                                        <?= $chapters['titre'] ?>
                                    </a>
                                </li>
                                <?php } ?>
                                <li class="divider"></li>
                                <li><a href="#">Autres infos</a></li>
                        </ul>
                    </li>
                    <?php if ($user->isAuthenticated()) { ?>
                    <li <?=isActive( '/admin/'); ?>> <a href="/admin/">Admin</a></li>
                    <li <?=isActive( '/admin/chapters-insert.html'); ?>><a href="/admin/chapters-insert.html">Ajouter un chapitre</a></li>
                    <?php } ?>
                </ul>
                <ul class="nav navbar-nav pull-right" id="admin">
                    <?php if ($user->isAuthenticated()) { ?>
                    <li><a>Jean FORTEROCHE</a></li>
                    <li><a href="../disconnect.php"><i class="fas fa-power-off" title="Se déconnecter"></i></a></li>
                    <?php } ?>
                </ul>
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
    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
    <!-- utilisation d'un CDN pour charger la version 3.3.4 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/top.js"></script>
    <script type="text/javascript" src="../js/image.js"></script>

</body>

</html>

<section style="background: url('../images/train_alaska.jpg') no-repeat center; height:563px; color:white; margin-bottom: 20px">
    <div style="text-align:center">
        <p style="font-size:2em"><em>Jean Forteroche</em></p>
        <h1 style="font-size:4em; margin-top: 120px"><strong>Billet simple pour l'Alaska</strong></h1>
    </div>
</section>

    <aside class="col-md-8; col-sm-10; col-xs-12" style="text-align: center; margin-bottom: 20px">
        <div class="img-thumbnail" style="text-align: left; background-color: rgba(255,255,255,0.3)">
            <p>Bonjour et bienvenue sur mon blog.</p>
            <p>Retrouvez mon tout nouveau roman <strong>Billet simple pour l'Alaska</strong> que je diffuse chapitre par chapitre.<br></p>
            <p>Bonne lecture.<br>
               <em>Jean Forteroche</em>
            </p>
        </div>
    </aside>

<?php

foreach ($listeChapters as $chapters)
{
?>
    <div class="container">
        <h2 class="row">
            <a href="chapters-<?= $chapters['id'] ?>.html" class="col-md-12" style="text-align: center">
                <?= $chapters['titre'] ?>
            </a>
        </h2>

        <p class="row col-md-12" style="border-bottom: 2px silver dashed; padding-bottom: 30px;">
            <?= nl2br($chapters['contenu']) ?> <a href="chapters-<?= $chapters['id'] ?>.html"><em>Lire la suite / Commentaire</em></a>
        </p>

    </div>
    <?php
}

?>
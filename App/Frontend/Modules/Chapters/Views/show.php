
<div class="container">
    <h2 style="text-align: center">
        <?= $chapters['titre'] ?>
    </h2>
    <p>
        <?= nl2br($chapters['contenu']) ?>
    </p>

    <p>Par <em><?= $chapters['auteur'] ?></em>, le
        <?= $chapters['dateAjout']->format('d/m/Y à H\hi') ?>
    </p>


    <?php if ($chapters['dateAjout'] != $chapters['dateModif']) { ?>
    <p style="text-align: right;"><small><em>Modifié le <?= $chapters['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>


    <?php } ?>

    <hr />
    <h3 style="text-align: center">Vos commentaires sur ce chapitre</h3>
    <br />
    <?php
if (empty($comments))
{
?>
        <p>Aucun commentaire n'a encore été posté.</p>
        <?php
}

foreach ($comments as $comment)
{
?>
            <fieldset>
                <legend>
                    Posté par <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le
                    <?= $comment['date']->format('d/m/Y à H\hi') ?>
                        <?php if ($user->isAuthenticated()) { ?> -
                        <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> |
                        <a href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a>
                        <?php } ?>
                </legend>
                <p style="margin-bottom: 20px">
                    <?= nl2br(htmlspecialchars($comment['contenu'])) ?>
                </p>
                <button style="margin-bottom: 20px" class="btn btn-warning btn-sm">Signaler le commentaire</button>
                
            </fieldset>
            <?php
}
?>
            <hr />
            <p style="text-align: center"><a href="commenter-<?= $chapters['id'] ?>.html"><button class="btn btn-primary btn-lg"><i class="fas fa-comment-alt"></i><br />Ajouter un commentaire</button></a></p>
</div>

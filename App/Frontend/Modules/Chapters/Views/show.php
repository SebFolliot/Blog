<!-- script permettant d'avoir d'afficher le message temporairement -->
<script>
    document.getElementById("info_comment").innerHTML = "Le commentaire a bien été ajouté !";

    setTimeout(function() {
        document.getElementById("info_comment").innerHTML = "";
    }, 3000);

</script>

<div class="container" style="padding-bottom: 200px">
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
                        <?php if ($user->isAuthenticated()) { ?>
                        <?php if ($comment['moderate'] == 0) { ?>
                        <a href="/admin/comment-moderate-<?= $comment['id'] ?>.html">  - Modérer</a>
                        <?php } ?>
                        <?php if ($comment['report'] == 1 && $comment['moderate'] == 0) { ?>
                        <a href="/admin/comment-delete-report-<?= $comment['id'] ?>.html">|| Annuler la modération</a>
                        <?php } ?>
                        <?php } ?>
                </legend>
                <p style="margin-bottom: 20px">
                    <?php if ($comment['moderate'] == 1) { ?>
                    <em style="color: grey">Ce commentaire a été modéré</em>
                    <?php } else {
                    echo nl2br(htmlspecialchars($comment['contenu'])); } ?>
                </p>
                <?php 
                if ($user->isAuthenticated()) { ?>
                <?php } elseif ($comment['report'] == 1 && $comment['moderate'] == 0) { ?>
                <button type="button" disabled name="comment-report" style="margin-bottom: 20px" class="btn btn-secondary btn-sm">Commentaire signalé auprès du modérateur</button>
                <?php 
                } elseif ($comment['report'] == 0 && $comment['moderate'] == 0) { ?>
                <a href="/comment-reporting-<?= $comment['id'] ?>.html"><input type="button" name="comment-report" value="Signaler le commentaire" style="margin-bottom: 40px" class="btn btn-warning btn-sm" /></a>
                <?php } ?>
                <?php if (($user->isAuthenticated()) && $comment['report'] == 1 && $comment['moderate'] == 0) { ?>
                <p style="color: red">Ce commentaire a été signalé</p>
                <?php } ?>
            </fieldset>
            <?php } if ($user->isAuthenticated()) {            
            } else { ?>
            <hr />
            <p style="text-align: center"><a href="commenter-<?= $chapters['id'] ?>.html"><button class="btn btn-primary btn-lg"><i class="fas fa-comment-alt"></i><br />Ajouter un commentaire</button></a></p>
            <?php } ?>
</div>

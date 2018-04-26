<!-- page index backend -->
<table class="table table-striped table-condensed">
    
    <div class="card-header" style="background-color:silver; color:white">
        <h2 class="card-title" style="text-align: center">
            <?php if ($nombreChapters > 0) { 
                    echo 'Gestion des ' .$nombreChapters. ' chapitres';
                  }
                  else { 
                      echo 'Il n\'y a pas de chapitre pour le moment';
                  } ?> </h2>
    </div>
    <thead>
        <tr>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Date d'ajout</th>
            <th>Dernière modification</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($listeChapters as $chapters)
        {
          echo '<tr><td>', $chapters['auteur'], '</td><td>', $chapters['titre'], '</td><td>', $chapters['dateAjout']->format('d/m/Y à H\hi'), '</td><td>', ($chapters['dateAjout'] == $chapters['dateModif'] ? '-' :  $chapters['dateModif']->format('d/m/Y à H\hi')), '</td><td><a href="chapters-update-', $chapters['id'], '.html"><i class="fas fa-edit" title="Modifier"></i></a> <a href="chapters-delete-', $chapters['id'], '.html"><i class="fas fa-eraser" title="Supprimer"></i></a></td></tr>', "\n";
        }
        ?>
    </tbody>
    
</table>

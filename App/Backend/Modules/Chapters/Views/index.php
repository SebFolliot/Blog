<!-- page index backend -->

<!-- script permettant d'afficher temporairement le message -->
<script>
    document.getElementById("info_delete_report").innerHTML = "Le signalement du commentaire a été annulé !";

    setTimeout(function() {
        document.getElementById("info_delete_report").innerHTML = "";
    }, 3000);
</script>

<script>
    document.getElementById("info_moderate").innerHTML = "Le commentaire a bien été modéré !";

    setTimeout(function() {
        document.getElementById("info_moderate").innerHTML = "";
    }, 3000);
</script>

<!-- Boîte de dialogue afin de confirmer la suppression du chapitre -->
<script>
    
    function delete_chapter(chapter) 
    {
        if(confirm("Voulez vous vraiment supprimer ce chapitre ?")) 
        { 
            location.href= 'chapters-delete-' + chapter + '.html';
            alert('Le chapitre a bien été supprimé'); 
        } 
        return false;
    }
</script>

<table id="chapter_table" class="table table-striped table-condensed">

    <div class="card-header" style="background-color:silver; color:white">
        <h2 id="table_title" class="card-title" style="text-align: center">
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
            <th>Date de création</th>
            <th class="date_modif">Dernière modification</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach ($listeChapters as $chapters)
        {
          echo '<tr><td>', $chapters['auteur'], '</td><td>', $chapters['titre'], '</td><td>', $chapters['dateAjout']->format('d/m/Y à H\hi'), '</td><td class="date_modif>', ($chapters['dateAjout'] == $chapters['dateModif'] ? '-' :  $chapters['dateModif']->format('d/m/Y à H\hi')), '</td><td><a href="chapters-update-', $chapters['id'], '.html"><i class="fas fa-edit" title="Modifier"></i></a><a onClick="delete_chapter(', $chapters['id'],')"<i class="fas fa-eraser" title="Supprimer"></i></a></td></tr>', "\n";
            
         }
        ?>
    </tbody>

</table>

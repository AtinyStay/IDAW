<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui définit la structure du site
        $mymenu = array(
        // idPage titre
        'accueil' => 'Accueil',
        'cv' => 'CV',
        'projets' => 'Projets',
        'hobbies' => 'Hobbies',
        'infos-techniques' => 'Informations Techniques'
        );

        //reproduire l'html du menu
        echo '<nav class="menu">
            <ul>';
        foreach($mymenu as $pageId => $pageParameters) {
            //récupération de l'id propre à la page courante
            if($currentPageId == $pageId){
                echo '<li><a id="currentpage" href="index.php?page=',$pageId,'">',$pageParameters,'</a></li>';
            }
            else{
                echo '<li><a href="index.php?page=',$pageId,'">',$pageParameters,'</a></li>';
            }
        }
        echo '</ul>
            </nav>';
    }
?>





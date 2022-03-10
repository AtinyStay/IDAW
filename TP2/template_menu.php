<?php
    function renderMenuToHTML($currentPageId,$currentLang='fr') {
        // un tableau qui définit la structure du site
        $mymenu = array(
        // idPage titre
        'accueil' => array('Accueil','Welcome Page'),
        'cv' => array('CV','CV'),
        'projets' => array('Projets','Projects'),
        'hobbies' => array('Hobbies','Hobbies'),
        'infos-techniques' => array('Informations Techniques','Technical Information'),
        'contact' => array('Contacts','Network')
        );

        //reproduire l'html du menu
        echo '<nav class="menu">
            <ul>';
        foreach($mymenu as $pageId => $pageParameters) {
            //récupération de l'id propre à la page courante
            if($currentPageId == $pageId){
                if($currentLang == 'fr')
                    echo '<li><a id="currentpage" href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[0],'</a></li>';
                else
                    echo '<li><a id="currentpage" href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[1],'</a></li>';
            }
            else{
                if($currentLang == 'fr')
                    echo '<li><a href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[0],'</a></li>';
                else
                    echo '<li><a href="index.php?page=',$pageId,'&lang=',$currentLang,'">',$pageParameters[1],'</a></li>';
            }
        }
        echo '</ul>
            </nav>';
    }
?>





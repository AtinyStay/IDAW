<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui définit la structure du site
        $mymenu = array(
        // idPage titre
        'index' => 'Accueil',
        'cv' => 'CV',
        'projets' => 'Projets',
        'hobbies' => 'Hobbies',
        'infos-techniques' => 'Informations Techniques'
        );
        echo '<nav class="menu">
            <ul>';
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId == $pageId){
                echo '<li><a id="currentpage" href=', $pageId,'.php>',$pageParameters,'</a></li>';
            }
            else{
                $link = $pageId . ".php";
                echo '<li><a href=' . $link . '>' . $pageParameters . '</a></li>';
            }
        }
        echo '</ul>
            </nav>';
    }
?>





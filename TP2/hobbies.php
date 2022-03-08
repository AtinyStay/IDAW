<?php 
    require_once('template_header.php');
?>
        <h1>Mes hobbies</h1>
        <?php
                require_once('template_menu.php');
                renderMenuToHTML('hobbies');
            ?>
        <p>Voici la liste de mes différents hobbies :</p>
        <nav>
            <ul>
            <li>Animes</li>
            <li>Basketball</li>
            <li>Voyage</li>
            </ul>
            </nav>
<?php
    require_once('template_footer.php');
?>
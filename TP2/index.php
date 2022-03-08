<?php 
    require_once('template_header.php');
?>
        <div class="box">
            <h1>Page d'accueil</h1>
            <br/>
            <p>Bienvenue sur le site que j'ai fait dans le cadre de mon TP1 de IDAW <br/> Ceci est le premier site en HTML que je fais.</p>
            <?php
                require_once('template_menu.php');
                renderMenuToHTML('index');
            ?>
        </div>
<?php
    require_once('template_footer.php');
?>

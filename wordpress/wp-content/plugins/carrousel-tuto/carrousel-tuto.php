<?php
/* 
Plugin Name:       Tuto carrousel
Description:       permet de créer un carrousel, tuto plugin du cours
Version:           0.1
Author:            Hugo Lim
*/

add_action('init','carrousel_init'); 

/**
 * Permet d'initialiser les fonctionnalités liées au carrousel
 **/
function carrousel_init(){

      $labels = array(
        'name' => 'Slide',
        'singular_name' => 'Slide',
        'add_new' => 'Ajouter un Slide',
        'add_new_item' => 'Ajouter un nouveau Slide',
        'edit_item' => 'Editer un Slide',
        'new_item' => 'Nouvelle Slide',
        'view_item' => 'Voir l\' Slide',
        'search_items' => 'Rechercher un Slide',
        'not_found' => 'Aucun Slide',
        'not_found_in_trash' => 'Aucun Slide dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Slides'
      );

    register_post_type('slide',array(
        'public' => true,
        'labels' => $labels,
        'menu_position' => 9,
        'capability_type' => 'post',
        'supports' => array('title','thumbnail'),
    ));

    add_image_size('slider',1000,1000,true);
}


/**
 * Permet d'afficher le carrousel
 **/
function carrousel_show($limit=10){
    // On importe le javascript
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js",null,'3.6.0',true);
    wp_enqueue_script('slick',plugins_url().'/carrousel-tuto/js/slick.js',array('jquery'),'1.8.1',true);
    $slides = new WP_query("post_type=slide&posts_per_page=$limit");
    add_action('wp_footer','monsuperslider_script',30);
    echo '<div id="monsuperslider"> ';
    while($slides->have_posts()){
        $slides->the_post();
        global $post;
        the_post_thumbnail('slider');
    }
    echo '</div>';
}

function monsuperslider_script(){
    ?>
    <script type="text/javascript">
        (function($){
            $('#monsuperslider').slick();
        })(jQuery);
    </script>
    <?php
}

?>
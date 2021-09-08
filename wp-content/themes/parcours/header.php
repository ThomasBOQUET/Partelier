<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <?php 
        // après avoir activé l'option de menu dans le fichier functions.php
        // je peux positionner/générer mon menu
        //  https://developer.wordpress.org/reference/functions/wp_nav_menu/
        /* options à mettre dans le tableau de paramètres
          'menu'
          (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
          'menu_class'
          (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          'menu_id'
          (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
          'container'
          (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_class'
          (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
          'container_id'
          (string) The ID that is applied to the container.
        */
        wp_nav_menu([
            'menu' => 'Menu du jour'
        ]);
        ?>
        <nav>
          <ul class="left__nav">
            <li class="left__nav-item"><a href="./plan_de_site.html" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="./mentions_legales.html" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="./contact.html" class="left__nav-link">Contact</a></li>
          </ul>
        </nav>
      </header>
      <main class="right">
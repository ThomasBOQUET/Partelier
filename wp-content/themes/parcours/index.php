<?php
get_header();
/*
<div class="posts">
          <article class="post">
            <a href="" class="post__category post__category--color-team">team</a>
            <h3>Lorem ipsum dolor article 1</h3>
            <div class="post__meta">
              <img class="post__author-icon" src="../images/icon-dar.png" alt="">
              <strong class="post__author">Darren Collison</strong>
              <time datetime="2018-02-10">le 10 février 2018</time>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.</p>
            <a href="" class="post__link">Continue reading</a>
          </article>
*/ 
?>

<div class="posts">
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        // si on ne fait pas cette fonction, 
        // on a pas accès aux autres : the_title()
        the_post(); 
    ?>
    <article class="post"> 
    <h3><?php the_title(); ?></h3>
    <div class="post__meta">
        <img class="post__author-icon" src="../images/icon-dar.png" alt="">
        <strong class="post__author"><?php the_author(); ?></strong>
        <time datetime="2018-02-10"><?php the_date(); ?></time>
    </div>
    
 
    <?php /*the_content(); // tout le contenu de l'article */ ?>
    <?php the_excerpt(); // début du contenu de l'article ?>
    
    <a href="<?php the_permalink(); ?>" class="post__link">Continue reading</a>
    </article>
    <?php }
}

        


get_footer();
?>
<?php
/*
Template Name: Ster Kinekor
*/

get_header(); ?>
<div id="content" class="widecolumn">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( is_front_page() ) { ?>
<h2><?php the_title(); ?></h2>
<?php } else { ?>
<h1><?php the_title(); ?></h1>
<?php } ?>

<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

<?php comments_template( '', true ); ?>

<?php endwhile; endif ?>

</div>
<!--<div id="main">
    <?php //get_search_form(); ?>
    <h2>Archives by Month:</h2>
    <ul>
        <?php //wp_get_archives('type=monthly'); ?>
    </ul>   
    <h2>Archives by Subject:</h2>
    <ul>
        <?php //wp_list_categories(); ?>
    </ul>
</div>-->
<?php get_footer(); ?>

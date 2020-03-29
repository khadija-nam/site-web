 
<?php get_header();?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
<?php
while ( have_posts() ) : the_post();
the_content();
 

get_template_part( 'template-parts/content', 'page' );
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
endwhile; // End of the loop.



?>



<main>






<?php  get_footer();
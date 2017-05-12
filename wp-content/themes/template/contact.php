<?php 
/*
** Template name: Liên hệ
*/
get_header(); ?>
<main class="container">
<?php echo bc();?>
<div style="display:inline-block;width:100%">
<section> 
<?php if(have_posts()):?>          
<h1 class="page-title" style="margin-bottom:0"><span><?php the_title();?></span></h1>
<div class="content">
<?php the_content();?>
</div>
<?php endif;?>
<div>
<h3 style="color:#0babd1" class="lienhe"></h3>
<?php echo do_shortcode('[contact-form-7 id="4" title="Liên hệ"]');?>
</div>	
</section>
<?php include 'views/side.php';?>
</div>
</main>
<?php get_footer(); ?>

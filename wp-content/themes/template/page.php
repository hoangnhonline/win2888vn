<?php get_header(); ?>
<main class="container">
<?php echo bc();?>
<div style="display:inline-block;width:100%">
<section> 
<?php if(have_posts()):?>          
<h1 class="page-title" style="margin-bottom:0"><i class="fa fa-money"></i><span><?php the_title();?></span></h1>
<div class="content">
<?php the_content();?>
</div>
<?php endif;?>	
</section>
<?php include 'views/side.php';?>
</div>
</main>
<?php get_footer(); ?>

<?php get_header(); ?>
<main class="container">
<?php echo bc();?>
<div style="display:inline-block;width:100%">
<section> 
<?php if(have_posts()):?>          
<h1 class="page-title"><i class="fa fa-money"></i><span><?php single_cat_title();?></span></h1>
<ul class="cat">
<?php while(have_posts()): the_post();?>
<li>
<a href="<?php the_permalink();?>">
<div class="thumb">
<?php the_post_thumbnail();?>
</div>
</a>
<a href="<?php the_permalink();?>">
<div class="tomtat">
<h3><?php the_title();?></h3>
<?php the_excerpt();?>
</div>
</a>
</li>
<?php endwhile;?>
</ul>
<?php page_nav();?>
<?php endif;?>	
</section>
<?php include 'views/side.php';?>
</div>
</main>
<?php get_footer(); ?>

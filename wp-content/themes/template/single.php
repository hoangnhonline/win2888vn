<?php get_header(); ?>
<main class="container">
<?php echo bc();?>
<div style="display:inline-block;width:100%">
<section> 
<?php if(have_posts()):?>          
<h1 class="page-title"><i class="fa fa-money"></i><span><?php the_title();?></span></h1>
<div class="content">
<?php the_content();?>
</div>
<?php endif;?>	

<h4 class="page-title" style="margin-bottom:0"><i class="fa fa-money"></i><span>Tin liên quan</span></h4>
<div class="clear"></div>
<div style="display:inline-block;width:100%">
<ul class="cat-rel">
<?php $exc = get_the_ID();
$cats = get_the_category($post->ID);
$exc = $wp_query->post->ID;
$args = array('posts_per_page'=> -1, 'orderby' => 'rand', 'cat'=>$cats[0]->term_id );
$loop = new wp_query($args);
while($loop -> have_posts()) : $loop -> the_post();
if($exc != get_the_ID()){?>

<li>
<a href="<?php the_permalink();?>">
<?php the_title();?>
</a>
</li>

<?php }endwhile;?>
</ul>

	</div>	
		
</section>
<?php include 'views/side.php';?>
</div>
</main>
<?php get_footer(); ?>


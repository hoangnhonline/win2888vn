<?php get_header();?>
<style>
.products li{
	width:25%;
}
</style>
<?php echo do_shortcode('[metaslider id=23]');?>
<main class="container">

<div class="paragraph">
<h2 class="page-title-home">DỊCH VỤ TRỰC TUYẾN LODE2888</h2>
<div class="clear"></div>
<div style="display:inline-block;width:100%">
<ul class="products">
<?php $product = array('post_type' => 'post', 'posts_per_page' => 4, 'cat' => 4); $loop = new wp_query($product);
while($loop->have_posts()): $loop -> the_post();?>
<li>
<div class="figa">
<a href="<?php the_permalink();?>">
<div class="img-cat">
<?php the_post_thumbnail();?>
</div>
</a>
<a href="<?php the_permalink();?>">
<h3><?php the_title();?></h3></a>
<a class="xemthem" href="<?php the_permalink();?>">
Xem thêm &#x2192;</a>
</div>
</li>
<?php endwhile;?>
</ul>
</div>
</div>



<div class="paragraph">
<h2 class="page-title-home">TIN TỨC</h2>
<div class="clear"></div>
<div style="display:inline-block;width:100%">
<ul class="news">
<?php $product = array('post_type' => 'post', 'posts_per_page' => 3, 'cat' => 5); $loop = new wp_query($product);
while($loop->have_posts()): $loop -> the_post();?>
<li>
<div class="figa">
<a href="<?php the_permalink();?>">
<div class="img-cat">
<?php the_post_thumbnail();?>
</div>
</a>
<a href="<?php the_permalink();?>">
<h3><?php the_title();?></h3></a>
<?php the_excerpt();?>
</div>
</li>
<?php endwhile;?>
</ul>
</div>
</div>


</main>
<?php get_footer();?>

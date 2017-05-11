<div class="container">
<div class="doitac" style="inline-block;width:100%">
</div>
</div>
<?php dynamic_sidebar('footer');?>
<script src="<?php echo get_template_directory_uri();?>/assets/js/single.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/sli.js"></script>
<script>
jQuery.noConflict();
jQuery(document).ready(function($){
		 str = $('.woocommerce-Tabs-panel').text();
	    if($.trim(str) === "") {
     $('.wc-tabs-wrapper .tabs').remove();
	 $('.wc-tabs-wrapper').css('border-top', '0px');
   }
   var xhr = $('.fb-page').attr('data-href');
    if($.trim(xhr) === "") {
		$('#closefbchat').remove();
	}
	$('.info span').map(function(){
	if($.trim($(this).text()) === ""){
		$(this).remove();
	}
	});
   $('.rel').slice(4,100).remove();
	$('.thum').attr('href','javascript:;');
	$('.fa-align-justify').on('click', function(){
		$('.menu-menu-container').slideToggle();
		$('nav form').toggleClass('float');
	});

	$('<i style="color:#0c6f87; padding-right:8px" class="fa fa-angle-double-right"></i>').insertBefore('#menu-menu-phai a');
	$('#menu-menu .menu-item-has-children a').addClass('parent');
	$('#menu-menu .menu-item-has-children').addClass('dad');
	$('.sub-menu .menu-item-has-children').removeClass('dad');
	$('.sub-menu a').removeClass();
	$('#menu-menu .menu-item-has-children .sub-menu .menu-item-has-children a').addClass('parent');
	$('#menu-menu .menu-item-has-children .sub-menu .sub-menu a').removeClass();
	$('.parent').append('<i style="position: absolute;right: 3px;color:#fff;float:right" class="fa fa-sort-down"></i>');
$('<i class="hver fa fa-angle-right"></i>').insertBefore('.sub-menu a');
	$('#menu-menu .menu-item-has-children:first-child').hover(function(){
		$('#menu-menu .menu-item-has-children:first-child .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
	$('#menu-menu .menu-item-has-children:nth-child(2)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(2) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
	$('#menu-menu  .menu-item-has-children:nth-child(3)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(3) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
		$('#menu-menu .menu-item-has-children:nth-child(4)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(4) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
	$('#menu-menu  .menu-item-has-children:nth-child(5)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(5) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
		$('#menu-menu .menu-item-has-children:nth-child(6)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(6) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
	$('#menu-menu  .menu-item-has-children:nth-child(7)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(7) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
		$('#menu-menu .menu-item-has-children:nth-child(8)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(8) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
	$('#menu-menu  .menu-item-has-children:nth-child(9)').hover(function(){
		$('#menu-menu .menu-item-has-children:nth-child(9) .sub-menu').addClass('show');
		$('#menu-menu .sub-menu .sub-menu').removeClass('show');
	});
	$('#menu-menu .dad').on('mouseleave', function(){
		$('#menu-menu .sub-menu').removeClass('show');
	});
		$('#menu-menu .sub-menu .menu-item-has-children:first-child').hover(function(){
			$('#menu-menu .sub-menu .menu-item-has-children .sub-menu').hide();
		$('#menu-menu .sub-menu .menu-item-has-children:first-child .sub-menu').toggleClass('show');
	});
	$('#menu-menu .sub-menu .menu-item-has-children:nth-child(2)').hover(function(){
			$('#menu-menu .sub-menu .menu-item-has-children .sub-menu').hide();
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(2) .sub-menu').toggleClass('show');
	});
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(3)').hover(function(){
			$('#menu-menu .sub-menu .menu-item-has-children .sub-menu').hide();
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(3) .sub-menu').toggleClass('show');
	});
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(4)').hover(function(){
			$('#menu-menu .sub-menu .menu-item-has-children .sub-menu').hide();
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(4) .sub-menu').toggleClass('show');
	});
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(5)').hover(function(){
			$('#menu-menu .sub-menu .menu-item-has-children .sub-menu').hide();
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(5) .sub-menu').toggleClass('show');
	});
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(6)').hover(function(){
			$('#menu-menu .sub-menu .menu-item-has-children .sub-menu').hide();
		$('#menu-menu .sub-menu .menu-item-has-children:nth-child(6) .sub-menu').toggleClass('show');
	});
		$('.next a').append('<span class="next-1">»</span>');
		$('.prev a').append('<span class="prev-1">«</span>');
			$('a.next').append('<span class="next-1">»</span>');
		$('a.prev').append('<span class="prev-1">«</span>');
		

				jQuery('.fb-page1').toggleClass('hide');
			jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Chat Tư Vấn').css({'bottom':0});
		jQuery('#closefbchat').click(function(){
			jQuery('.fb-page1').toggleClass('hide');
			if(jQuery('.fb-page1').hasClass('hide')){
				jQuery('#closefbchat').html('<i class="fa fa-comments fa-2x"></i> Chat Tư Vấn').css({'bottom':0});
			}
			else{
				jQuery('#closefbchat').text('Tắt Chat').css({'bottom':299});
			}
		});
			txt = $('.woocommerce-breadcrumb .current, .breadcrumb .current').text();
	if(txt.length > 25){
	$('.woocommerce-breadcrumb .current, .breadcrumb .current').text(txt.substring(0,25) + '...');}
		$('aside').each(function(){
			txt = $(this).find('.box').text();
			if($.trim(txt) === ''){
				$(this).remove();
			}
		});
});
 (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<?php wp_footer();?>
</body></html>

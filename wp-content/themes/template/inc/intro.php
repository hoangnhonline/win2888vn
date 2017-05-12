<?php
add_action('widgets_init', create_function('', "register_widget('head');"));
class head extends WP_Widget {

	function head() {
		$widget_ops = array( 'classname' => 'head-edit', 'mota' => __('header', 'genesis') );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'head-edit' );
		$this->WP_Widget( 'head-edit', __('header', 'genesis'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tel' => ''
		) );

			$gt=$before_widget;
			if (!empty($instance['title']))
				$gt=$gt.$before_title . apply_filters('widget_title', $instance['title']) . $after_title;
	$gt=$gt.'
<div class="hotline">
<a href="tel:'.$instance['tel'].'"><i class="fa fa-phone"></i>'.$instance['tel'].'</a>
<a href="'.site_url().'/lien-he"><i class="fa fa-map-marker"></i> Chỉ đường</a>
</div> 
'; 
	global $post;
	$dk=true;
	$gt=$gt.$after_widget;
	if ($dk)
		echo $gt;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	//Hien thi form cap nhat widget
	function form($instance) {

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tel' => ''
		) );

?>
		<p><label for="<?php echo $this->get_field_id('tel'); ?>"><?php _e('Hotline', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tel'); ?>" name="<?php echo $this->get_field_name('tel'); ?>" value="<?php echo esc_attr( $instance['tel'] ); ?>"/></p>
		
		<?php
	}
}
?>
<?php
add_action('widgets_init', create_function('', "register_widget('social');"));
class social extends WP_Widget {

	function social() {
		$widget_ops = array( 'classname' => 'social-edit', 'mota' => __('social edit', 'genesis') );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'social-edit' );
		$this->WP_Widget( 'social-edit', __('tuvan', 'genesis'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tv' => '',
			'kd' => '',
			'phone' => '',
			'e' => '',
			'phone2' => '',
			'e2' => ''
		) );

			$gt=$before_widget;
			if (!empty($instance['title']))
				$gt=$gt.$before_title . apply_filters('widget_title', $instance['title']) . $after_title;
	$gt=$gt.'
<strong style="color:#0c6f87;font-weight:600"><i style="padding-right:12px" class="fa fa-commenting"></i>'.$instance['tv'].'</strong><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['phone'].'</i><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['e'].'</i><br>
<br>
<strong style="color:#0c6f87;font-weight:600"><i style="padding-right:12px" class="fa fa-user"></i>'.$instance['kd'].'</strong><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['phone2'].'</i><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['e2'].'</i>
';
	global $post;
	$dk=true;
	$gt=$gt.$after_widget;
	if ($dk)
		echo $gt;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	//Hien thi form cap nhat widget
	function form($instance) {

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tv' => '',
			'kd' => '',
			'phone' => '',
			'e' => '',
			'phone2' => '',
			'e2' => ''
		) );

?>	
		<p><label for="<?php echo $this->get_field_id('tv'); ?>"><?php _e('Tư vấn', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tv'); ?>" name="<?php echo $this->get_field_name('tv'); ?>" value="<?php echo esc_attr( $instance['tv'] ); ?>"/></p>
		<input style="width:95%;" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr( $instance['phone'] ); ?>"/></p>
		<input style="width:95%;" id="<?php echo $this->get_field_id('e'); ?>" name="<?php echo $this->get_field_name('e'); ?>" value="<?php echo esc_attr( $instance['e'] ); ?>"/></p>

		<p><label for="<?php echo $this->get_field_id('kd'); ?>"><?php _e('Kinh doanh', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('kd'); ?>" name="<?php echo $this->get_field_name('kd'); ?>" value="<?php echo esc_attr( $instance['kd'] ); ?>"/></p>
		<input style="width:95%;" id="<?php echo $this->get_field_id('phone2'); ?>" name="<?php echo $this->get_field_name('phone2'); ?>" value="<?php echo esc_attr( $instance['phone2'] ); ?>"/></p>
		<input style="width:95%;" id="<?php echo $this->get_field_id('e2'); ?>" name="<?php echo $this->get_field_name('e2'); ?>" value="<?php echo esc_attr( $instance['e2'] ); ?>"/></p>
		
		<?php
	}
}
?>
<?php
add_action('widgets_init', create_function('', "register_widget('footer');"));
class footer extends WP_Widget {

	function footer() {
		$widget_ops = array( 'classname' => 'footer-edit', 'mota' => __('footer edit', 'genesis') );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'footer-edit' );
		$this->WP_Widget( 'footer-edit', __('footer', 'genesis'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tieudetrang' => '',
			'motatrang' => '',
			'tieudecat' => '',
			'ndcat' =>'',
			'ndcat2' => '',
			'tieudecat2' => '',
			'tieudeduan' =>'',
			'tieudesp' =>'',
			'tieudedm' => '',
			'tieudetv' => '',
			'tieudelh' => '',
			'tencongty' => '',
			'cn' => '',
			'address' => '',
			'tel' => '',
			'mail' => '',
			'fax' => '',
			'map' => '',
			'text' => '',
			'chat' => '',
			'tt' => ''
		) );

			$gt=$before_widget;
			if (!empty($instance['title']))
				$gt=$gt.$before_title . apply_filters('widget_title', $instance['title']) . $after_title;
	$gt=$gt.'
<footer>
<div class="container">
<div class="info">
<strong>'.$instance['tencongty'].'</strong><br>
<span>'.$instance['address'].'</span>
<span>'.$instance['tel'].'</span>
<span>'.$instance['mail'].'</span>
<span>'.$instance['fax'].'</span>
</div>
<div class="info"><iframe src="'.$instance['map'].'" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</footer>
<div class="text">'.$instance['text'].'</div>
<div class="fbchatbox hidden-xs" style="position:fixed;right:5px;bottom:0px;z-index:9999">
		<div class="fb-page fb-page1" data-href="'.$instance['chat'].'" data-small-header="true" data-adapt-container-width="false" data-height="300" data-width="300" data-hide-cover="true" data-show-facepile="true" data-show-posts="false" data-tabs="messages"><div class="fb-xfbml-parse-ignore"></div></div>
		<span id="closefbchat" style="white-space: nowrap;
    position: absolute;
    right: 2px;
    bottom: 0px;
    padding: 5px 25px;
    background: #000;
    color: rgb(255, 255, 255);
    cursor: pointer;
    border-radius: 4px 4px 0 0;    box-shadow: 3px 0px 7px -2px;">Tắt Chat</span>
</div>	
	<script>
jQuery.noConflict();
jQuery(document).ready(function($){
		$(".name").text("'.$instance['tieudetrang'].'");
		$(".des").text("'.$instance['motatrang'].'");
		$(".duantb").text("'.$instance['tieudeduan'].'");
		$(".sphome").text("'.$instance['tieudesp'].'");
		$(".tt").text("'.$instance['tt'].'");
		$(".dmsp").text("'.$instance['tieudedm'].'");
		$(".hotro").text("'.$instance['tieudetv'].'");
		$(".lienhe").text("'.$instance['tieudelh'].'");
		$(".cate-home div:first-child .title-cat-home").text("'.$instance['tieudecat'].'");
		$(".cate-home div:first-child .des-cat-home").text("'.$instance['ndcat'].'");
		$(".cate-home div:nth-child(2) .title-cat-home").text("'.$instance['tieudecat2'].'");
		$(".cate-home div:nth-child(2) .des-cat-home").text("'.$instance['ndcat2'].'");
	});
	</script>
';
	global $post;
	$dk=true;
	$gt=$gt.$after_widget;
	if ($dk)
		echo $gt;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	//Hien thi form cap nhat widget
	function form($instance) {

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tieudetrang' => '',
			'motatrang' => '',
			'tieudecat' => '',
			'ndcat' =>'',
			'ndcat2' => '',
			'tieudecat2' => '',
			'tieudeduan' =>'',
			'tieudesp' =>'',
			'tieudedm' => '',
			'tieudetv' => '',
			'tieudelh' => '',
			'tencongty' => '',
			'cn' => '',
			'address' => '',
			'tel' => '',
			'mail' => '',
			'fax' => '',
			'map' => '',
			'text' => '',
			'chat' => '',
			'tt' => ''
		) );

?>	
	
		
		<p><label for="<?php echo $this->get_field_id('tieudedm'); ?>"><?php _e('Tiêu đề danh mục phải', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tieudedm'); ?>" name="<?php echo $this->get_field_name('tieudedm'); ?>" value="<?php echo esc_attr( $instance['tieudedm'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('tieudetv'); ?>"><?php _e('Tiêu đề mục tư vấn', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tieudetv'); ?>" name="<?php echo $this->get_field_name('tieudetv'); ?>" value="<?php echo esc_attr( $instance['tieudetv'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('tieudelh'); ?>"><?php _e('Tiêu đề liên hệ', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tieudelh'); ?>" name="<?php echo $this->get_field_name('tieudelh'); ?>" value="<?php echo esc_attr( $instance['tieudelh'] ); ?>"/></p>
		
		
		<p><label for="<?php echo $this->get_field_id('tencongty'); ?>"><?php _e('Tên công ty', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tencongty'); ?>" name="<?php echo $this->get_field_name('tencongty'); ?>" value="<?php echo esc_attr( $instance['tencongty'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Địa chỉ', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo esc_attr( $instance['address'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('cn'); ?>"><?php _e('Địa chỉ chi nhánh', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('cn'); ?>" name="<?php echo $this->get_field_name('cn'); ?>" value="<?php echo esc_attr( $instance['cn'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('tel'); ?>"><?php _e('Điện thoại', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('tel'); ?>" name="<?php echo $this->get_field_name('tel'); ?>" value="<?php echo esc_attr( $instance['tel'] ); ?>"/></p>

		<p><label for="<?php echo $this->get_field_id('mail'); ?>"><?php _e('Mail', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('mail'); ?>" name="<?php echo $this->get_field_name('mail'); ?>" value="<?php echo esc_attr( $instance['mail'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('fax'); ?>"><?php _e('Fax', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" value="<?php echo esc_attr( $instance['fax'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('map'); ?>"><?php _e('Google Maps', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('map'); ?>" name="<?php echo $this->get_field_name('map'); ?>" value="<?php echo esc_attr( $instance['map'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('End', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" value="<?php echo esc_attr( $instance['text'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('chat'); ?>"><?php _e('Chat fanpage', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('chat'); ?>" name="<?php echo $this->get_field_name('chat'); ?>" value="<?php echo esc_attr( $instance['chat'] ); ?>"/></p>
		<?php
	}
}
?>

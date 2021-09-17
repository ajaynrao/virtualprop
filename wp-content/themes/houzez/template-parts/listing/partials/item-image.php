<?php global $post, $ele_thumbnail_size; 
$thumbnail_size = !empty($ele_thumbnail_size) ? $ele_thumbnail_size : 'houzez-item-image-1';
?>
<div class="listing-image-wrap">
	<div class="listing-thumb">
		<a href="javascript:void(0)" class="listing-featured-thumb hover-effect">
			<?php
		    if(has_post_video( $post->ID )) {
				the_post_video( $size );
			}elseif( has_post_thumbnail( $post->ID ) && get_the_post_thumbnail($post->ID) != '' ) {
		        the_post_thumbnail( $thumbnail_size, array('class' => 'img-fluid') );
		    }else{
		        houzez_image_placeholder( $thumbnail_size );
		    }
		    ?>
		</a><!-- hover-effect -->
	</div>
</div>

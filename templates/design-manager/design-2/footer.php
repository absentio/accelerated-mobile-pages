<?php global $redux_builder_amp;  
if ( is_home() ) {
  $ampforwp_backto_nonamp = home_url();
} elseif ( is_single() ){
  $ampforwp_backto_nonamp = get_permalink( $post->ID );
} else {
  $ampforwp_backto_nonamp = '';
}
?>
<footer class="container">
    <div id="footer">
        <p><a href="#header"> <?php _e('Top','ampforwp');?></a> <?php
				//24. Added an options button for switching on/off link to non amp page
				if($redux_builder_amp['amp-footer-link-non-amp-page']=='1'){ if ( $ampforwp_backto_nonamp ) { ?>
					 |
        	<a href="<?php echo $ampforwp_backto_nonamp; ?>"><?php _e('View Non-AMP Version','ampforwp');?></a> <?php  } }?>
        </p>
        <p><?php echo $redux_builder_amp['amp-footer-text']; ?> </p>
    </div>
</footer>
<?php do_action('ampforwp_global_after_footer'); ?>

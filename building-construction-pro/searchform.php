<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php _e('Search this site...','Ruh Premium'); ?>" onblur="if (this.value == '') {this.value = '<?php _e('Search this site...','Ruh Premium'); ?>';}" onfocus="if (this.value == '<?php _e('Search this site...','Ruh Premium'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'Search', 'Ruh Premium' ); ?>" />
	</fieldset>
</form>

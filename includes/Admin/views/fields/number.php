
<input class="<?php echo esc_attr( $value['class'] ); ?>" id="<?php echo esc_html($value['name']); ?>" type="number" name="<?php echo esc_html($this->_optionName."[".$value['name']."]"); ?>" value="<?php echo isset( $setting_options[$value['name']] ) ? $setting_options[$value['name']] : esc_attr($value['value']); ?>" placeholder="<?php echo esc_attr($value['placeholder']); ?>" <?php if( isset($value['is_pro']) && $value['is_pro'] == true && ! Samply\Helper::isPro()) { ?>disabled<?php } ?> min=0>
<?php
$settings = isset($args['setting']) && $args['setting'] ? $args['setting'] : array();
$value = isset($args['value']) && $args['value'] ? $args['value'] : ($settings['multiple'] ? array() : 0);
?>

<select <?= isset($settings['multiple']) && $settings['multiple'] ? 'multiple' : '' ?> name="<?= esc_attr( $settings['param_name'] ) ?>" class="wpb_vc_param_value wpb_el_type_dropdown_select2 <?= esc_attr( $settings['param_name'] ) ?> <?= esc_attr( $settings['type'] ) ?>_field">
    <?php foreach ($settings['value'] as $k => $val): ?>
        <?php
            if ( is_numeric($k) && (is_string($val) || is_numeric($val)) ) {
                $k = $val;
            }
            $k = __($k, "js_composer");
            $selected = '';
            if(!is_array($value)) {
                $param_value_arr = explode(',', $value);
            } else {
                $param_value_arr = $value;
            }
            if ($value !== '' && in_array($val, $param_value_arr)) {
                $selected = ' selected="selected"';
            }
        ?>
        <option class="<?= $val ?>" value="<?= $val ?>" <?= $selected ?>>
            <?= $k ?>
        </option>
    <?php endforeach; ?>
</select>
<style>
    .wpb_el_type_dropdown_select2 .select2-selection {
        padding: 7px;
        border: 1px solid #8c8f94;
    }
    .select2-container .select2-selection--single {
        height: auto;
    }
</style>

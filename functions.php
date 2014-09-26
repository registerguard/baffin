<?php
//
// Adds Pure class to form tag.
// See: http://www.gravityhelp.com/documentation/page/Gform_form_tag
// See: http://purecss.io/forms/
// Note: Have no idea what the 10 and 2 are
//

add_action("gform_field_css_class", "custom_class", 10, 3);
function custom_class($classes, $field, $form){
	$classes .= " pure-form";
	return $classes;
}

add_filter("gform_column_input_1_62_1", "set_column", 10, 5);
function set_column($input_info, $field, $column, $value, $form_id){
	return array("type" => "select", "choices" => "First Choice,Second Choice");
}

?>

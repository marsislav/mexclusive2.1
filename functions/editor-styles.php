<?php
function mexclusive21_add_editor_styles() {
// Add custom editor styles
add_editor_style('/assets/css/editor-styles.css');
}
add_action('admin_init', 'mexclusive21_add_editor_styles');

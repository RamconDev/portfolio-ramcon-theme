<?php

include_once get_template_directory() . '/includes/setup-theme.php';

/**
 * ✅ Enqueue scripts and styles for the theme.
 */
include_once get_template_directory() . '/includes/enqueues.php';

/**
 * ✅ Register theme support features.
 */
include_once get_template_directory() . '/includes/shortcodes.php';

/**
 * ✅ Register custom post types and taxonomies.
 */
include_once get_template_directory() . '/includes/custom_post_types.php';

/**
 * ✅ Register Handlers.
 */
include_once get_template_directory() . '/includes/handlers.php';
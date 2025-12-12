<?php
/**
 * ✅ Shortcodes example.
 */
function example_shortcode( $atts ) {
    $atts = shortcode_atts(
        [
            'message' => '¡Shortcode message!',
        ],
        $atts,
        'example_shortcode'
    );
    ob_start();
    ?>
        <p><?php echo $atts['message']; ?></p>
    <?php
    return ob_get_clean();
}
add_shortcode('example_shortcode', 'example_shortcode');

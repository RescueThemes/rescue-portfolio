<?php
function rescue_portfolio_shortcode( $atts = array() ) {
	
    ob_start();
    
    $defaults = array(
				'posts_per_page' => '-1',
				'orderby'        => 'post_date',
				'order'          => 'ASC',
				'filter' 		 => '',
		);
		
	$atts = shortcode_atts( $defaults, $atts );
	
    rescue_portfolio_show($atts);

    $content = ob_get_clean();
         
    return $content;
}
add_shortcode('rescue_portfolio', 'rescue_portfolio_shortcode');

function rescue_portfolio_show( $atts = array() ) {
	
     require (RESCUE_PORTFOLIO_TEMPLATE_DIR . "/includes/template.php");
     
}
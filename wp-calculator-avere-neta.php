<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Don't allow direct access
/*
Plugin Name: Calculator Averea Neta
Plugin URI: https://nanotel.ro/
Description: Calculator Averea Neta
Author: Dragos Schiopu, Ionel Crisu
Version: 1.0
Author URI: https://dragosschiopu.ro/
*/

define('CALC_BASE_URL', plugins_url('',  __FILE__ ));

function calc_init() {
    calc_register_shortcodes();
}

function calc_register_shortcodes() {
    add_shortcode('calculator_avere_neta', 'calc_shortcode_impl');
}

function calc_enqueueScripts() {
    wp_enqueue_script('jquery');

    wp_register_style('calc_css', CALC_BASE_URL . '/css/index.css');
    wp_enqueue_style('calc_css');

    wp_register_script('calc_js', CALC_BASE_URL . '/js/index.js', ['jquery'], 'v1', true);
    wp_enqueue_script('calc_js');
}

function calc_shortcode_impl($atts, $content = null) {
    $params = shortcode_atts(array(
        'test_input_param' => null
    ), $atts);

    ob_start();
    ?>
	<div class="calc_wrapper">
	
		 <div class="calc_wapper_active">
		 	<h3> ACTIVE </h3>
			<div class="input_holder"><p> Cash</p>
				<input type="text" class="a1 input_css" value="0"><span> € </span>
		    </div>
		    <div class="input_holder"><p> Conturi bancare</p>
		        <input type="text" class="a2 input_css" value="0"><span> € </span>
		    </div>		
		   	<div class="input_holder"><p> Depozite bancare</p>
		        <input type="text" class="a3 input_css" value="0"><span> € </span>
		    </div>	  
		   	<div class="input_holder"><p> Planuri de pensie (pil. II si III)</p>
		        <input type="text" class="a4 input_css" value="0"><span> € </span>
		    </div>	
		    <div class="input_holder"><p> Bunuri imobiliare (apartamente, case, terenuri)</p>
		        <input type="text" class="a5 input_css" value="0"><span> € </span>
		    </div>
		    <div class="input_holder"><p> Masini si alte vehicule</p>
		        <input type="text" class="a6 input_css" value="0"><span> € </span>
		    </div>				    
		   	<div class="input_holder"><p> Actiuni, obligatiuni, fonduri mutuale</p>
		        <input type="text" class="a7 input_css" value="0"><span> € </span>
		    </div>		
		   	<div class="input_holder"><p> Proprietati intelectuale</p>
		        <input type="text" class="a8 input_css" value="0"><span> € </span>
		    </div>			
		    <div class="input_holder"><p> Afaceri</p>
		        <input type="text" class="a9 input_css" value="0"><span> € </span>
		    </div>			    
		    <div class="input_holder"><p> Alte active (aur, bijuterii, colectii)</p>
		        <input type="text" class="a10 input_css" value="0"><span> € </span>
		    </div>		        
     	</div>
     
        <div class="calc_wapper_datorii"> 
        	<h3> DATORII </h3>
		    <div class="input_holder"><p> Credite ipotecar</p>
		        <input type="text" class="d1 input_css" value="0"><span> € </span>
		    </div>
		    <div class="input_holder"><p> Credite auto</p>
		        <input type="text" class="d2 input_css" value="0"><span> € </span>
		    </div>
		   	<div class="input_holder"><p> Credite de nevoi personale</p>
		        <input type="text" class="d3 input_css" value="0"><span> € </span>
		    </div>
		   	<div class="input_holder"><p> Card de credit</p>
		        <input type="text" class="d4 input_css" value="0"><span> € </span>
		    </div>
		   	<div class="input_holder"><p> Imprumuturi</p>
		        <input type="text" class="d5 input_css" value="0"><span> € </span>
		    </div>
		   	<div class="input_holder"><p> Alte datorii</p>
		        <input type="text" class="d6 input_css" value="0"><span> € </span>
		    </div>
        </div>
    </div>         

    <div class="result">
		<a class="calculate_btn" href="#">CALCULEAZĂ</a>
		<p><span class="result_placeholder"></span></p>
	</div>
        
 
    <?php
    return ob_get_clean();
}

add_action('wp_enqueue_scripts', 'calc_enqueueScripts');
add_action('init', 'calc_init');
?>

<?php
/*
Plugin Name: Pregnancy Weight Gain Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/pregnancy-weight-gain-calculator/
Description: This pregnancy weight gain calculator gives a recommended weight increase plan every week based on the user’s body weight before pregnancy and the parameters provided by the IOM (the Institute of Medicine).
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_pregnancy_weight_gain_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Pregnancy Weight Gain Calculator by Calculator.iO";

function display_ci_pregnancy_weight_gain_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Pregnancy Weight Gain Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_pregnancy_weight_gain_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_pregnancy_weight_gain_calculator', 'display_ci_pregnancy_weight_gain_calculator' );
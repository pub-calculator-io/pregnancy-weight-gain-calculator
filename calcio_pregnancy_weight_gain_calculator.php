<?php
/*
Plugin Name: Pregnancy Weight Gain Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/pregnancy-weight-gain-calculator/
Description: Track your healthy pregnancy weight gain with our free calculator. Get a personalized weekly weight plan based on your pre-pregnancy BMI and IOM guidelines.
Version: 1.0.0
Author: www.calculator.io / Pregnancy Weight Gain Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_pregnancy_weight_gain_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Pregnancy Weight Gain Calculator by www.calculator.io";

function calcio_pregnancy_weight_gain_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Pregnancy Weight Gain Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_pregnancy_weight_gain_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_pregnancy_weight_gain_calculator', 'calcio_pregnancy_weight_gain_calculator_shortcode' );
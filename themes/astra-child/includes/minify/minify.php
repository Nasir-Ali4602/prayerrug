<?php

global $ThemeHeaderStylem, $ThemeBannerStyle, $ThemeFooterStyle;

use MatthiasMullie\Minify;

/* .....................Css Minify Code.................... */
$PathCss1 = get_stylesheet_directory() . '/css/bootstrap.min.css';
$PathCss3 = get_stylesheet_directory() . '/css/owl.theme.default.min.css';
$PathCss4 = get_stylesheet_directory() . '/css/owl.carousel.min.css';
$PathCss6 = get_stylesheet_directory() . '/css/theme.css';
$PathCss7 = get_stylesheet_directory() . '/css/responsive.css';

$MinifierCss = new Minify\CSS($PathCss1, $PathCss3, $PathCss4, $PathCss6, $PathCss7);
/* ....................... */
$PathCssFileSave = get_stylesheet_directory() . '/css/main.css';
$MinifierCss->minify($PathCssFileSave);
/* ................Js Minify Code.................... */
$PathJS1 = get_stylesheet_directory() . '/js/jquery.js';
$PathJS2 = get_stylesheet_directory() . '/js/bootstrap.bundle.min.js';
$PathJS3 = get_stylesheet_directory() . '/js/owl.carousel.min.js';
$PathJS4 = get_stylesheet_directory() . '/js/theme.js';
$MinifierJS = new Minify\JS($PathJS1, $PathJS2, $PathJS3, $PathJS4);
/* ....................... */
$PathJSFileSave = get_stylesheet_directory() . '/js/main.js';
$MinifierJS->minify($PathJSFileSave);

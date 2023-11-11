<?php
wp_enqueue_style('stylesheet',get_stylesheet_uri());
wp_enqueue_style('style-boots',get_template_directory_uri().'/assets/boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css');
wp_enqueue_script('script-js',get_template_directory_uri().'/assets/boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js');

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


register_sidebar([
    'name'=>'BD Logo',
    'id'=>'bdlogo',
    'before_widget'=>'',
    'after_widget'=>''

]);

register_nav_menus([
 'PM'=>'Primary'
]);

register_sidebar([
    'name'=>'Hero title',
    'name'=>'herotitle',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Card1',
    'name'=>'herocard1',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Card2',
    'name'=>'herocard2',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero Card3',
    'name'=>'herocard3',
    'before_widget'=>'',
    'after_widget'=>''
]);
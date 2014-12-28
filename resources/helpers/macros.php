<?php

// Here I put all my macro for HTMLBuilder

HTML::macro('sidebar_item', function($text, $route, $icon = false, $firstLevel = false, $hasChildren = false)
{
    // Handle named route or full path to action
    $link = (strpos($route, '@') !== false) ? action($route) : route($route);

    $html = '';
    $html .= '<a href="'.$link.'">';

    if ($icon)
        $html .= '<i class="menu-icon fa fa-'.$icon.'"></i>';

    if ($firstLevel)
        $html .= '<span class="menu-text">'.$text.'</span>';
    else
        $html .= $text;

    if ($hasChildren)
        $html .= '<b class="arrow fa fa-angle-down"></b>';

    $html .= '</a>';

    return $html;
});

HTML::macro('sidebar_class', function($path)
{
    $classes = '';

    if (Request::segment(1) === $path)
        $classes .= ' active';
    else
        $classes = 'hover';

    return 'class="'.$classes.'"';
});
<?php

// Here I put all my macro for HTMLBuilder

HTML::macro('sidebar_item', function($text, $route, $icon = 'cutlery', $firstLevel = false, $hasChildren = false)
{
    // Handle named route or full path to action
    $link = (strpos($route, '@') !== false) ? action($route) : route($route);

    $html = '';
    $html .= '<a href="'.$link.'">';
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

<?php

function select_rgb($color){
    $bg = '#fff';
    $color = implode('',$color);
    switch ($color){
        case 'r':
            $bg = '#f00';
            break;
        case 'g':
            $bg = '#0f0';
            break;
        case 'b':
            $bg = '#00f';
            break;
        case 'rg':
            $bg = '#ff0';
            break;
        case 'rb':
            $bg = '#f0f';
            break;
        case 'gb':
            $bg = '#0ff';
            break;
        case 'rgb':
            $bg = '#fff';
            break;
        default:
            $bg = '#000';
            break;
    }
    return $bg;
}

echo 'here is some changes in universe';
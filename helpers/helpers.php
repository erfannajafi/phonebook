<?php

function site_url($route){
    return $_ENV['BASE_URL'] . $route;
}

function asset_url($route){
    return site_url("assets/") . $route;
}


function random_element($arr){
    shuffle($arr);
    return array_pop($arr);
}
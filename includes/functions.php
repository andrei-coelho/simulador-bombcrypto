<?php 

define("CONF", [
    "url" => "http://localhost/simulador-bombcrypto"
]);

function image($uri){
    echo CONF['url']."/images/".$uri;
}

function url($uri=""){
    echo ($uri != "" ? CONF['url']."/index.php?".$uri : CONF['url']);
}

function video($uri){
    echo CONF['url']."/videos_partidas/".$uri; 
}
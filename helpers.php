<?php

function render(string $path, array $vars = []){
    if(file_exists($path)){
        foreach($vars as $key => $value){
            $$key = $value;
        }
        include $path;
    }
    else
        die("File is not exist");
}
<?php

if(!file_exists('todos')){
    return null;
}

$string = file_get_contents('todos');

$todos = explode("\n", $string);

array_pop($todos);

return $todos;

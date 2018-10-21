<?php

$callback = filter_input(INPUT_GET, 'callback', FILTER_SANITIZE_STRING);

$data = array(
    array(
        'name' => 'John',
        'surname' => 'Golidof',
        'age' => '27',
    ),
    array(
        'name' => 'Robert',
        'surname' => 'Wonder',
        'age' => '32',
    ),
    array(
        'name' => 'Anna',
        'surname' => 'Binder',
        'age' => '26',
    ),
    array(
        'name' => 'Elizabeth',
        'surname' => 'Greeneye',
        'age' => '33',
    ),
);


echo $callback.'('.json_encode($data).')';
die;



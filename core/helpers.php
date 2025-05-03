<?php

function dump(mixed $array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function dumpDie(mixed $array): void
{
    dump($array);
    die;
}

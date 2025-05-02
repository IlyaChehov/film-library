<?php

function dump(array $array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function dumpDie(array $array): void
{
    dump($array);
    die;
}

<?php

function dd($data) {
    echo "<pre>";
    print_r($data);
    die;
}

function base_url($path = '') {
    return BASE_URL . $path;
}
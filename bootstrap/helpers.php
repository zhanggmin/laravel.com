<?php

function make_doc_excerpt($value)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ',', strip_tags($value)));
    return str_limit($excerpt, 200);
}

function make_doc_title($value)
{
    $regex = '#<h1>(.*?)</h1>#';
    $code = preg_match($regex, $value, $matches);
    return $matches[1];
}
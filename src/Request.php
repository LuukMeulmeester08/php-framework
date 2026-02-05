<?php

namespace Framework;

class Request
{
public string $method;
public string $path;
public array $queryParameters;
public array $postParameters;

public function  __construct()
{
    $this->method = $_SERVER['REQUEST_METHOD'];
    $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $this->queryParameters = $_GET;
    $this->postParameters = $_POST;
}
}
<?php

namespace Framework;

class Response
{
public int $responseCode;
public string $body;

public string $headers;

public function __construct(string $body, int $responseCode = 200, string $headers = ''){
    $this->body = $body;
    $this->responseCode = $responseCode;
    $this->headers = $headers;
}
public function echo():void{
    http_response_code($this->responseCode);
    echo $this->body;
}
}
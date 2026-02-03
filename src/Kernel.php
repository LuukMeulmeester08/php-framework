<?php

namespace Framework;

use framework\Request;
use framework\Response;

class Kernel
{
public function __construct(){

}
public function handle(Request $request): Response{
    $name = $request->queryParameters['name'] ?? null;
    return new Response('Hello '.$name.'!');
}
}
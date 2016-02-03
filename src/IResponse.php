<?php

namespace Http;

interface IResponse
{
    public function setStatusCode($statusCode, $statusText = null);
    public function getStatusCode();
    public function addHeader($name, $value);
    public function setHeader($name, $value);
    public function getHeaders();
    public function addCookie(ICookie $cookie);
    public function deleteCookie(ICookie $cookie);
    public function setContent($content);
    public function getContent();
    public function redirect($url);
}
<?php

$rotas[""] = array(
    "http" => "GET",
    "rota" => "/",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "index"
);

$rotas["produto"] = array(
    "http" => "GET",
    "rota" => "/produtos",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "produtos"
);

$rotas["carrinho"] = array(
    "http" => "GET",
    "rota" => "/carrinho",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "carrinho"
);

$rotas["erro404"] = array(
    "http" => "GET",
    "rota" => "/404",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "erro404"
);

$rotas["entrar"] = array(
    "http" => "GET",
    "rota" => "/entrar",
    "controller" => "App\\Controllers\\Paginas",
    "funcao" => "entrar"
);

$rotas["login"] = array(
    "http" => "POST",
    "rota" => "/login",
    "controller" => "App\\Controllers\\Autenticacao",
    "funcao" => "login"
);

$rotas["logout"] = array(
    "http" => "POST",
    "rota" => "/sair",
    "controller" => "App\\Controllers\\Autenticacao",
    "funcao" => "logout"
);
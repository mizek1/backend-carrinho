<?php

namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\Produto;
use App\Models\BD\ProdutoDao;

class Paginas extends ControladorCore
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $pDao = new ProdutoDao();
        $produtos = $pDao->getProdutos();
        $this->addDadosPagina(
            "produtos",
            $produtos
        );
        $this->addTituloPagina("Página Inicial");
        $this->carregarPagina("v_home");
    }

    public function produto($codigo)
    {
        var_dump($codigo);
        $this->addTituloPagina("Página de produto");
        $this->carregarPagina("v_produto");
    }

    public function carrinho()
    {
        $this->addTituloPagina("Página Carrinho");
        $this->carregarPagina("v_carrinho");
    }

    public function entrar()
    {
        if (!empty($_SESSION["erro_autenticacao"])) {
            $erro_login = $_SESSION["erro_autenticacao"];
            unset($_SESSION["erro_autenticacao"]);
            $this->addDadosPagina("erro_autenticacao", $erro_login);
        }
        $this->addTituloPagina("Login Usuário");
        $this->carregarPagina("v_login");
    }

    public function sobre()
    {
        echo __FUNCTION__;
    }

    public function erro404($segmento)
    {
        $this->addTituloPagina("Não encontrada (404)");
        $this->addDadosPagina("segmento", $segmento);
        $this->carregarPagina("erro404");
    }
}

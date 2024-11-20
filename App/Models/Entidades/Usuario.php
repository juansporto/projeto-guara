<?php

namespace App\Models\Entidades;
/*
Cria a entidade e cria suas variáveis, que só podem ser acessadas por meio dos métodos getter and setters por serem privadas
*/
class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $listaPermissoes;
    public function getListaPermissoes()
    {
        return $this->listaPermissoes;
    }

    public function setListaPermissoes($listaPermissoes)
    {
        $this->listaPermissoes = $listaPermissoes;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
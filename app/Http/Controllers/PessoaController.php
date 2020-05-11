<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

class PessoaController extends Controller
{
    private $generator;

    public function __construct()
    {
        $this->generator = Factory::create('pt_BR');
    }

    public function gerarPessoa()
    {
        return [
            'nome' => $this->generator->name,
            'cpf' => $this->generator->cpf,
            'rg' => $this->generator->rg,
            'telefone' => $this->generator->phoneNumber
        ];
    }
}

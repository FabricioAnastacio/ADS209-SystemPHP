<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
    public function index(): string
    {
        // 1. Instancia o Model
        $conteudoModel = new ConteudoModel();
        // 2. Busca o registro com Id = 1
        $dados['Conteudo'] = $conteudoModel->find(1);
        // 3. Envia os dados para a vi
        return view('home', $dados);
    }

    public function contato(): string
    {
        return view('contato');
    }
}

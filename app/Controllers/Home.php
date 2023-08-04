<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Home extends BaseController
{
    private $ClienteModel;

    public function __construct()
    {
        $this->ClienteModel = new ClienteModel();
    }

    public function index()
    {
        return view('index.php');
    }

    public function salvar()
    {

        $data = [
            'EMAIL'                       => $this->request->getPost('EMAIL'),
            'NOME_COMPLETO'               => $this->request->getPost('NOME_COMPLETO'),
            'DATA_NASCIMENTO'             => $this->request->getPost('DATA_NASCIMENTO'),
            'PROFISSAO'                   => $this->request->getPost('PROFISSAO'),
            'PROFISSAO_TIPO'              => $this->request->getPost('PROFISSAO_TIPO'),
            'ESTADO_CIVIL'                => $this->request->getPost('ESTADO_CIVIL'),
            'ESTADO_CIVIL_DETALHE'        => $this->request->getPost('ESTADO_CIVIL_DETALHE'),
            'RENDA_MENSAL_LIQUIDA'        => $this->request->getPost('RENDA_MENSAL_LIQUIDA'),
            'INSS_CONTRIBUICAO'           => $this->request->getPost('INSS_CONTRIBUICAO'),
            'APOSENTADORIA_IDADE'         => $this->request->getPost('APOSENTADORIA_IDADE'),
            'APOSENTADORIA_RENDA_MENSAL'  => $this->request->getPost('APOSENTADORIA_RENDA_MENSAL'),
            'SONHO_ANOS_RESTANTES'        => $this->request->getPost('SONHO_ANOS_RESTANTES'),
            'SONHO_SALDO'                 => $this->request->getPost('SONHO_SALDO'),
            'SEGURO_VIDA'                 => $this->request->getPost('SEGURO_VIDA')
        ];

        $this->ClienteModel->insert($data);

        return redirect()->to('/home');

    }
}

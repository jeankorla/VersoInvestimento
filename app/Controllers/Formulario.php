<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

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
            'SOBRE_EMAIL'                                      => $this->request->getPost('SOBRE_EMAIL'),
            'SOBRE_NOME'                                       => $this->request->getPost('SOBRE_NOME'),
            'SOBRE_NOME_SOBRENOME'                             => $this->request->getPost('SOBRE_NOME_SOBRENOME'),
            'SOBRE_DATA_NASCIMENTO'                            => $this->request->getPost('SOBRE_DATA_NASCIMENTO'),
            'SOBRE_PROFISSAO'                                  => $this->request->getPost('SOBRE_PROFISSAO'),
            'SOBRE_PROFISSAO_TIPO'                             => $this->request->getPost('SOBRE_PROFISSAO_TIPO'),
            'SOBRE_ESTADO_CIVIL'                               => $this->request->getPost('SOBRE_ESTADO_CIVIL'),
            'SOBRE_ESTADO_CIVIL_DETALHE'                       => $this->request->getPost('SOBRE_ESTADO_CIVIL_DETALHE'),

            'RECEITA_RENDA_MENSAL_LIQUIDA'                     => $this->request->getPost('RECEITA_RENDA_MENSAL_LIQUIDA'),
            'RECEITA_APLICACOES_VALOR_TOTAL'                   => $this->request->getPost('RECEITA_APLICACOES_VALOR_TOTAL'),
            'RECEITA_APLICACOES_ARQUIVO'                       => $this->request->getPost('RECEITA_APLICACOES_ARQUIVO'),

            'DESPESA_LUZ_MEDIA_MENSAL'                         => $this->request->getPost('DESPESA_LUZ_MEDIA_MENSAL'),
            'DESPESA_AGUA_MEDIA_MENSAL'                        => $this->request->getPost('DESPESA_AGUA_MEDIA_MENSAL'),
            'DESPESA_GAS_MEDIA_MENSAL'                         => $this->request->getPost('DESPESA_GAS_MEDIA_MENSAL'),
            'DESPESA_ALUGUEL'                                  => $this->request->getPost('DESPESA_ALUGUEL'),
            'DESPESA_FINANCIAMENTO_TIPO'                       => $this->request->getPost('DESPESA_FINANCIAMENTO_TIPO'),
            'DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA'        => $this->request->getPost('DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA'),
            'DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'  => $this->request->getPost('DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'),
            'DESPESA_FINANCIAMENTO_VEICULO_PARCELA'            => $this->request->getPost('DESPESA_FINANCIAMENTO_VEICULO_PARCELA'),
            'DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'      => $this->request->getPost('DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'),
            'DESPESA_IPTU'                                     => $this->request->getPost('DESPESA_IPTU'),
            'DESPESA_IPVA'                                     => $this->request->getPost('DESPESA_IPVA'),
            'DESPESA_EMPRESTIMO_PARCELA'                       => $this->request->getPost('DESPESA_EMPRESTIMO_PARCELA'),
            'DESPESA_EMPRESTIMO_SALDO_DEVEDOR'                 => $this->request->getPost('DESPESA_EMPRESTIMO_SALDO_DEVEDOR'),
            'DESPESA_INTERNET_TELEVISAO'                       => $this->request->getPost('DESPESA_INTERNET_TELEVISAO'),
            'DESPESA_CELULAR'                                  => $this->request->getPost('DESPESA_CELULAR'),
            'DESPESA_MEDIA_MERCADO'                            => $this->request->getPost('DESPESA_MEDIA_MERCADO'),
            'DESPESA_MEDICAMENTOS'                             => $this->request->getPost('DESPESA_MEDICAMENTOS'),
            'DESPESA_PLANO_SAUDE_MENSAL'                       => $this->request->getPost('DESPESA_PLANO_SAUDE_MENSAL'),
            'DESPESA_INSS'                                     => $this->request->getPost('DESPESA_INSS'),
            'DESPESA_LAZER'                                    => $this->request->getPost('DESPESA_LAZER'),
            'DESPESA_COMBUSTIVEL'                              => $this->request->getPost('DESPESA_COMBUSTIVEL'),
            'DESPESA_CARTAO_FATURA'                            => $this->request->getPost('DESPESA_CARTAO_FATURA'),
            'DESPESA_VEICULO_ALUGADO_MENSALIDADE'              => $this->request->getPost('DESPESA_VEICULO_ALUGADO_MENSALIDADE'),
            'DESPESA_VEICULO_ALUGADO_SEGURO'                   => $this->request->getPost('DESPESA_VEICULO_ALUGADO_SEGURO'),
            'DESPESA_SEGURO_VIDA_MENSAL'                       => $this->request->getPost('DESPESA_SEGURO_VIDA_MENSAL'),
            'DESPESA_CONDOMINIO_MENSAL'                        => $this->request->getPost('DESPESA_CONDOMINIO_MENSAL'),
            'DESPESA_CONTRIBUICAO_SINDICAL'                    => $this->request->getPost('DESPESA_CONTRIBUICAO_SINDICAL'),
            'DESPESA_ESCOLA_MENSAL'                            => $this->request->getPost('DESPESA_ESCOLA_MENSAL'),
            'DESPESA_UNIVERSIDADE_MENSAL'                      => $this->request->getPost('DESPESA_UNIVERSIDADE_MENSAL'),
            'DESPESA_CLUBE_MENSALIDADE'                        => $this->request->getPost('DESPESA_CLUBE_MENSALIDADE'),
            'DESPESA_PERSONALIZADA_FK'                         => $this->request->getPost('DESPESA_PERSONALIZADA_FK'),

            'BEM_FK'                                           => $this->request->getPost('BEM_FK'),

            'PROTECAO_APOLICE_SEGURO_ARQUIVO'                  => $this->request->getPost('PROTECAO_APOLICE_SEGURO_ARQUIVO'),
            'PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'             => $this->request->getPost('PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'),
            'PROTECAO_PREVIDENCIA_PRIVADA_MENSAL'              => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_MENSAL'),
            'PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO'     => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO'),
            'PROTECAO_FUNDO_GARANTIA_VALOR'                    => $this->request->getPost('PROTECAO_FUNDO_GARANTIA_VALOR'),

            'OBJETIVO_RENDA_MENSAL'                            => $this->request->getPost('OBJETIVO_RENDA_MENSAL'),
            'OBJETIVO_IDADE_PRETENDIDA'                        => $this->request->getPost('OBJETIVO_IDADE_PRETENDIDA'),
            'OBJETIVO_ANO_REALIZACAO'                          => $this->request->getPost('OBJETIVO_ANO_REALIZACAO'),
            'OBJETIVO_VALOR'                                   => $this->request->getPost('OBJETIVO_VALOR'),

            'FORMULARIO_DATA_CRIACAO'                          => $this->request->getPost('FORMULARIO_DATA_CRIACAO')
        ];

        $this->ClienteModel->insert($data);
        return redirect()->to('/');


    }
}

<?php

namespace App\Controllers;

use App\Models\ClienteDespesaPersonalizadaModel;
use App\Models\ClienteFormularioModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    private $ClienteFormularioModel;
    private $ClienteDespesaPersonalizadaModel;

    public function __construct()
    {
        $this->ClienteFormularioModel = new ClienteFormularioModel();
        $this->ClienteDespesaPersonalizadaModel = new ClienteDespesaPersonalizadaModel();
    }

    public function index()
    {
        return view('index.php');
    }

    public function salvar()
    {

        $Registros_ClienteFormularioModel = [
            'SOBRE_EMAIL'                                               => $this->request->getPost('SOBRE_EMAIL'),
            'SOBRE_NOME_COMPLETO'                                       => $this->request->getPost('SOBRE_NOME_COMPLETO'),
            'SOBRE_DATA_NASCIMENTO'                                     => $this->request->getPost('SOBRE_DATA_NASCIMENTO'),
            'SOBRE_PROFISSAO'                                           => $this->request->getPost('SOBRE_PROFISSAO'),
            'SOBRE_PROFISSAO_TIPO'                                      => $this->request->getPost('SOBRE_PROFISSAO_TIPO'),
            'SOBRE_ESTADO_CIVIL'                                        => $this->request->getPost('SOBRE_ESTADO_CIVIL'),
            'SOBRE_ESTADO_CIVIL_DETALHE'                                => $this->request->getPost('SOBRE_ESTADO_CIVIL_DETALHE'),

            'RECEITA_RENDA_MENSAL_LIQUIDA_HIDDEN'                       => $this->request->getPost('RECEITA_RENDA_MENSAL_LIQUIDA'),
            'RECEITA_APLICACOES_VALOR_TOTAL_HIDDEN'                     => $this->request->getPost('RECEITA_APLICACOES_VALOR_TOTAL'),
            'RECEITA_APLICACOES_ARQUIVO'                                => $this->request->getPost('RECEITA_APLICACOES_ARQUIVO'),

            'DESPESA_LUZ_MEDIA_MENSAL_HIDDEN'                           => $this->request->getPost('DESPESA_LUZ_MEDIA_MENSAL'),
            'DESPESA_AGUA_MEDIA_MENSAL_HIDDEN'                          => $this->request->getPost('DESPESA_AGUA_MEDIA_MENSAL'),
            'DESPESA_GAS_MEDIA_MENSAL_HIDDEN'                           => $this->request->getPost('DESPESA_GAS_MEDIA_MENSAL'),
            'DESPESA_ALUGUEL_HIDDEN'                                    => $this->request->getPost('DESPESA_ALUGUEL'),
            'DESPESA_FINANCIAMENTO_TIPO'                                => $this->request->getPost('DESPESA_FINANCIAMENTO_TIPO'),
            'DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA_HIDDEN'          => $this->request->getPost('DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA'),           
            'DESPESA_FINANCIAMENTO_VEICULO_PARCELA_HIDDEN'              => $this->request->getPost('DESPESA_FINANCIAMENTO_VEICULO_PARCELA'),            
            'DESPESA_IPTU_HIDDEN'                                       => $this->request->getPost('DESPESA_IPTU'),
            'DESPESA_IPVA_HIDDEN'                                       => $this->request->getPost('DESPESA_IPVA'),
            'DESPESA_EMPRESTIMO_PARCELA_HIDDEN'                         => $this->request->getPost('DESPESA_EMPRESTIMO_PARCELA'),            
            'DESPESA_INTERNET_TELEVISAO_HIDDEN'                         => $this->request->getPost('DESPESA_INTERNET_TELEVISAO'),
            'DESPESA_CELULAR_HIDDEN'                                    => $this->request->getPost('DESPESA_CELULAR'),
            'DESPESA_MEDIA_MERCADO_HIDDEN'                              => $this->request->getPost('DESPESA_MEDIA_MERCADO'),
            'DESPESA_MEDICAMENTOS_HIDDEN'                               => $this->request->getPost('DESPESA_MEDICAMENTOS'),
            'DESPESA_PLANO_SAUDE_MENSAL_HIDDEN'                         => $this->request->getPost('DESPESA_PLANO_SAUDE_MENSAL'),
            'DESPESA_INSS_HIDDEN'                                       => $this->request->getPost('DESPESA_INSS'),
            'DESPESA_LAZER_HIDDEN'                                      => $this->request->getPost('DESPESA_LAZER'),
            'DESPESA_COMBUSTIVEL_HIDDEN'                                => $this->request->getPost('DESPESA_COMBUSTIVEL'),
            'DESPESA_CARTAO_FATURA_HIDDEN'                              => $this->request->getPost('DESPESA_CARTAO_FATURA'),
            'DESPESA_VEICULO_ALUGADO_MENSALIDADE_HIDDEN'                => $this->request->getPost('DESPESA_VEICULO_ALUGADO_MENSALIDADE'),
            'DESPESA_VEICULO_SEGURO_HIDDEN'                             => $this->request->getPost('DESPESA_VEICULO_ALUGADO_SEGURO'),
            'DESPESA_SEGURO_VIDA_MENSAL_HIDDEN'                         => $this->request->getPost('DESPESA_SEGURO_VIDA_MENSAL'),
            'DESPESA_CONDOMINIO_MENSAL_HIDDEN'                          => $this->request->getPost('DESPESA_CONDOMINIO_MENSAL'),
            'DESPESA_CONTRIBUICAO_SINDICAL_HIDDEN'                      => $this->request->getPost('DESPESA_CONTRIBUICAO_SINDICAL'),
            'DESPESA_ESCOLA_MENSAL_HIDDEN'                              => $this->request->getPost('DESPESA_ESCOLA_MENSAL'),
            'DESPESA_UNIVERSIDADE_MENSAL_HIDDEN'                        => $this->request->getPost('DESPESA_UNIVERSIDADE_MENSAL'),
            'DESPESA_CLUBE_MENSALIDADE_HIDDEN'                          => $this->request->getPost('DESPESA_CLUBE_MENSALIDADE'),
            'DESPESA_PERSONALIZADA_FK'                                  => $this->request->getPost('DESPESA_PERSONALIZADA_FK'),

            'DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR_HIDDEN'     => $this->request->getPost('DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'),
            'DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR_HIDDEN'         => $this->request->getPost('DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'),
            'DIVIDA_EMPRESTIMO_SALDO_DEVEDOR_HIDDEN'                    => $this->request->getPost('DIVIDA_EMPRESTIMO_SALDO_DEVEDOR'),
            'DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR_HIDDEN'                 => $this->request->getPost('DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR'),

            'BEM_FK'                                                    => $this->request->getPost('BEM_FK'),

            'PROTECAO_APOLICE_SEGURO_ARQUIVO'                           => $this->request->getPost('PROTECAO_APOLICE_SEGURO_ARQUIVO'),
            'PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'                      => $this->request->getPost('PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'),
            'PROTECAO_PREVIDENCIA_PRIVADA_MENSAL_HIDDEN'                => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_MENSAL'),
            'PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO_HIDDEN'       => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO'),
            'PROTECAO_FUNDO_GARANTIA_VALOR_HIDDEN'                      => $this->request->getPost('PROTECAO_FUNDO_GARANTIA_VALOR'),

            'OBJETIVO_RENDA_MENSAL_HIDDEN'                              => $this->request->getPost('OBJETIVO_RENDA_MENSAL'),
            'OBJETIVO_IDADE_PRETENDIDA_HIDDEN'                          => $this->request->getPost('OBJETIVO_IDADE_PRETENDIDA'),
            'OBJETIVO_ANO_REALIZACAO'                                   => $this->request->getPost('OBJETIVO_ANO_REALIZACAO'),
            'OBJETIVO_VALOR_HIDDEN'                                     => $this->request->getPost('OBJETIVO_VALOR'),

            'FORMULARIO_DATA_CRIACAO'                                   => $this->request->getPost('FORMULARIO_DATA_CRIACAO')
        ];

        $this->ClienteFormularioModel->insert($Registros_ClienteFormularioModel);


        // DESPESAS PERSONALIZADAS --- INICIO
        $Registros_ClienteDespesaPersonalizadaModel = [];
        $FK = $this->ClienteFormularioModel->insertID();
        $Quantidade_Despesas = intval($this->request->getPost('DESPESA_PERSONALIZADA_QUANTIDADE_LINHAS'));

        if ($Quantidade_Despesas > 0)
        {
            for ($x = 1; $x <= $Quantidade_Despesas; $x++)
            {
                $Registros_ClienteDespesaPersonalizadaModel['CLIENTE_FORMULARIO_FK'] = $FK;
                
                $Registros_ClienteDespesaPersonalizadaModel['DESCRICAO']             = $this->request->getPost('DESPESA_PERSONALIZADA_DESCRICAO_' . $x);
                $Registros_ClienteDespesaPersonalizadaModel['VALOR']                 = $this->request->getPost('DESPESA_PERSONALIZADA_VALOR_' . $x);
                
                $this->ClienteDespesaPersonalizadaModel->insert($Registros_ClienteDespesaPersonalizadaModel);

                $Registros_ClienteDespesaPersonalizadaModel = [];
            }
        }
        // DESPESAS PERSONALIZADAS --- FIM


        //dd($Registros_ClienteFormularioModel, $Registros_ClienteDespesaPersonalizadaModel);


        return view('success.php');

    }
}

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
            'SOBRE_NOME'                                                => $this->request->getPost('SOBRE_NOME'),
            'SOBRE_NOME_SOBRENOME'                                      => $this->request->getPost('SOBRE_NOME_SOBRENOME'),
            'SOBRE_DATA_NASCIMENTO'                                     => $this->request->getPost('SOBRE_DATA_NASCIMENTO'),
            'SOBRE_PROFISSAO'                                           => $this->request->getPost('SOBRE_PROFISSAO'),
            'SOBRE_PROFISSAO_TIPO'                                      => $this->request->getPost('SOBRE_PROFISSAO_TIPO'),
            'SOBRE_ESTADO_CIVIL'                                        => $this->request->getPost('SOBRE_ESTADO_CIVIL'),
            'SOBRE_ESTADO_CIVIL_DETALHE'                                => $this->request->getPost('SOBRE_ESTADO_CIVIL_DETALHE'),

            'RECEITA_RENDA_MENSAL_LIQUIDA'                              => $this->request->getPost('RECEITA_RENDA_MENSAL_LIQUIDA_HIDDEN'),
            'RECEITA_APLICACOES_VALOR_TOTAL'                            => $this->request->getPost('RECEITA_APLICACOES_VALOR_TOTAL_HIDDEN'),
            'RECEITA_APLICACOES_ARQUIVO'                                => $this->request->getPost('RECEITA_APLICACOES_ARQUIVO_HIDDEN'),

            'DESPESA_LUZ_MEDIA_MENSAL'                                  => $this->request->getPost('DESPESA_LUZ_MEDIA_MENSAL_HIDDEN'),
            'DESPESA_AGUA_MEDIA_MENSAL'                                 => $this->request->getPost('DESPESA_AGUA_MEDIA_MENSAL_HIDDEN'),
            'DESPESA_GAS_MEDIA_MENSAL'                                  => $this->request->getPost('DESPESA_GAS_MEDIA_MENSAL_HIDDEN'),
            'DESPESA_ALUGUEL'                                           => $this->request->getPost('DESPESA_ALUGUEL_HIDDEN'),
            'DESPESA_FINANCIAMENTO_TIPO'                                => $this->request->getPost('DESPESA_FINANCIAMENTO_TIPO_HIDDEN'),
            'DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA'                 => $this->request->getPost('DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA_HIDDEN'),           
            'DESPESA_FINANCIAMENTO_VEICULO_PARCELA'                     => $this->request->getPost('DESPESA_FINANCIAMENTO_VEICULO_PARCELA_HIDDEN'),            
            'DESPESA_IPTU'                                              => $this->request->getPost('DESPESA_IPTU_HIDDEN'),
            'DESPESA_IPVA'                                              => $this->request->getPost('DESPESA_IPVA_HIDDEN'),
            'DESPESA_EMPRESTIMO_PARCELA'                                => $this->request->getPost('DESPESA_EMPRESTIMO_PARCELA_HIDDEN'),            
            'DESPESA_INTERNET_TELEVISAO'                                => $this->request->getPost('DESPESA_INTERNET_TELEVISAO_HIDDEN'),
            'DESPESA_CELULAR'                                           => $this->request->getPost('DESPESA_CELULAR_HIDDEN'),
            'DESPESA_MEDIA_MERCADO'                                     => $this->request->getPost('DESPESA_MEDIA_MERCADO_HIDDEN'),
            'DESPESA_MEDICAMENTOS'                                      => $this->request->getPost('DESPESA_MEDICAMENTOS_HIDDEN'),
            'DESPESA_PLANO_SAUDE_MENSAL'                                => $this->request->getPost('DESPESA_PLANO_SAUDE_MENSAL_HIDDEN'),
            'DESPESA_INSS'                                              => $this->request->getPost('DESPESA_INSS_HIDDEN'),
            'DESPESA_LAZER'                                             => $this->request->getPost('DESPESA_LAZER_HIDDEN'),
            'DESPESA_COMBUSTIVEL'                                       => $this->request->getPost('DESPESA_COMBUSTIVEL_HIDDEN'),
            'DESPESA_CARTAO_FATURA'                                     => $this->request->getPost('DESPESA_CARTAO_FATURA_HIDDEN'),
            'DESPESA_VEICULO_ALUGADO_MENSALIDADE'                       => $this->request->getPost('DESPESA_VEICULO_ALUGADO_MENSALIDADE_HIDDEN'),
            'DESPESA_VEICULO_SEGURO'                                    => $this->request->getPost('DESPESA_VEICULO_ALUGADO_SEGURO_HIDDEN'),
            'DESPESA_SEGURO_VIDA_MENSAL'                                => $this->request->getPost('DESPESA_SEGURO_VIDA_MENSAL_HIDDEN'),
            'DESPESA_CONDOMINIO_MENSAL'                                 => $this->request->getPost('DESPESA_CONDOMINIO_MENSAL_HIDDEN'),
            'DESPESA_CONTRIBUICAO_SINDICAL'                             => $this->request->getPost('DESPESA_CONTRIBUICAO_SINDICAL_HIDDEN'),
            'DESPESA_ESCOLA_MENSAL'                                     => $this->request->getPost('DESPESA_ESCOLA_MENSAL_HIDDEN'),
            'DESPESA_UNIVERSIDADE_MENSAL'                               => $this->request->getPost('DESPESA_UNIVERSIDADE_MENSAL_HIDDEN'),
            'DESPESA_CLUBE_MENSALIDADE'                                 => $this->request->getPost('DESPESA_CLUBE_MENSALIDADE_HIDDEN'),
            'DESPESA_PERSONALIZADA_FK'                                  => $this->request->getPost('DESPESA_PERSONALIZADA_FK_HIDDEN'),

            'DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'            => $this->request->getPost('DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR_HIDDEN'),
            'DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'                => $this->request->getPost('DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR_HIDDEN'),
            'DIVIDA_EMPRESTIMO_SALDO_DEVEDOR'                           => $this->request->getPost('DIVIDA_EMPRESTIMO_SALDO_DEVEDOR_HIDDEN'),
            'DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR'                        => $this->request->getPost('DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR_HIDDEN'),

            'BEM_FK'                                                    => $this->request->getPost('BEM_FK_HIDDEN'),

            'PROTECAO_APOLICE_SEGURO_ARQUIVO'                           => $this->request->getPost('PROTECAO_APOLICE_SEGURO_ARQUIVO_HIDDEN'),
            'PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'                      => $this->request->getPost('PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO_HIDDEN'),
            'PROTECAO_PREVIDENCIA_PRIVADA_MENSAL'                       => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_MENSAL_HIDDEN'),
            'PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO'              => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO_HIDDEN'),
            'PROTECAO_FUNDO_GARANTIA_VALOR'                             => $this->request->getPost('PROTECAO_FUNDO_GARANTIA_VALOR_HIDDEN'),

            'OBJETIVO_RENDA_MENSAL'                                     => $this->request->getPost('OBJETIVO_RENDA_MENSAL_HIDDEN'),
            'OBJETIVO_IDADE_PRETENDIDA'                                 => $this->request->getPost('OBJETIVO_IDADE_PRETENDIDA'),
            'OBJETIVO_ANO_REALIZACAO'                                   => $this->request->getPost('OBJETIVO_ANO_REALIZACAO'),
            'OBJETIVO_VALOR'                                            => $this->request->getPost('OBJETIVO_VALOR_HIDDEN'),

            'FORMULARIO_DATA_CRIACAO'                                   => $this->request->getPost('FORMULARIO_DATA_CRIACAO_HIDDEN')
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

    public function suc(){

        echo view('success.php');
    }

}

<?php

namespace App\Controllers;

use App\Models\ClienteBemsPersonalizadaModel;
use App\Models\ClienteDespesaPersonalizadaModel;
use App\Models\ClienteFormularioModel;
use App\Models\ClienteProtecaoPersonalizadaModel;
use App\Models\ClienteReceitaPersonalizadaModel;
use App\Models\ClienteDividaPersonalizadaModel;

use CodeIgniter\Controller;

class Home extends BaseController
{
    private $ClienteFormularioModel;
    private $ClienteDespesaPersonalizadaModel;
    private $ClienteBemsPersonalizadaModel;
    private $ClienteProtecaoPersonalizadaModel;
    private $ClienteReceitaPersonalizadaModel;
    private $ClienteDividaPersonalizadaModel;

    public function __construct()
    {
        $this->ClienteFormularioModel = new ClienteFormularioModel();
        $this->ClienteDespesaPersonalizadaModel = new ClienteDespesaPersonalizadaModel();
        $this->ClienteBemsPersonalizadaModel = new ClienteBemsPersonalizadaModel();
        $this->ClienteProtecaoPersonalizadaModel = new ClienteProtecaoPersonalizadaModel();
        $this->ClienteReceitaPersonalizadaModel = new ClienteReceitaPersonalizadaModel();
        $this->ClienteDividaPersonalizadaModel = new ClienteDividaPersonalizadaModel();
        
    }

    public function bens($FK){
         
        // BEMS PERSONALIZADAS --- INICIO
        $Registros_ClienteBemsPersonalizadaModel = [];
        $Quantidade_Bems = intval($this->request->getPost('BEMS_PERSONALIZADA_QUANTIDADE_LINHAS'));

        if ($Quantidade_Bems > 0)
        {
            for ($x = 1; $x <= $Quantidade_Bems; $x++)
            {
                $Registros_ClienteBemsPersonalizadaModel['CLIENTE_FORMULARIO_FK'] = $FK;
                
                $Registros_ClienteBemsPersonalizadaModel['DESCRICAO']             = $this->request->getPost('BEMS_PERSONALIZADA_DESCRICAO_' . $x);
                $Registros_ClienteBemsPersonalizadaModel['VALOR']                 = $this->request->getPost('BEMS_PERSONALIZADA_VALOR_' . $x);
                
                $this->ClienteBemsPersonalizadaModel->insert($Registros_ClienteBemsPersonalizadaModel);

                $Registros_ClienteBemsPersonalizadaModel = [];
            }
        }
        // BEMS PERSONALIZADAS --- FIM

    }

    public function protecao($FK){
         
        // PROTECAO PERSONALIZADAS --- INICIO
        $Registros_ClienteProtecaoPersonalizadaModel = [];
        $Quantidade_Protecao = intval($this->request->getPost('PROTECAO_PERSONALIZADA_QUANTIDADE_LINHAS'));

        if ($Quantidade_Protecao > 0)
        {
            for ($x = 1; $x <= $Quantidade_Protecao; $x++)
            {
                $Registros_ClienteProtecaoPersonalizadaModel['CLIENTE_FORMULARIO_FK'] = $FK;
                
                $Registros_ClienteProtecaoPersonalizadaModel['DESCRICAO']             = $this->request->getPost('PROTECAO_PERSONALIZADA_DESCRICAO_' . $x);
                $Registros_ClienteProtecaoPersonalizadaModel['VALOR']                 = $this->request->getPost('PROTECAO_PERSONALIZADA_VALOR_' . $x);
                
                $this->ClienteProtecaoPersonalizadaModel->insert($Registros_ClienteProtecaoPersonalizadaModel);

                $Registros_ClienteProtecaoPersonalizadaModel = [];
            }
        }
        // PROTECAO PERSONALIZADAS --- FIM

    }
    
    public function despesas($FK){
        // DESPESAS PERSONALIZADAS --- INICIO
        $Registros_ClienteDespesaPersonalizadaModel = [];
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
    }

    public function divida($FK){
        // DESPESAS PERSONALIZADAS --- INICIO
        $Registros_ClienteDividaPersonalizadaModel = [];
        $Quantidade_Dividas = intval($this->request->getPost('DIVIDA_PERSONALIZADA_QUANTIDADE_LINHAS'));

        if ($Quantidade_Dividas > 0)
        {
            for ($x = 1; $x <= $Quantidade_Dividas; $x++)
            {
                $Registros_ClienteDividaPersonalizadaModel['CLIENTE_FORMULARIO_FK'] = $FK;
                
                $Registros_ClienteDividaPersonalizadaModel['DESCRICAO']             = $this->request->getPost('DIVIDA_PERSONALIZADA_DESCRICAO_' . $x);
                $Registros_ClienteDividaPersonalizadaModel['VALOR']                 = $this->request->getPost('DIVIDA_PERSONALIZADA_VALOR_' . $x);
                
                $this->ClienteDividaPersonalizadaModel->insert($Registros_ClienteDividaPersonalizadaModel);

                $Registros_ClienteDividaPersonalizadaModel = [];
            }
        }
        // DESPESAS PERSONALIZADAS --- FIM
    }

    public function receitas($FK){
        //INICIO DAS RECEITAS PERSONALIZAS
        $Registros_ClienteReceitaPersonalizadaModel = [];
        $Quantidade_Receitas = intval($this->request->getPost('RECEITA_PERSONALIZADA_QUANTIDADE_LINHAS'));

        if($Quantidade_Receitas > 0)
        {
            for($x =1; $x <= $Quantidade_Receitas; $x++)
            {            
                $Registros_ClienteReceitaPersonalizadaModel['CLIENTE_FORMULARIO_FK'] = $FK;

                $Registros_ClienteReceitaPersonalizadaModel['DESCRICAO'] = $this->request->getPost('RECEITA_PERSONALIZADA_DESCRICAO_'.$x);
                $Registros_ClienteReceitaPersonalizadaModel['VALOR'] = $this->request->getPost('RECEITA_PERSONALIZADA_VALOR_'. $x);

                $this->ClienteReceitaPersonalizadaModel->insert($Registros_ClienteReceitaPersonalizadaModel);

                $Registros_ClienteReceitaPersonalizadaModel = [];
        
            }
        }
        //FIM DAS RECEITAS PERSONALIZADAS
    }

    public function index()
    {
        return view('index.php');
    }

    public function salvar()
    {
        $arqPath = 'public_html/formulario/uploads/';

        $receitaAplicacoesArquivo = $this->request->getFile('RECEITA_APLICACOES_ARQUIVO');
        $apoliceSeguroArquivo = $this->request->getFile('PROTECAO_APOLICE_SEGURO_ARQUIVO');
        $previdenciaExtratoArquivo = $this->request->getFile('PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO');
    
        $Registros_ClienteFormularioModel = [];

        $filePathAplicacoes = null;
        $filePathPrevidencia = null;
        $filePathSeguro = null;
    
        if (!empty($receitaAplicacoesArquivo) &&  $receitaAplicacoesArquivo->isValid() && !$receitaAplicacoesArquivo->hasMoved())
        {
            $newName = $receitaAplicacoesArquivo->getRandomName();
            $receitaAplicacoesArquivo->move('../formulario/public_html/formulario/uploads' . 'uploads', $newName);
    
            $filePathAplicacoes = $arqPath . $newName;
            $Registros_ClienteFormularioModel['RECEITA_APLICACOES_ARQUIVO'] = $filePathAplicacoes;
        }
    
        if (!empty($apoliceSeguroArquivo) && $apoliceSeguroArquivo->isValid() && !$apoliceSeguroArquivo->hasMoved())
        {
            $newName = $apoliceSeguroArquivo->getRandomName();
            $apoliceSeguroArquivo->move('../formulario/public_html/formulario/uploads' . 'uploads', $newName);
    
            $filePathSeguro = $arqPath . $newName;
            $Registros_ClienteFormularioModel['PROTECAO_APOLICE_SEGURO_ARQUIVO'] = $filePathSeguro;
        }
    
        if (!empty($previdenciaExtratoArquivo) && $previdenciaExtratoArquivo->isValid() && !$previdenciaExtratoArquivo->hasMoved())
        {
            $newName = $previdenciaExtratoArquivo->getRandomName();
            $previdenciaExtratoArquivo->move('../formulario/public_html/formulario/uploads' . 'uploads', $newName);
    
            $filePathPrevidencia = $arqPath . $newName;
            $Registros_ClienteFormularioModel['PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'] = $filePathPrevidencia;
        }

        
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
            'RECEITA_APLICACOES_ARQUIVO'                                => $filePathAplicacoes,
            'RECEITA_PROLABORE'                                         => $this->request->getPost('RECEITA_PROLABORE_HIDDEN'),
            'RECEITA_DIVIDENDOS'                                        => $this->request->getPost('RECEITA_DIVIDENDOS_HIDDEN'),
            'RECEITA_ALUGUEL'                                           => $this->request->getPost('RECEITA_ALUGUEL_HIDDEN'),
            'RECEITA_PARTICIPACAO_LUCROS'                               => $this->request->getPost('RECEITA_PARTICIPACAO_LUCROS_HIDDEN'),
            'RECEITA_INSS'                                              => $this->request->getPost('RECEITA_INSS_HIDDEN'),
            'RECEITA_PREVIDENCIA_PRIVADA'                               => $this->request->getPost('RECEITA_PREVIDENCIA_PRIVADA_HIDDEN'),


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
            'DESPESA_ACADEMIA'                                          => $this->request->getPost('DESPESA_ACADEMIA_HIDDEN'),
            'DESPESA_FAXINEIRO'                                         => $this->request->getPost('DESPESA_FAXINEIRO_HIDDEN'),
            'DESPESA_BELEZA'                                            => $this->request->getPost('DESPESA_BELEZA_HIDDEN'),
            'DESPESA_PERSONALIZADA_FK'                                  => $this->request->getPost('DESPESA_PERSONALIZADA_FK_HIDDEN'),

            'DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'            => $this->request->getPost('DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR_HIDDEN'),
            'DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'                => $this->request->getPost('DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR_HIDDEN'),
            'DIVIDA_EMPRESTIMO_SALDO_DEVEDOR'                           => $this->request->getPost('DIVIDA_EMPRESTIMO_SALDO_DEVEDOR_HIDDEN'),
            'DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR'                        => $this->request->getPost('DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR_HIDDEN'),

            'BEM_FK'                                                    => $this->request->getPost('BEM_FK_HIDDEN'),
            'BENS_VALOR_MERCADO_IMOVEL'                                 => $this->request->getPost('BENS_VALOR_MERCADO_IMOVEL_HIDDEN'),
            'BENS_VALOR_MERCADO_IMOVEL_VERAO'                           => $this->request->getPost('BENS_VALOR_MERCADO_IMOVEL_VERAO_HIDDEN'),
            'BENS_VALOR_MERCADO_IMOVEL_ALUGADO'                         => $this->request->getPost('BENS_VALOR_MERCADO_IMOVEL_ALUGADO_HIDDEN'),
            'BENS_VALOR_MERCADO_VEICULOS'                               => $this->request->getPost('BENS_VALOR_MERCADO_VEICULOS_HIDDEN'),
            'BENS_VALOR_MERCADO_EMPRESAS'                               => $this->request->getPost('BENS_VALOR_MERCADO_EMPRESAS_HIDDEN'),

            'PROTECAO_APOLICE_SEGURO_ARQUIVO'                           => $filePathSeguro,
            'PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'                      => $filePathPrevidencia,
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
        $FK = $this->ClienteFormularioModel->insertID();       

        
        $this->bens($FK);
        $this->protecao($FK);
        $this->despesas($FK);
        $this->receitas($FK);
        $this->divida($FK);

        //dd($Registros_ClienteFormularioModel, $Registros_ClienteDespesaPersonalizadaModel);

        return view('success.php');

    }

    public function suc(){

        echo view('success.php');
    }    



}

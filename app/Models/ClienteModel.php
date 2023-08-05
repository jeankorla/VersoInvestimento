<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'CLIENTES_FORMULARIO';
    protected $primaryKey       = 'PK';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [

        'SOBRE_EMAIL',
        'SOBRE_NOME_COMPLETO',
        'SOBRE_DATA_NASCIMENTO',
        'SOBRE_PROFISSAO',
        'SOBRE_PROFISSAO_TIPO',
        'SOBRE_ESTADO_CIVIL',
        'SOBRE_ESTADO_CIVIL_DETALHE',

        'RECEITA_RENDA_MENSAL_LIQUIDA',
        'RECEITA_APLICACOES_VALOR_TOTAL',
        'RECEITA_APLICACOES_ARQUIVO',

        'DESPESA_LUZ_MEDIA_MENSAL',
        'DESPESA_AGUA_MEDIA_MENSAL',
        'DESPESA_GAS_MEDIA_MENSAL',
        'DESPESA_ALUGUEL',
        'DESPESA_FINANCIAMENTO_TIPO',
        'DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA',
        'DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR',
        'DESPESA_FINANCIAMENTO_VEICULO_PARCELA',
        'DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR',
        'DESPESA_IPTU',
        'DESPESA_IPVA',
        'DESPESA_EMPRESTIMO_PARCELA',
        'DESPESA_EMPRESTIMO_SALDO_DEVEDOR',
        'DESPESA_INTERNET_TELEVISAO',
        'DESPESA_CELULAR',
        'DESPESA_MEDIA_MERCADO',
        'DESPESA_MEDICAMENTOS',
        'DESPESA_PLANO_SAUDE_MENSAL',
        'DESPESA_INSS',
        'DESPESA_LAZER',
        'DESPESA_COMBUSTIVEL',
        'DESPESA_CARTAO_FATURA',
        'DESPESA_VEICULO_ALUGADO_MENSALIDADE',
        'DESPESA_VEICULO_ALUGADO_SEGURO',
        'DESPESA_SEGURO_VIDA_MENSAL',
        'DESPESA_CONDOMINIO_MENSAL',
        'DESPESA_CONTRIBUICAO_SINDICAL',
        'DESPESA_ESCOLA_MENSAL',
        'DESPESA_UNIVERSIDADE_MENSAL',
        'DESPESA_CLUBE_MENSALIDADE',
        'DESPESA_PERSONALIZADA_FK',
        
        'BEM_FK',

        'PROTECAO_APOLICE_SEGURO_ARQUIVO',
        'PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO',
        'PROTECAO_PREVIDENCIA_PRIVADA_MENSAL',
        'PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO',
        'PROTECAO_FUNDO_GARANTIA_VALOR',

        'OBJETIVO_RENDA_MENSAL',
        'OBJETIVO_IDADE_PRETENDIDA',
        'OBJETIVO_ANO_REALIZACAO',
        'OBJETIVO_VALOR',

        'FORMULARIO_DATA_CRIACAO'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

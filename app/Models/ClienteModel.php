<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'CLIENTES';
    protected $primaryKey       = 'PK';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'NOME_COMPLETO',
        'DATA_NASCIMENTO',
        'PROFISSAO',
        'PROFISSAO_TIPO',
        'ESTADO_CIVIL',
        'ESTADO_CIVIL_DETALHE',
        'RENDA_MENSAL_LIQUIDA',
        'INSS_CONTRIBUICAO',
        'APOSENTADORIA_IDADE',
        'APOSENTADORIA_RENDA_MENSAL',
        'SONHO_ANOS_RESTANTES',
        'SONHO_SALDO',
        'SEGURO_VIDA'
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

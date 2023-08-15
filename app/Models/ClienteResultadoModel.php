<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteResultadoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'CLIENTES_RESULTADOS';
    protected $primaryKey       = 'PK';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'CLIENTE_FORMULARIO_FK',
        'DATA',
        'INDICE_POUPANCA',
        'INDICE_LIQUIDEZ_CORRENTE',
        'INDICE_ENDIVIDAMENTO',
        'INDICE_COBERTURA',
        'INDICE_PATRIMONIO_LIQUIDO'
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

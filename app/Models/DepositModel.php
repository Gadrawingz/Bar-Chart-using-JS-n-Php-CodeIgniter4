<?php

namespace App\Models;

use CodeIgniter\Model;

class DepositModel extends Model
{
    protected $table            = 'deposit';
    protected $primaryKey       = 'depo_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'client_id',
        'amount',
        'reason',
        'depo_date'
    ];
}

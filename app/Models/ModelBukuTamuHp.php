<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBukuTamuHp extends Model
{
    protected $table            = 'bukutamu';
    protected $primaryKey       = 'tamuhp ';
    protected $allowedFields    = [
        'tamuuser', 'tamuhp', 'tamunama'
    ];
}

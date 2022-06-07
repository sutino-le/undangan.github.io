<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBukuTamu extends Model
{
    protected $table            = 'bukutamu';
    protected $primaryKey       = 'tamuid';
    protected $allowedFields    = [
        'tamuuser', 'tamuhp', 'tamunama'
    ];
}

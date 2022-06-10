<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMempelaiDua extends Model
{
    protected $table            = 'mempelaidua';
    protected $primaryKey       = 'nikahduauser';
    protected $allowedFields    = [
        'nikahduauser', 'nikahduanamapanggilan', 'nikahduanamalengkap', 'nikahduajenis', 'nikahduakeluarga', 'nikahduaalamat', 'nikahduaalamatid'
    ];
}

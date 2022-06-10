<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMempelaiSatu extends Model
{
    protected $table            = 'mempelaisatu';
    protected $primaryKey       = 'nikahsatuuser';
    protected $allowedFields    = [
        'nikahsatuuser', 'nikahsatunamapanggilan', 'nikahsatunamalengkap', 'nikahsatujenis', 'nikahsatukeluarga', 'nikahsatualamat', 'nikahsatualamatid'
    ];
}

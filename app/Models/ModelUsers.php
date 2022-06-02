<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'userid';
    protected $allowedFields    = [
        'userid', 'usernama', 'userfoto', 'useremail', 'userpassword', 'userlevelid'
    ];
}

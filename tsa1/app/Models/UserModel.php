<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'username',
        'full_name',
        'email',
        'created_at',
    ];

    // The database table has created_at but no updated_at column.
    protected $useTimestamps = false;

    public function getDemoUser()
    {
        return $this->first();
    }
}
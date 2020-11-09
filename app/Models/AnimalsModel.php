<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalsModel extends Model
{
    protected $table      = 'rtin_animals';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['type', 'female', 'name', 'birth_data', 'vaccine', 'chip_number', 'chip_date'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // protected validationRules    = [];
    // protected validationMessages = [];
    // protected skipValidation     = false;
}
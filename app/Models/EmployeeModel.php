<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{

  protected $table = 'employees';
  protected $primaryKey = 'id';
  protected $allowedFields = ['name', 'email'];

    // protected useTimestamps = false;
    // protected createdField  = 'created_at';
    // protected updatedField  = 'updated_at';
    // protected deletedField  = 'deleted_at';

    // protected validationRules    = [];
    // protected validationMessages = [];
    // protected skipValidation     = false;
}
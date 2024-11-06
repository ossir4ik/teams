<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class School extends Entity
{
    protected $table = 'schools';
    protected $primaryKey = 'id';
    protected $allowedFields = ['school_name', 'address', 'phone_number'];


}
<?php

namespace App\Models;

use App\Entities\School;

class schoolModel extends \CodeIgniter\Model
{
    protected $table = 'schools';

    protected $allowedFields = ['school_name', 'address', 'phone_number'];

    protected $returnType = School::class;
    protected $useTimestamps = true;

    protected $validationRules = [
        'school_name' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
    ];

    protected $validationMessages = [
        'school_name' => 'Set school`s name',
        'address' => 'Set school`s address',
        'phone_number' => 'Set phone number',
    ];
}
<?php

namespace App\Models;

use App\Entities\School;
use App\Entities\Team;
use CodeIgniter\CodeIgniter;

class teamModel extends \CodeIgniter\Model
{

    protected $table = 'teams';

    protected $allowedFields = ['name', 'kind_of_sport', 'school_id','trainer_id', 'training_id'];

    protected $returnType = Team::class;

    protected $validationRules = [
        'name' => 'required',
        'kind_of_sport' => 'required',
    ];

    protected $validationMessages = [
        'name' => 'Set team`s name',
        'kind_of_sport' => 'Set team`s address',
    ];
}
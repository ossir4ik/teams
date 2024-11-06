<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Team extends Entity
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'kind_of_sport', 'school_id','trainer_id', 'training_id'];

}
<?php

namespace App\Models;

use App\Entities\Trainer;
use CodeIgniter\Model;

class trainerModel extends Model
{
    protected $table = 'trainers';

    protected $allowedFields = ['name', 'address', 'email'];

    protected $returnType = Trainer::class;
}
<?php

namespace App\Models;

use App\Entities\Training;
use CodeIgniter\Model;

class trainingModel extends Model
{
    protected $table = 'trainings';

    protected $allowedFields = ['date', 'start_time', 'end_time'];

    protected $returnType = Training::class;
}
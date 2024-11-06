<?php

namespace App\Models;

use App\Entities\School;
use App\Entities\User;

class userModel extends \CodeIgniter\Model
{
    protected $table = 'users';

    protected $allowedFields = ['first_name', 'last_name', 'username', 'email', 'phone_number','password','status'];

    protected $returnType = User::class;
    protected $useTimestamps = true;

    protected $beforeInsert = ['hashPassword'];

    /*protected $validationRules = [
        'name' => 'required',
        'email'=> 'required|valid_email|is_unique[users.email]',
        'password'=> 'required|min_length[4]',
        'password_confirmation' => 'required|matches[password]',
    ];*/

    /*protected $validationMessages = [
        'name' => [
            'required'
        ],
        'email'=> 'required|valid_email|is_unique[users.email]',
        'password'=> 'required|min_length[4]',
        'password_confirmation' => 'required|matches[password]',
    ];*/

    protected function hashPassword($data){
        if(isset($data['data']['password']))
        {
            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
            unset($data['data']['password']);
        }
        return $data;
    }
}
<?php

namespace App\Controllers;

use App\Models\userModel;

class SignUp extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new userModel();

    }

    public function new()
    {
        return view("Signup/new",[
            'title'=>'UserController registration',
        ]);
    }

    public function store()
    {
        $user = $this->request->getPost();

        if($this->model->insert($user))
        {
            return redirect()->to("/signup/success");
        }else{
            return redirect()
                ->back()
                ->with('error', $this->model->errors())
                ->with('warning', 'Invalid data')
                ->withInput();
        }
    }

    public function success()
    {
        return view("Signup/success",[
            'title'=>'Success registration',
        ]);
    }
}
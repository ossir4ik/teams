<?php

namespace App\Controllers;

use App\Models\userModel;

class Login extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\userModel();

    }

    public function loginForm()
    {
        return view('Login/login_form',[
            'title'=>'Authorization page',
        ]);
    }

    public function store()
    {
        $username = $this->request->getPost('username');
        $user = $this->model->where('username', $username)->first();

        if($user === null){
            return redirect()
                ->back()
                ->withInput()
                ->with('errors',['UserController not found']);
        }else{
            $password = $this->request->getPost('password');
            if(password_verify($password, $user->password_hash)){
                $session = session();
                $session->regenerate();
                $session->set('user_id', $user->id);
                $session->set('user_status', $user->status);
                $session->set('user_first_name', $user->first_name);
                $session->set('user_last_name', $user->last_name);
                return redirect()->to('/schools/index')->with('success','Successful authorization!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('errors',['Password wrong']);
            }
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();

        return redirect()->to('/teams/index')->with('success','You`re successfully logout');
    }
}
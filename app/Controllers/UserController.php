<?php

namespace App\Controllers;

use App\Models\userModel;
class UserController extends  BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new userModel();

    }

    public function users()
    {
        $users = $this->model->findAll();



        return view('users/index',[
            'title'=>'Registered users',
            'users'=>$users
        ]);
    }

    public function delete($id)
    {
        $user = $this->model->find($id);

        if($user){
            $this->model->delete($id);

            return redirect()
                ->to('/users')
                ->with('success', 'Users successfully deleted');
        }else{
            return redirect()
                ->to('/users')
                ->with('error', 'User not found');
        }
    }

    public function edit($id){
       $user = $this->model->find($id);

       if(!$user){
           return redirect()
               ->to('/users')
               ->with('error','User not found');
       }

       return view ('users/edit',[
            'title' => 'User editing',
            'user' => $user,
           ]);
    }

    public function update($id){
        $data = $this->request->getPost();

        if($this->model->validate($data)){
            $this->model->update($id,$data);

            return redirect()
                ->to('/users')
                ->with('success','User successfully updated');
        }else{
            return redirect()
                ->to("/users/edit/{$id}")
                ->with('errors', $this->model->errors())
                ->with('data', $data);
        }
    }
}
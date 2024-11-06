<?php

namespace App\Controllers;

use App\Entities\School;
use function PHPUnit\Framework\throwException;

class Schools extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\schoolModel();

    }

    public function index(): string
    {
        $data = $this->model->findAll();

        return view('school\index',[
            'schools'=> $data,
            'title' => 'School list',
        ]);

    }
    public function show($id)
    {
        $school =$this->getSchoolOr404($id);

        return view('school/show',[
            'school'=> $school,
            'title' => 'School info',
        ]);
    }

    public function new()
    {
        return view('school/new',[
            'title' => 'School creating',
        ]);
    }

    public function store()
    {
        $school = new School($this->request->getPost());

        if($this->model->insert($school)){
            return redirect()
                ->to('')
                ->with('success','school created')
                ->with('data', $school);
        }else{
            return redirect()
                ->back()
                ->withInput($school)
                ->with('errors',$this->model->errors());
        }
    }

    public function edit($id)
    {

        $school =$this->getSchoolOr404($id);

        return view('school/edit',[
            'school'=> $school,
            'title' => 'School editing',
        ]);
    }

    public function update($id)
    {
        $school =$this->getSchoolOr404($id);

        $school->fill($this->request->getPost());

        if(!$school->hasChanged()){
            return redirect()
                ->back()
                ->withInput($school)
                ->with('errors',['Nothing to update']);
        }

        if($this->model->save($school)){
            return redirect()
                ->to('')
                ->with('success','school update')
                ->with('data', $school);
        }else{
            return redirect()
                ->back()
                ->withInput($school)
                ->with('errors',$this->model->errors());
        }
    }


    public function delete($id)
    {
        $school = $this->getSchoolOr404($id);

        if($this->model->delete($id)){
            return redirect()
                ->to('')
                ->with('success','school deleted');
        }else{
            return redirect()
                ->back()
                ->with('errors',$this->model->errors());
        }

    }

    public function getSchoolOr404($id)
    {
        $school = $this->model->find($id);

        if($school === null){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with: $id not found!");
        }

        return $school;
    }

}
